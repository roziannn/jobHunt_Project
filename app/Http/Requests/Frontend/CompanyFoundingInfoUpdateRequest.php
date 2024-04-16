<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class CompanyFoundingInfoUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'industry_type' => ['required', 'integer'],
            'organization_type' => ['required', 'integer'],
            'team_size' => ['required', 'integer'],
            'establishment_date' => ['required', 'date'],
            'website' => ['required', 'active_url'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'country' => ['required', 'string', 'max:100'],
            'state' => ['string', 'max:100'],
            'city' => ['string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'map_link' => ['nullable']

        ];
    }
}
