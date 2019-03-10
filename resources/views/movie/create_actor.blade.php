<div class="row">
    <div class="form-group col">    
        <label for="movie_actor_gender">Sexe de l'acteur</label>
        <select id="movie_actor_gender" name="actor_gender[]" class="custom-select">
            <option value="male" {{ (old('actor_gender.'.$key, $actor->actor_gender ?? '') === 'male') ? 'selected' : '' }} >Homme</option>
            <option value="female" {{ (old('actor_gender.'.$key, $actor->actor_gender ?? '') === 'female') ? 'selected' : '' }} >Femme</option>
        </select>
        @if ($errors->has('actor_gender.'.$key))
            <span class="text-danger">{{ $errors->first('actor_gender.'.$key) }}</span>
        @endif
    </div>
    <div class="form-group col">    
        <label for="movie_actor_firstname">Prénom de l'acteur</label>
        <input type="text" name="actor_firstname[]" id="movie_actor_firstname" value="{{ old('actor_firstname.'.$key, $actor->actor_firstname ?? '') }}">
        @if ($errors->has('actor_firstname.'.$key))
            <span class="text-danger">{{ $errors->first('actor_firstname.'.$key) }}</span>
        @endif
    </div>
    <div class="form-group col">    
        <label for="movie_actor_lastname">Nom de l'acteur</label>
        <input type="text" name="actor_lastname[]" id="movie_actor_lastname" value="{{ old('actor_lastname.'.$key, $actor->actor_lastname ?? '') }}">
        @if ($errors->has('actor_lastname.'.$key))
            <span class="text-danger">{{ $errors->first('actor_lastname.'.$key) }}</span>
        @endif
    </div>
    <div class="form-group col">    
        <label for="movie_actor_role">Rôle de l'acteur</label>
        <input type="text" name="actor_role[]" id="movie_actor_role" value="{{ old('actor_role.'.$key, $actor->casting->role ?? '') }}">
        @if ($errors->has('actor_role.'.$key))
            <span class="text-danger">{{ $errors->first('actor_role.'.$key) }}</span>
        @endif
    </div>
</div>