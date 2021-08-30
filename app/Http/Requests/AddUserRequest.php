<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddUserRequest extends FormRequest
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
            'first_name'                => ['string', 'required', 'max:255'],
            'last_name'                 => ['string', 'required', 'max:255'],
            'gender'                    => ['required', 'in:male,female'],
            'date_of_birth'             => ['required'],
            'tin'                       => ['nullable','string'],
            'nationality'               => ['required'],
            'civil_status'              => ['required', 'in:Single,Married,Separated,Widowed'],
            'role'                      => ['in:admin,client'],
            // 'email'                     => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(request('user'))],
            'email'                     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact_no'                => ['numeric'],
            'perma_address_1'           => ['required', 'string', 'max:255'],
            'perma_state'               => ['required', 'string', 'max:255'],
            'perma_address_2'           => ['required', 'string', 'max:255'],
            'perma_postcode'            => ['required', 'integer'],
            'perma_city'                => ['required', 'string', 'max:255'],
            'perma_country'             => ['required', 'string', 'max:255'],
            'pres_address_1'            => ['required', 'string', 'max:255'],
            'pres_state'                => ['required', 'string', 'max:255'],
            'pres_address_2'            => ['required', 'string', 'max:255'],
            'pres_postcode'             => ['required', 'integer'],
            'pres_city'                 => ['required', 'string', 'max:255'],
            'pres_country'              => ['required', 'string', 'max:255'],
        ];
    }
}
