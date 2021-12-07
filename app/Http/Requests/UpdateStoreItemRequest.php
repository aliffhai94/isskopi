<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreItemRequest extends FormRequest
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
            'balance' => 'sometimes|max:255',
            'sell_amount' => 'sometimes|max:255',
            'add_amount' => 'sometimes|max:255',
            'total_amount	' => 'sometimes|max:255'
        ];
    }
}
