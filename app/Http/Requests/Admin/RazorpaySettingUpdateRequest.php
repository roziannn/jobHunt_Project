<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RazorpaySettingUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'razorpay_status' => ['required', 'in:active,inactive'],
            'razorpay_country_name' => ['required'],
            'razorpay_currency_rate' => ['required', 'numeric'],
            'razorpay_currency_name' => ['required'],
            'razorpay_key' => ['required'],
            'razorpay_secret_key' => ['required'],
        ];
    }
}
