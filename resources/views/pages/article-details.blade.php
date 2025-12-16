<!-- resources/views/pages/article-details.blade.php -->
@extends('layouts.app')

@section('title', "Article {$id}")

@section('content')

<x-article title="{{ $title }}" description="{{ $description }}" />

@endsection
