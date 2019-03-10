<div class="row">
    <div class="form-group col">
        <label for="movie_director_firstname">Prénom du directeur</label>
        <input type="text" name="director_firstname" id="movie_director_firstname" value="{{ old('director_firstname', $movie->director[0]->director_firstname ?? '') }}">
        @if ($errors->has('director_firstname'))
            <span class="text-danger">{{ $errors->first('director_firstname') }}</span>
        @endif
    </div>
    <div class="form-group col">
        <label for="movie_director_lastname">Nom du directeur</label>
        <input type="text" name="director_lastname" id="movie_director_lastname" value="{{ old('director_lastname', $movie->director[0]->director_lastname ?? '') }}">
        @if ($errors->has('director_lastname'))
            <span class="text-danger">{{ $errors->first('director_lastname') }}</span>
        @endif
    </div>
</div>