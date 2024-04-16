<?php

namespace App\Http\Requests\Frontend;

use App\Models\Company;
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
        $rules = [
            'logo' => ['image', 'max:1500'],
            'banner' => ['image', 'max:1500'],
            'name' => ['required', 'string', 'max:100'],
            'bio' => ['required'],
            'vision' => ['required'],
        ];

        $company = Company::where('user_id', auth()->user()->id)->first();

        // add conditional checking logo or banner was on database or not
        if (empty($company) || !$company?->logo) {
            $rules['logo'][] = 'required';
        }
        if (empty($company) || !$company?->banner) {
            $rules['banner'][] = 'required';
        }

        return $rules;
    }
}
