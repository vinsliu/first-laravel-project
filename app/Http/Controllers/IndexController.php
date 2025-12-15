<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index()
    {
        $articles = [
            'L’IA soigne mieux' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
            'Villes vertes' => 'Les métropoles deviennent plus écologiques et durables.',
            'Télétravail' => 'Plus de liberté, mais aussi plus de solitude.'
        ];

        return view('welcome', ['articles' => $articles]);
    }
}
