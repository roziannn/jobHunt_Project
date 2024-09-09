<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'site_name' => ['required', 'max:255'],
            'site_email' => ['required', 'max:255', 'email'],
            'site_phone' => ['required', 'max:255'],
            'site_default_currency' => ['required'],
            'site_currency_icon' => ['required'],
            'site_map' => ['nullable'],
        ];
    }
}
