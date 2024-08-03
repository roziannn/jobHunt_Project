<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PlanCreateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'label' => ['required', 'max:100'],
            'price' => ['required', 'integer', 'min:0'],
            'job_limit' => ['required', 'integer'],
            'featured_job_limit' => ['required', 'integer'],
            'highlight_job_limit' => ['required', 'integer'],
            'profile_verified' => ['required', 'boolean'],
            'recommended' => ['required', 'boolean'],
            'frontend_show' => ['required', 'boolean'],
        ];
    }
}
