@foreach($chansons as $c)
    <div class="titre">
        <a class="chanson" data-file='{{ $c->fichier }}' href="#">
            <img src="/img/disque.png" class="cover" />
            <img src="/img/goplay.png" class="goplay" />
        </a>
        <span>{{ $c->nom }}</span><br />
        <i>Par <a data-pjax href="/utilisateur/{{ $c->utilisateur->id }}">{{ $c->utilisateur->name }}</a></i>
    </div>
@endforeach