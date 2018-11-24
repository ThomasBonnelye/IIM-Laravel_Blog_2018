@extends('layouts.master')

@section('header')

    <h1>Un nouvel article</h1>

@stop

@section('contenu')

    {{ Form::open(array('url' => '/creation')) }}

    @include('layouts.forms.creer_ou_editer')

    {{ Form::close() }}

@stop
