<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodRequest extends FormRequest
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
            'short_description'=>'required|max:255',
            'description'=>'required',
            'category_id'=>'required|numeric',
            'price'=>'required|numeric',
            'icon'=>'image'
        ];
    }

    public function messages()
    {
        return [
            'short_description.required'=>'Короткое описание обязательно к заполнению',
            'short_description.max'=>'Короткое описание не должно превышать 255 символов',
            'price.required'=>'Стоимость обязательна к заполнению',
            'price.numeric'=>'Стоимость должна быть в формате XX.XX',
            'icon.image'=>'Загружаемый файл должен быть в формате изображения'
        ];
    }
}
