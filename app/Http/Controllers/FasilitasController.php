<?php

namespace App\Http\Controllers;

use App\Models\FasilitasImageModel;
use App\Models\FasilitasModel;
use App\Models\SettingsModel;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'settings' => SettingsModel::firstorfail(),
            'fasilitas' => FasilitasModel::firstorfail(),
            'fasilitas_image' => FasilitasImageModel::all(),
        ];
        return view('tentang.fasilitas')->with($data);
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
        //
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
