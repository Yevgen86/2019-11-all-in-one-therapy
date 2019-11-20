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

<div class="sliderContainer">
    <div class="card">
        <img src="{{ asset('/images/woman-in-black.jpg') }}" alt="Anna Fink-first-slider">
        <div class="card__head">Anna Fink</div>
    </div>
    <div class="card">
        <img src="{{  asset('/images/woman-s-white.jpg') }}">
        <div class="card__head">Barbara Berg</div>
    </div>
    <div class="card">
        <img src="">
        <div class="card__head">Curious Cat</div>
    </div>
    <div class="card">
        <img src=".jpg">
        <div class="card__head">Prowling Cat</div>
    </div>
    <div class="card">
        <img src="">
        <div class="card__head">Sleepy Cat</div>
    </div>
</div>
@stop
