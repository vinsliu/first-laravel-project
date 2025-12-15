<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public static function show($id)
    {
        return view('pages.article-details', ['id' => $id]);
    }
}
