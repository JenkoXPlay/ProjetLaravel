
    @foreach($chansons as $c)
        <a class="chanson" data-file='{{ $c->fichier }}' href="#">{{ $c->nom }}</a>
        
        Uploadée par <a href="/utilisateur/{{ $c->utilisateur->id }}">{{ $c->utilisateur->name }}</a><br>
    @endforeach

