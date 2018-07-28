<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            //
            'name'=>'required|max:255',
            'alt'=>'required|max:255',
            'title'=>'required|max:255',
            'path'=>'required|file|image'
        ];
    }

    public function messages()
    {
        return [
            'alt.required'=>'Альтернативный текст обязателен к заполннению',
            'alt.max'=>'Альтернативный текст не должен превышать 255 символов',
            'title.required'=>'Титульное название обязательно к заполннению',
            'title.max'=>'Титульное название не должно превышать 255 символов',
            'path.required'=>'Необходимо загрузить изображение',
            'path.image'=>'Загружаемый файл должен быть в формате изображения',
        ];
    }
}
