<?php

namespace App\Http\Requests;

class TagRequest extends Request
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
        if ($this->method() == 'PUT') {
            return [
                'name' => 'required',
            ];
        }

        return [
            'name' => 'required',
            'slug' => 'required|unique:tags',
        ];
    }
}
