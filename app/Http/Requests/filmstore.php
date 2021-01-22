<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class filmstore extends FormRequest
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
            'tenfilm' => 'required|unique:film,title',
            'namphathanh' => 'required',
            'diemimdb' => 'required',
            'thoiluong' => 'required',
            'noidung' => 'required',
            'poster' => 'required',
            'wallpaper' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tenfilm.required' => 'Tên phim không được phép để trống',
            'tenfilm.unique' => 'Tên phim đã bị trùng',
            'namphathanh.required' => 'Năm phát hành không được phép để trống',
            'diemimdb.required' => 'Điểm imdb không được phép để trống',
            'thoiluong.required' => 'Thời lượng không được phép để trống',
            'noidung.required' => 'Nội dung không được phép để trống',
            'poster.required' => 'Poster không được phép để trống',
            'wallpaper.required' => 'Wallpaper không được phép để trống',
        ];
    }
}
