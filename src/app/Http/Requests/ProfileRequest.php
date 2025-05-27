<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'profile_image'=>['image' , 'mimes:jpeg,png']
        ];
    }

    public function messages()
    {
        return [
            'image.mimes:png,jpeg' => '「.png」または「.jpeg」形式でアップロードしてください',
        ];
    }
}
