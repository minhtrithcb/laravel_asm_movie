<?php

namespace App\Http\Controllers;

use App\Models\genres;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $genres = genres::paginate(10);
        return view('admin.page.genres.index', ['genres' => $genres]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'tentheloai' => 'required|min:7|unique:genres,name',
            'trangthai' => 'required'
        ],[
            'tentheloai.required' => 'Tên thể loại không được phép để trống',
            'tentheloai.unique' => 'Tên thể loại đã bị trùng',
            'tentheloai.min' => 'Tên thể loại phải lớn hơn 7 kí tự',
            'trangthai.required' => 'Trạng thái không được để trống'
        ]);

        $genres = new genres;
        $genres->name = $request->tentheloai;
        $genres->slug = Str::of($request->tentheloai)->slug('-');
        $genres->active = $request->trangthai;
        
        $genres->save();
        return redirect('admin/genres')->with('msg', 'Thêm thể loại thành công');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $genres = genres::find($id);
        // return view('admin.page.edit', ['genres' => $genres]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $genres = genres::find($id);
        return view('admin.page.genres.edit', ['genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genres = genres::find($id);

        $request->validate([
            'tentheloai' => 'required|min:7',
            'trangthai' => 'required'
        ],[
            'tentheloai.required' => 'Tên thể loại không được phép để trống',
            'tentheloai.min' => 'Tên thể loại phải lớn hơn 7 kí tự',
            'trangthai.required' => 'Trạng thái không được để trống'
        ]);

        $genres->name = $request->tentheloai;
        $genres->active = $request->trangthai;
        $genres->slug = Str::of($request->tentheloai)->slug('-');
        $genres->save();

        return redirect('admin/genres')->with('msg', 'Sửa thể loại thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        genres::find($id)->delete();
        return redirect('admin/genres')->with('msg', 'Xóa thể loại thành công');

    }
}
