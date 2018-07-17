<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'ten_dm'=>'unique:categorys,cate_name'
        ];
    }
    public function messages(){
        return [
            //
            'ten_dm.unique'=>'tên danh mục đã bị trùng'
        ];
    }
}
