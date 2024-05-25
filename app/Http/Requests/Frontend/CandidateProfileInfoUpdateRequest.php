<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class CandidateProfileInfoUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'gender' => ['required', 'in:male,female'],
            'marital_status' => ['required', 'in:married,single'],
            'profession' => ['required', 'integer'],
            'availability' => ['required', 'in:available,not_available'],
            'skill_you_have' => ['required'],
            'language_you_know' => ['required'],
            'biography' => ['required'],
        ];
    }
}
