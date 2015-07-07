<?php

namespace App\Http\Requests;

class PostRequest extends Request
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
                'title' => 'required',
                'content' => 'required',
            ];
        }

        return [
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'content' => 'required',
        ];
    }
}
