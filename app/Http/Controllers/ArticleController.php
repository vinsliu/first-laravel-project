<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public static function show($id)
    {
        $article = Article::find($id);

        return view('pages.article-details', ['id' => $article->id, 'title' => $article->title, 'description' => $article->description]);
    }

    public static function create()
    {
        Article::create([
            'title' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
            'is_active' => true
        ]);

        Article::create([
            'title' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables.',
            'is_active' => true
        ]);

        Article::create([
            'title' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.',
            'is_active' => true
        ]);
    }

    public static function update($id)
    {
        $article = Article::find($id);
        $article->update([
            'title' => 'Article modifié',
            'description' => 'Description modifiée',
            'is_active' => true
        ]);
    }

    public static function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
    }
}
