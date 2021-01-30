<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemPost extends FormRequest
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

            'name' => 'required',
            'location_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'code' => 'required',
            'type' => 'required',
            'detail' => 'required',
            'image' => 'max:500',
               
            
            ];
    }
}
