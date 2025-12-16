<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<h2 class="text-3xl font-bold mb-2">
    Bienvenue sur le site de {{ $name }}
</h2>

<p class="text-gray-600 mb-8">
    Découvrez nos derniers articles.
</p>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($articles as $article)
    @if ($loop->last)
    @break
    @endif

    <a
        href="{{ route('article.details', $article->id) }}"
        class="block transform transition hover:-translate-y-1 hover:shadow-lg">
        <x-article
            title="{{ $article->title }}"
            description="{{ Str::limit($article->description, 80) }}" />
    </a>
    @endforeach
</div>

@endsection
