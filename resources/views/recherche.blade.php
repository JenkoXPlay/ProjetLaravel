@extends('layouts.app')

@section('content')

    <h2>Résultat(s) de votre recherche</h2>
    <h3>Les utilisateurs</h3>
    @foreach($utilisateurs as $u)
        <a data-pjax href="/utilisateur/{{$u->id}}">{{$u->name}}</a><br />
    @endforeach

    <h3>Les chansons</h3>
    @include("chansons", ['chansons'=>$chansons])

@endsection