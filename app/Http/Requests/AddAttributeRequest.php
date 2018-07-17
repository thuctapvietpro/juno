<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAttributeRequest extends FormRequest
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
            //
            'ten_tt.unique:attributes,att_name',
            'gt.unique:attribute_values,att_value'
        ];
    }
    public function messages(){
        return [
            //
            'ten_tt.unique'=>'Tên thuộc tính đã bị trùng',
            'ten_tt.unique'=>'Giá trị thuộc tính đã bị trùng'
        ];
    }
}
