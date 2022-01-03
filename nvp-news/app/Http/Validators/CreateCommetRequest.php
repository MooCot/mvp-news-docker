<?php

namespace App\Http\Validators;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommetRequest extends ApiFormRequest
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
            'author_name' => ['required', 'string'],
            'content' => ['required', 'string'],
            'post_id' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
