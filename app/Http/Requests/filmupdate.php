<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class filmupdate extends FormRequest
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
            'tenphim' => 'required',
            'namphathanh' => 'required',
            'imdb' => 'required',
            'thoiluong' => 'required',
            'noidung' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tenphim.required' => 'Tên phim không được phép để trống',
            'namphathanh.required' => 'Năm phát hành không được phép để trống',
            'imdb.required' => 'Điểm imdb không được phép để trống',
            'thoiluong.required' => 'Thời lượng không được phép để trống',
            'noidung.required' => 'Nội dung không được phép để trống',
        ];
    }
}
