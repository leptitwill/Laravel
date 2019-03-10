<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MovieEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'picture'            => 'image',
            'title'              => 'required|max:50',  Rule::unique('movie')->ignore($this->movie->movie_id, 'movie_id'),
            'time'               => 'required|integer',
            'year'               => 'required|integer',
            'type'               => 'required',
            'director_firstname' => 'required|max:50',
            'director_lastname'  => 'required|max:50',
            'actor_gender.*'     => 'required',
            'actor_firstname.*'  => 'required',
            'actor_lastname.*'   => 'required',
            'actor_role.*'       => 'required',
            'description'        => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            '*.required' => 'Le champ est obligatoire'
        ];
    }
}
