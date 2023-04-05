<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClubRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required|string|min:4',
            'locality'=>'required|string|min:4',
            'email'=>'required|email',
            'address'=>'string|min:4',
            'training_day'=>'string|min:4',
            'training_time'=>'string|min:2',
            'description'=>'string|min:4',
            'contact_person'=>'string|min:4',
            'phone_number'=>'string|min:9',
            'mobile_number'=>'string|min:9',
        ];
    }
}
