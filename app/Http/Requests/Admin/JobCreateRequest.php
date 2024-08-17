<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JobCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255'],
            'company' => ['required', 'integer'],
            'company' => ['required', 'max:255'],
            'category' => ['required', 'integer'],
            'vacancies' => ['required', 'max:255'],
            'deadline' => ['required', 'date'],
            'country' => ['nullable', 'integer'],
            'state' => ['nullable', 'integer'],
            'city' => ['nullable', 'integer'],
            'address' => ['nullable', 'max:255'],
            'address' => ['nullable', 'max:255'],
            'salary_mode' => ['required', 'in:range,custom'],
            'min_salay' => ['nullable', 'numeric'],
            'max_salary' => ['nullable', 'numeric'],
            'custom_salary' => ['nullable', 'string', 'max:255'],
            'salary_type' => ['required', 'integer'],
            'experience' => ['required', 'integer'],
            'job_role' => ['required', 'integer'],
            'education' => ['required', 'integer'],
            'job_type' => ['required', 'integer'],
            'tags' => ['required'],
            'benefits' => ['required'],
            'skills' => ['required'],
            'receive_application' => ['required'],
            'description' => ['required'],
        ];
    }
}
