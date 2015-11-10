<?php

namespace App\Http\Requests;

class PostWorkRequest extends Request
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
     * @return array<string,string>
     */
    public function rules()
    {
        if ($this->method() == 'PUT') {
            return [
                'title'   => 'required|max:255',
                'content' => 'required',
            ];
        }

        return [
            'title'   => 'required|max:255',
            'slug'    => 'required|max:255|unique:posts',
            'content' => 'required',
        ];
    }
}
