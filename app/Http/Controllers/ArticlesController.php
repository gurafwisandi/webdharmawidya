<?php

namespace App\Http\Controllers;

use App\Models\ArticlesModel;
use App\Models\CategoriesModel;
use App\Models\SettingsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'settings' => SettingsModel::firstorfail(),
            'articles' => ArticlesModel::orderBy('id', 'desc')->paginate(3),
        ];
        return view('articles.data')->with($data);
    }

    public function details($id)
    {
        $categories = DB::table(DB::raw("
                                            (
                                                SELECT 
                                                    SUBSTRING_INDEX(SUBSTRING_INDEX(articles.categorys_id, '|', numbers.n), '|', -1) AS categorys_id
                                                FROM articles
                                                JOIN (
                                                    SELECT 1 AS n UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
                                                ) numbers
                                                ON CHAR_LENGTH(articles.categorys_id) - CHAR_LENGTH(REPLACE(articles.categorys_id, '|', '')) >= numbers.n - 1
                                            ) AS category_split
                                        "))
            ->join('categories', 'categories.id', '=', 'category_split.categorys_id')
            ->select('categories.category', 'category_split.categorys_id', DB::raw('COUNT(category_split.categorys_id) AS category_count'))
            ->groupBy('category_split.categorys_id', 'categories.category')
            ->get();
        $data = [
            'settings' => SettingsModel::firstOrFail(),
            'article' => ArticlesModel::where('link', $id)->firstOrFail(),
            'recent' => ArticlesModel::orderBy('created_at', 'desc')->take(3)->get(),
            'random' => ArticlesModel::whereNotIn('link', [$id])->inRandomOrder()->take(3)->get(),
            'categories' => $categories,
        ];
        return view('articles.detail', compact('categories'))->with($data);
    }

    public function form(Request $request)
    {
        return redirect()->to('/search?s=' . urlencode($request->text));
    }

    public function search(Request $request)
    {
        if ($request->query('s')) {
            $text = $request->query('s');
            $articles = ArticlesModel::where('title', 'like', '%' . $text . '%')->orderBy('id', 'desc')->paginate(3);
        } else {
            $text = $request->query('c');
            $category_id = null;
            $categories = CategoriesModel::where('category', $text)->firstOrFail();
            if ($categories->id) {
                $category_id = $categories->id;
            }
            $articles = ArticlesModel::select('articles.*')
                ->where('categorys_id', 'like', '%' . $category_id . '%')
                ->orderBy('articles.id', 'desc')
                ->paginate(3);
            $text = null;
        }

        $data = [
            'settings' => SettingsModel::firstorfail(),
            'articles' => $articles,
            'text' => $text,
        ];
        return view('articles.data')->with($data);
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
