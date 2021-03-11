@extends('layout.base')

@section('content')
    <div>
        <div>
            <div>
                <h2>Modifier un ajout de vidéo</h2>
            </div>
            <div>
                <a href="{{ route('index') }}"> Retour à l'accueil</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div>
            <strong>Aie !</strong> Il y a un problème avec la modification de la video.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videos.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <div>
                <div>
                    <strong>Nom de la vidéo : </strong>
                    <input type="text" name="name" value="{{ $video->name }}" placeholder="Nom de la vidéo">
                </div>
            </div>
            <div>
                <div>
                    <strong>lien embbed de la vidéo :</strong>
                    <input name="link" placeholder="lien embbed de la vidéo" value="{{ $video->link }}">
                </div>
            </div>
            <div>
                <div>
                    <label>La vidéo est principale ou secondaire ?</label>
                    <select name="type">
                        <option value="Principale">Principale</option>
                        <option value="Secondaire">Secondaire</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit">Modifier</button>
            </div>
        </div>

    </form>
@endsection
