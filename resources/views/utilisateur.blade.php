@extends('layouts.app')

@section('content')

    <h3>{{ $utilisateur->name }}</h3>

    @include('chansons', ['chansons' => $utilisateur->chansons])

@endsection