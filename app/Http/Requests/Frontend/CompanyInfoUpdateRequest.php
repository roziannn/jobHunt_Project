<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class CompanyInfoUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'logo' => ['required', 'image', 'max:1500'],
            'banner' => ['required', 'image', 'max:1500'],
            'name' => ['required', 'string', 'max:100'],
            'bio' => ['required'],
            'vision' => ['required'],
        ];
    }
}
