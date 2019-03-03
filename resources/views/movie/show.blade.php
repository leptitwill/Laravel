@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col movie__picture">
            <img src="{{ asset('storage/'.snake_case($movie->movie_title).'.jpg') }}" alt="{{ snake_case($movie->movie_title) }}">
        </div>
        <div class="col movie__info">
            <h1>{{ $movie->movie_title }}</h1>
            <span class="movie_list__type">{{ $movie->type[0]->type_name }}</span>
            <p>
                Sortie en {{ $movie->movie_year }} | <i class="far fa-clock"></i> {{ $movie->movie_time }} minutes
            </p>
            <p>De {{ $movie->director[0]->director_firstname.' '.$movie->director[0]->director_lastname }}</p>
            <p>
                Avec 
                @foreach ($movie->actor as $actor)
                        {{ $actor->actor_firstname.' '.$actor->actor_lastname }}
                        ({{ $actor->casting->role }})
                        @if(!$loop->last)
                            ,
                        @endif
                @endforeach
            </p>
            <p class="movie__description">{{ $movie->movie_description }}</p>
        </div>
    </div>
@endsection