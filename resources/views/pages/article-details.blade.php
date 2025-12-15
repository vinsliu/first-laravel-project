<!-- resources/views/pages/article-details.blade.php -->
@extends('layouts.app')

@section('title', "Article {$id}")

@section('content')

<h2>Article {{ $id }}</h2>
<p>Détails de l'article {{ $id }}</p>

@endsection
