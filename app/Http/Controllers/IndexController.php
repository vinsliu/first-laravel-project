<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index()
    {
        $articles = Article::all();

        return view('welcome', ['name' => 'Vincent', 'articles' => $articles]);
    }
}
