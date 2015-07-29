<?php

namespace App\Http\Requests;

class ContactRequest extends Request
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
        $rules = [
            'contactName'    => 'required|string|max:255',
            'contactEmail'   => 'required|email|max:255',
            'contactMessage' => 'required',
        ];

        return $rules;
    }
}
