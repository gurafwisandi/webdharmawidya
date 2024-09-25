<?php

namespace App\Http\Controllers;

use App\Models\ContactUsModel;
use App\Models\SettingsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'settings' => SettingsModel::firstorfail(),
        ];
        return view('kontak.data')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mail' => 'required',
            'phone' => 'required',
            'unit' => 'required',
            'message' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $store = new ContactUsModel();
            $store->name = $request->name;
            $store->mail = $request->mail;
            $store->phone = $request->phone;
            $store->unit = $request->unit;
            $store->message = $request->message;
            $store->save();

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
