@extends('layout.base')

@section('content')

@auth
<a href="{{ route('videos.create') }}">Ajouter une nouvelle vidéo</a>    
@endauth

    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif


    @foreach ($videos as $video)
        <h2>{{ $video->name }}</h2>
        <iframe width="560" height="315" src="{{ $video->link }}" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Vidéo {{ $video->type }}</p>
            @auth    
            <form action="{{ route('videos.destroy', $video->id) }}" method="POST">
                <a href="{{ route('videos.edit', $video->id) }}">Modifier</a>
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer la video</button>
            </form>
            @endauth
    @endforeach
@endsection
