@extends('layouts.template')

@section('content')
    <h1>{{ $title }}</h1>
    <form action="{{ url((isset($movie)) ? 'movie/'.$movie->movie_id : 'movie') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @isset($movie)
            {{method_field('PUT')}}
        @endisset
        <h2>Informations générales</h2>
        @include('movie.create_info')
        <h2>Directeur</h2>
        @include('movie.create_director')
        <h2>Casting</h2>
        <div id="movie__casting">
            @if (isset($movie))
                @foreach ($movie->actor as $key => $actor)
                    @include('movie.create_actor', ['key' => $key, 'actor' => $actor])
                @endforeach
            @else
                @for ($key = 0; $key < 2; $key++)    
                    @include('movie.create_actor', ['key' => $key])
                @endfor
            @endif
        </div>
        <button type="submit">{{ (isset($movie)) ? 'Modifier' : 'Ajouter' }} le film</button>
    </form>
@endsection