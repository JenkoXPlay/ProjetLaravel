@extends('layouts.app')

@section('content')

    <div class="centered">
        <h3>Nouvelle chanson</h3>

        <form action="/create" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <input type="text" class="inputHype" name="nom" placeholder="Titre de la chanson" required /><br /><br />
            <input type="text" class="inputHype" name="style" placeholder="Type de la chanson" required /><br /><br />
            <input type="file" class="inputHype" name="chanson" required /><br /><br />
            <input type="submit" class="btnHype" value="Ajouter la chanson" />
        </form>
    </div>

@endsection