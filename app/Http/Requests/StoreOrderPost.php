<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderPost extends FormRequest
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

        'number' => 'required|max:255|integer',
        'user_id' => 'required|integer',
        'customer_id' => 'required|integer',
        'shipment' => 'required',
        'type' => 'required',
        'detail_id' => 'required',
        'invoice' => 'max:500',
        'value' => 'max:500',

        
        ];
    }
}
