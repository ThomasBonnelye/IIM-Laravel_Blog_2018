@extends('layouts.master')

@section('header')

    <h1>Portail Intranet</h1>

@stop


@section('contenu')

@foreach($blogs as $blog)

    <h3>

        <a href="{{ url('blog/'. $blog->id) }}">
        
        {{ $blog->id  }} / {{ $blog->titre }}

        </a>

    </h3>

 @if(Auth::check())

    <a href="{{ url('/edition/'.$blog->id) }}" class="btn btn-warning">Editer</a>
    <a href="{{ url('/suppression/'.$blog->id) }}" class="btn btn-danger">Supprimer</a>

  @endif

@endforeach

@stop


@section('aside')

    @include('layouts/authentifie')

    <h3>Filiales</h3>

    @foreach($categories as $categorie)
        
        <p>

            <a href="{{ url('categorie/'.$categorie->id) }}">
                {{ $categorie->titre_categorie }}
            </a>

        </p>


    @endforeach
    
@stop