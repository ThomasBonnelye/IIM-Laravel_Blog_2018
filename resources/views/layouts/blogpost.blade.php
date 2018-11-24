@extends('layouts.master')

@section('header')

@stop

@section('contenu')

    <h1>
        
        {{ $blog->id  }}  {{ $blog->titre }}

    </h1>

    <p>

        <strong>Auteur de l'article :</strong> {{ $blog->auteur }}

    </p>

    <p>

        {{ $blog->texte }}

    </p>

    {{ $blog->created_at }}

@stop