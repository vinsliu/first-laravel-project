<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<h2>Bienvenue sur le site de {{ $name }}</h2>
<p>Ceci est le contenu principal de la page.</p>

@foreach ($articles as $article)
@if ($loop->last)
@break
@endif
<a href="/articles/{{ $article->id }}">
    <x-article title="{{ $article->title }}" description="{{ Str::limit($article->description, 30) }}" />
</a>
@endforeach

@endsection
