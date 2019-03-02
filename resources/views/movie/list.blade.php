@extends('layouts.template')

@section('content')
    <h1>{{ $title }}</h1>
    <table class="table movies">
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td class="movie__picture">
                        <a href="{{ url('film/'.$movie->movie_id) }}">
                            <img src="{{ asset('img/'.snake_case($movie->movie_title).'.jpg') }}" alt="{{ snake_case($movie->movie_title) }}">
                        </a>
                    </td>
                    <td class="movie__info">
                        <p class="movie__title">{{ $movie->movie_title }}</p>
                        <span class="movie__type">{{ $movie->type[0]->type_name }}</span>
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
                        <p>{{ $movie->movie_year }} | <i class="far fa-clock"></i> {{ $movie->movie_time }} minutes</p>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection