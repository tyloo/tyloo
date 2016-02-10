<?php

namespace App\Http\Requests;

class CustomerRequest extends Request
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
                'label'   => 'required|max:255',
            ];
        }

        return [
            'label'   => 'required|max:255',
            'image' => 'required|image',
        ];
    }
}
