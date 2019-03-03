@extends('layouts.template')

@section('content')
    <h1>{{ $title }}</h1>
    <form action="{{ url('movie') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label for="movie_picture">Image du film</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" id="movie_picture" lang="fr">
                    <label class="custom-file-label" for="movie_picture">Choisir un fichier</label>
                    @if ($errors->has('picture'))
                        <span class="text-danger">{{ $errors->first('picture') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group col">
                <label for="movie_title">Nom du film</label>
                <input type="text" name="title" id="movie_title" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="movie_year">Année de sortie</label>
                <input type="number" name="year" id="movie_year" value="{{ old('year') }}">
                @if ($errors->has('year'))
                    <span class="text-danger">{{ $errors->first('year') }}</span>
                @endif
            </div>
            <div class="form-group col">    
                <label for="movie_time">Durée du film</label>
                <input type="number" name="time" id="movie_time" value="{{ old('time') }}">
                @if ($errors->has('time'))
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                @endif
            </div>
            <div class="col">
                <label for="movie_type">Type du film</label>
                <select id="movie_type" name="type" class="custom-select">
                    @foreach ($types as $type)
                        <option value="{{ $type->type_id }}" {{ (old('type') == $type->type_id) ? 'selected' : '' }} >{{ $type->type_name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="movie_director_firstname">Prénom du directeur</label>
                <input type="text" name="director_firstname" id="movie_director_firstname" value="{{ old('director_firstname') }}">
                @if ($errors->has('director_firstname'))
                    <span class="text-danger">{{ $errors->first('director_firstname') }}</span>
                @endif
            </div>
            <div class="form-group col">
                <label for="movie_director_lastname">Nom du directeur</label>
                <input type="text" name="director_lastname" id="movie_director_lastname" value="{{ old('director_lastname') }}">
                @if ($errors->has('director_lastname'))
                    <span class="text-danger">{{ $errors->first('director_lastname') }}</span>
                @endif
            </div>
        </div>
        @for ($i = 0; $i < 2; $i++)
            <div class="row">
                <div class="form-group col">    
                    <label for="movie_actor_gender">Sexe de l'acteur</label>
                    <select id="movie_actor_gender" name="actor_gender[]" class="custom-select">
                        <option value="male" {{ (old('actor_gender.'.$i) === 'male') ? 'selected' : '' }} >Homme</option>
                        <option value="female" {{ (old('actor_gender.'.$i) === 'female') ? 'selected' : '' }} >Femme</option>
                    </select>
                    @if ($errors->has('actor_gender.'.$i))
                        <span class="text-danger">{{ $errors->first('actor_gender.'.$i) }}</span>
                    @endif
                </div>
                <div class="form-group col">    
                    <label for="movie_actor_firstname">Prénom de l'acteur</label>
                    <input type="text" name="actor_firstname[]" id="movie_actor_firstname" value="{{ old('actor_firstname[]') }}">
                    @if ($errors->has('actor_firstname.'.$i))
                        <span class="text-danger">{{ $errors->first('actor_firstname.'.$i) }}</span>
                    @endif
                </div>
                <div class="form-group col">    
                    <label for="movie_actor_lastname">Nom de l'acteur</label>
                    <input type="text" name="actor_lastname[]" id="movie_actor_lastname" value="{{ old('actor_lastname[]') }}">
                    @if ($errors->has('actor_lastname.'.$i))
                        <span class="text-danger">{{ $errors->first('actor_lastname.'.$i) }}</span>
                    @endif
                </div>
                <div class="form-group col">    
                    <label for="movie_actor_role">Rôle de l'acteur</label>
                    <input type="text" name="actor_role[]" id="movie_actor_role" value="{{ old('actor_role[]') }}">
                    @if ($errors->has('actor_role.'.$i))
                        <span class="text-danger">{{ $errors->first('actor_role.'.$i) }}</span>
                    @endif
                </div>
            </div>
        @endfor
        <div class="form-group">    
            <label for="movie_description">Description du film</label>
            <textarea name="description" id="movie_description">{{ old('description') }}</textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <button type="submit">Ajouter le film</button>
    </form>
@endsection