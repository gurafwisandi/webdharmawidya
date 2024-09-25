<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\DaftarModel;
use App\Models\SettingsModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'settings' => SettingsModel::firstorfail(),
        ];
        return view('ppdb.input')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ppdb.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->sekolah_asal);
        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'sekolah_asal' => 'required',
            'jenjang_asal' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'nis' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $periode = new DaftarModel();
            $periode->sekolah_asal = $request->sekolah_asal;
            $periode->jenjang_asal = $request->jenjang_asal;
            $periode->nama = $request->nama;
            $periode->nis = $request->nis;
            $periode->phone = $request->phone;
            $periode->nik = $request->nik;
            $periode->email = $request->email;
            $periode->status = 1;
            $periode->save();

            $user = new User();
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt(12345);
            $user->roles = 'siswa';
            $user->phone = $request->nik;
            $user->save();

            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => 'Berhasil Input Data',
            ]);
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            return response()->json([
                'code' => 404,
                'message' => 'Gagal Input Data',
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
