<?php

namespace App\Http\Controllers;

use App\Models\CareersModel;
use App\Models\SettingsModel;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'settings' => SettingsModel::firstOrFail(),
            'careers' => CareersModel::all(),
        ];
        return view('karir.data')->with($data);
    }

    public function details($id)
    {
        $data = [
            'settings' => SettingsModel::firstOrFail(),
            'jobs' => CareersModel::where('link', $id)->firstOrFail(),
            'random' => CareersModel::whereNotIn('link', [$id])->inRandomOrder()->take(3)->get(),
        ];
        return view('karir.detail')->with($data);
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
