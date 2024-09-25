<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $title = 'PPDB';
    protected $menu = 'login';

    public function index()
    {

        $data = [
            'title' => $this->title,
            'menu' => $this->menu,
            'submenu' => 'login',
            'label' => 'login',
        ];
        return view('ppdb.login')->with($data);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // dd($request->all());
            if (Auth::user()->roles == 'Administrator') {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else if (Auth::user()->roles == 'guru') {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else if (Auth::user()->roles == 'siswa') {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back()->with('loginError', 'Login Fail!');
            }
        }
        return back()->with('loginError', 'Login Fail!');
    }

    public function recovery(Request $request)
    {
        $data = [
            'title' => $this->title,
            'menu' => $this->menu,
            'submenu' => 'recovery',
            'type' => 'recovery',
            'subject' => 'Reset Password',
            'p' => 'PPDB',
            'submit' => 'Reset',
        ];
        return view('login.recovery')->with($data);
    }

    public function reverify(Request $request)
    {
        $data = [
            'title' => $this->title,
            'menu' => $this->menu,
            'submenu' => 'reverify',
            'type' => 'reverify',
            'subject' => 'Reverify Email',
            'p' => 'PPDB',
            'submit' => 'Reverify',
        ];
        return view('login.recovery')->with($data);
    }

    public function logout(Request $request)
    {
        User::where(['id' => Auth::user()->id])->update([
            'date_login' => null,
            'date_logout' => Carbon::now(),
        ]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
