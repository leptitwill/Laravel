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
        <input type="text" name="title" id="movie_title" value="{{ old('title', $movie->movie_title ?? '') }}">
        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="form-group col">
        <label for="movie_year">Année de sortie</label>
        <input type="number" name="year" id="movie_year" value="{{ old('year', $movie->movie_year ?? '') }}">
        @if ($errors->has('year'))
            <span class="text-danger">{{ $errors->first('year') }}</span>
        @endif
    </div>
    <div class="form-group col">    
        <label for="movie_time">Durée du film</label>
        <input type="number" name="time" id="movie_time" value="{{ old('time', $movie->movie_time ?? '') }}">
        @if ($errors->has('time'))
            <span class="text-danger">{{ $errors->first('time') }}</span>
        @endif
    </div>
    <div class="col">
        <label for="movie_type">Type du film</label>
        <select id="movie_type" name="type" class="custom-select">
            @foreach ($types as $type)
                <option value="{{ $type->type_id }}" {{ (old('type', $movie->type[0]->type_id ?? '') == $type->type_id) ? 'selected' : '' }} >{{ $type->type_name }}</option>
            @endforeach
        </select>
        @if ($errors->has('type'))
            <span class="text-danger">{{ $errors->first('type') }}</span>
        @endif
    </div>
</div>
<div class="form-group">    
    <label for="movie_description">Description du film</label>
    <textarea name="description" id="movie_description">{{ old('description', $movie->movie_description  ?? '') }}</textarea>
    @if ($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
    @endif
</div>