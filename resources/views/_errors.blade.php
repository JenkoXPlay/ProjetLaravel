@if ($errors->any())
    <div class="alert alert-danger width_50">
        <ul>
            @foreach ($errors->all as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif