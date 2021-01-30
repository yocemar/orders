<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder_detailPost extends FormRequest
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

            'item_id' => 'required|integer',
            'order_id' => 'required|integer',
            'quantity' => 'required',
            'lot' => 'required',            
            'note' => 'max:500',
            
            
            ];
    }
}
