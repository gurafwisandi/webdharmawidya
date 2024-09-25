<?php

namespace App\Http\Controllers;

use App\Models\GalleryModel;
use App\Models\SettingsModel;
use App\Models\SlidersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class KegiatanController extends Controller
{
    protected $default = 'kegiatan';

    /**
     * Display a listing of the resource.
     */
    public function index($unit)
    {
        $data = [
            'settings' => SettingsModel::firstorfail(),
            'unit' => $unit,
            'sliders' => SlidersModel::where('location', $this->default)->where('unit', $unit)->orderBy('id', 'desc')->limit('1')->get(),
            'fotos' => GalleryModel::where('type', 'foto')->where('unit', $unit)->groupBy('activity_id')->orderBy('id', 'desc')->limit(6)->get(),
            'videos' => GalleryModel::where('type', 'video')->where('unit', $unit)->groupBy('activity_id')->orderBy('id', 'desc')->limit(6)->get(),
        ];
        return view('kegiatan.data')->with($data);
    }

    public function details($id, $unit, $type)
    {
        $id = Crypt::decryptString($id);
        if ($type == 'foto') {
            $result = GalleryModel::where('type', 'foto')->where('unit', $unit)->where('activity_id', $id)->orderBy('id', 'desc')->get();
        } else {
            $result = GalleryModel::where('type', 'video')->where('unit', $unit)->where('activity_id', $id)->orderBy('id', 'desc')->get();
        }
        $data = [
            'settings' => SettingsModel::firstorfail(),
            'unit' => $unit,
            'sliders' => SlidersModel::where('location', $this->default)->where('unit', $unit)->orderBy('id', 'desc')->limit('1')->get(),
            'results' => $result,
            'type' => $type,
        ];
        return view('kegiatan.detail')->with($data);
    }

    public function moment($unit, $type)
    {
        if ($type == 'foto') {
            $result = GalleryModel::where('type', 'foto')->where('unit', $unit)->groupBy('activity_id')->orderBy('id', 'desc')->get();
        } else {
            $result = GalleryModel::where('type', 'video')->where('unit', $unit)->groupBy('activity_id')->orderBy('id', 'desc')->get();
        }
        $data = [
            'settings' => SettingsModel::firstorfail(),
            'unit' => $unit,
            'sliders' => SlidersModel::where('location', $this->default)->where('unit', $unit)->orderBy('id', 'desc')->limit('1')->get(),
            'results' => $result,
            'type' => $type,
        ];
        return view('kegiatan.all')->with($data);
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
