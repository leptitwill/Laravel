@extends('layouts.template')

@section('content')
    <h1>{{ $title }}</h1>
    <table class="table movies">
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td class="movie_list__picture">
                        <a href="{{ url('movie/'.$movie->movie_id) }}">
                            <img src="{{ asset('img/'.snake_case($movie->movie_title).'.jpg') }}" alt="{{ snake_case($movie->movie_title) }}">
                        </a>
                    </td>
                    <td class="movie_list__info">
                        <p class="movie_list__title">{{ $movie->movie_title }}</p>
                        <span class="movie_list__type">{{ $movie->type[0]->type_name }}</span>
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