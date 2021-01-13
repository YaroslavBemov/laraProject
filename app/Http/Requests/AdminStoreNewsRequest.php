<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return true;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:10|max:100',
            'description' => 'required|min:10|max:100',
            'category_id' => 'required|exists:category,id|integer',
            'time_to_read' => 'required|integer|max:255',
            'content' => 'string',
//            'is_active' => 'boolean'
        ];
    }
}
