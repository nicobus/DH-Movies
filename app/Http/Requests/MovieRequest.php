<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
        return [ 'title' => 'required|string|min:1|max:500',
        'rating' => "required|numeric|min:1|max:10",
        "awards" => "required|numeric|min:0",
        "release_date" => "required|date",
        "length" => "required|integer|min:1",
        "genre_id" => "required|integer",
        "poster" => "image"
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo es obligatorio',
            'awards.required' => 'El campo es obligatorio en caso de no tener premios ingrese 0',
            'integer' => 'El campo :attribute debe ser numerico',
            'title.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'title.max' => 'El campo :attribute no bebe superar :max caracteres',
            'min' => 'El campo :attribute debe ser mayor a :min',
            'max' => 'El campo :attribute debe ser menor a :max',
            'genre_id.integer' => 'Debe seleccionar un genero para la pelicula',
            'poster' => 'La imagen debe ser de formato .jpg, .png, etc'
        ];
    }
}
