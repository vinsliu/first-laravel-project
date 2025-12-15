<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<h2>Bienvenue sur la page d’accueil</h2>
<p>Ceci est le contenu principal de la page.</p>

@foreach ($articles as $title => $description)
@if ($loop->last)
@break
@endif
<x-article title="{{ $title }}" description="{{ $description }}" />
@endforeach

@endsection
