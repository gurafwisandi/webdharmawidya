<?php

namespace App\Http\Controllers;

use App\Models\CommentsModel;
use App\Models\InformationModel;
use App\Models\ServicesModel;
use App\Models\SettingsModel;
use App\Models\SlidersModel;
use App\Models\StrukturModel;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    protected $default = 'akademik';

    /**
     * Display a listing of the resource.
     */
    public function index($unit)
    {
        $data = [
            'unit' => $unit,
            'settings' => SettingsModel::firstorfail(),
            'sliders' => SlidersModel::where('location', $this->default)->where('unit', $unit)->orderBy('id', 'desc')->limit('1')->get(),
            'services' => ServicesModel::where('unit', $unit)->get(),
            'comments' => CommentsModel::where('unit', $unit)->inRandomOrder()->limit(3)->get(),
            'informations' => InformationModel::where('unit', $unit)->get(),
            'struktur' => StrukturModel::where('unit', $unit)->get(),
        ];
        return view('academic.akademik')->with($data);
    }

    public function akademi_content(Request $request)
    {
        try {
            $content = InformationModel::where('unit', $request->unit)->where('type', $request->type)->firstorfail();
        } catch (\Throwable $th) {
            $content = null;
        }
        $data = [
            'content' => $content,
        ];
        return view('academic.content')->with($data);
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
