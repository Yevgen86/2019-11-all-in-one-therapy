@extends('base')

@section('title', 'Welcome AIOT')

@section('top-links')
    @auth
        <a href="{{ url('/') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth
@stop


@section('main')
<h1>Welcome to Frontend!</h1>
@stop
