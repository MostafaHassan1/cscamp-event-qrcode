<?php

namespace App\Http\Requests\participants;

use Illuminate\Foundation\Http\FormRequest;

class CreateParticipantRequest extends FormRequest
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
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|email|unique:participants',
            'phone_number' => 'required|digits:11|unique:participants|string',
            'vjudge' => 'required|min:3|max:255|string',
            'department' => 'required|max:255|string',
            'academic_year' => 'required|integer|min:1|max:4',
        ];
    }
}
