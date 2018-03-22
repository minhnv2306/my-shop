<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingAddressRequest extends FormRequest
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
            'billing_first_name' => 'required',
            'billing_last_name' => 'required',
            'billing_email' => 'required',
            'billing_phone' => 'required',
            'billing_address_1' => 'required',
            'billing_city' => 'required',
            'billing_state' => 'required',
        ];
    }
}
