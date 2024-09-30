<?php

namespace App\Http\Controllers;

use App\Models\ArticlesModel;
use App\Models\CommentsModel;
use App\Models\EskulModel;
use App\Models\FoundersModel;
use App\Models\GalleryModel;
use App\Models\MetodePemModel;
use App\Models\SettingsModel;
use App\Models\SlidersModel;
use App\Models\TaglineModel;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    protected $default = 'home';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'settings' => SettingsModel::firstorfail(),
            'sliders' => SlidersModel::where('location', $this->default)->orderBy('id', 'desc')->get(),
            'metode' => MetodePemModel::orderBy('description', 'asc')->get(),
            'eskul' => EskulModel::get(),
            'tagline' => TaglineModel::orderBy('description', 'desc')->limit(3)->get(),
            'keunggulan' => TaglineModel::where('nama', 'Sekolah Ungulan')->whereNull('deleted_at')->first(),
            'founders' => FoundersModel::where('status', 1)->firstorfail(),
            'fotos' => GalleryModel::where('type', 'foto')->groupBy('activity_id')->orderBy('id', 'desc')->limit(6)->get(),
            'articles' => ArticlesModel::orderBy('id', 'desc')->limit(6)->get(),
            'comments' => CommentsModel::inRandomOrder()->limit(7)->get(),
        ];
        return view('utama.data')->with($data);
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
