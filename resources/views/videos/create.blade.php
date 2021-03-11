@extends('layout.base')

@section('content')
    <div>
        <div>
            <div>
                <h2>Ajouter une nouvelle vidéo</h2>
            </div>
            <div>
                <a href="{{ route('index') }}"> Retour à l'accueil</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div>
            <strong>Aie !</strong> Il y a un problème avec la video que vous avez ajouté<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videos.store') }}" method="POST">
        @csrf

        <div>
            <div>
                <div>
                    <label for="video_name">Nom de la vidéo : </label>
                    <input required type="text" name="name" placeholder="Entrez le nom de la video" id="video_name">
                </div>
            </div>
            <div>
                <div>
                    <label for="video-link">Lien embbed de la vidéo :</label>
                    <input required type="text" name="link" placeholder="Entrez le lien embbed de la vidéo" id="video_link">
                </div>
            </div>
            <div>
                <div>
                    <label>La vidéo est principale ou secondaire ?</label>
                    <select required name="type">
                        <option valeur="principale">Principale</option>
                        <option valeur="secondaire">Secondaire</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit">Ajouter</button>
            </div>
        </div>

    </form>
@endsection
