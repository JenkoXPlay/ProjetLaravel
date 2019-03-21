@extends('layouts.app')

@section('content')

    <h3>Go écouter des musiques !</h3>

    @foreach($chansons as $c)
        <a class="chanson" data-file='{{ $c->fichier }}' href="#">{{ $c->nom }}</a>
    @endforeach

@endsection