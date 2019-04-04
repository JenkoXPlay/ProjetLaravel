@extends('layouts.app')

@section('content')

    <h3>{{ $utilisateur->name }}</h3>

    <br />

    @auth
        @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                <a href="/suivi/{{$utilisateur->id}}">Ne plus suivre</a>
            @else
                <a href="/suivi/{{$utilisateur->id}}">Suivre</a>
            @endif
            <br />
        @endif
    @endauth

    Il suit {{$utilisateur->jeLesSuit->count()}} personne(s)<br />
    Il est suivi par {{$utilisateur->ilsMeSuivent->count()}} personne(s)

    <br /><br />
    @include('chansons', ['chansons' => $utilisateur->chansons])

@endsection