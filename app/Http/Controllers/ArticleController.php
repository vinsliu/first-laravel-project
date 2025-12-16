<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public static function show($id)
    {
        $article = Article::find($id);

        if (!$article) return view('errors.not-found');

        return view('pages.article-details', ['article' => $article]);
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

        return 'Les articles ont été créés.';
    }

    public static function update($id)
    {
        $article = Article::find($id);

        if (!$article) return "Article $id introuvable.";

        $article->update([
            'title' => 'Article modifié',
            'description' => 'Description modifiée',
            'is_active' => true
        ]);

        return "Article $id modifié.";
    }

    public static function delete($id)
    {
        $article = Article::find($id);

        if (!$article) return "Article $id introuvable.";

        $article->delete();

        return "Article $id supprimé.";
    }
}
