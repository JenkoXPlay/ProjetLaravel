@extends('layouts.app')

@section('content')

    <h3>Nouvelle chanson</h3>

    <form action="/create" method="post" enctype="multipart/form-data">
        {{ @csrf_field() }}
        <input type="text" name="nom" placeholder="Titre de la chanson" /><br /><br />
        <input type="text" name="style" placeholder="Type de la chanson" /><br /><br />
        <input type="file" name="chanson" /><br /><br />
        <input type="submit" value="Ajouter la chanson" />
    </form>

@endsection