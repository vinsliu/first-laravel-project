<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public static function show($id)
    {
        return "Article portant l'identifiant $id.";
    }
}
