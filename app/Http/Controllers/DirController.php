<?php

namespace App\Http\Controllers;

use App\Models\director;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dir = director::paginate(10);

        return view('admin.page.dir.index',['dir' => $dir]);
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
            'tendaodien' => 'required|min:7|unique:director,name',
            'namsinh' => 'required',
            'quoctich' => 'required',
            'tieusu' => 'required|min:20',

        ],[
            'tendaodien.required' => 'Tên đạo diễn không được phép để trống',
            'namsinh.required' => 'Năm sinh không được phép để trống',
            'quoctich.required' => 'Quốc tịch không được phép để trống',
            'tieusu.required' => 'Tiểu sử không được phép để trống',
            'tendaodien.unique' => 'Tên đạo diễn đã bị trùng',
            'tendaodien.min' => 'Tên đạo diễn phải lớn hơn 7 kí tự',
            'tieusu.min' => 'Tiểu sử đạo diễn phải lớn hơn 20 kí tự',
        ]);

        $director = new director;
        $director->name = $request->tendaodien;
        $director->slug = Str::of($request->tendaodien)->slug('-');
        $director->birthday	= $request->namsinh;
        $director->nationality = $request->quoctich;
        $director->story = $request->tieusu;

        if ($request->hasFile('hinh')) {
            $mypath = 'public/img';
            $imagename = $request->file('hinh')->getClientOriginalName();
            $path = $request->file('hinh')->storeAs($mypath,$imagename);
            $director->image = $imagename;
        }

        $director->active = $request->trangthai;
        $director->save();
        return redirect('admin/director')->with('msg', 'Thêm đạo diễn thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dir = director::find($id);
        return view('admin/page/dir/edit',['dir' => $dir]);
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
        $director = director::find($id);
        $request->validate([
            'tendaodien' => 'required|min:7',
            'namsinh' => 'required',
            'quoctich' => 'required',
            'tieusu' => 'required|min:20',

        ],[
            'tendaodien.required' => 'Tên đạo diễn không được phép để trống',
            'namsinh.required' => 'Năm sinh không được phép để trống',
            'quoctich.required' => 'Quốc tịch không được phép để trống',
            'tieusu.required' => 'Tiểu sử không được phép để trống',
            'tendaodien.min' => 'Tên đạo diễn phải lớn hơn 7 kí tự',
            'tieusu.min' => 'Tiểu sử đạo diễn phải lớn hơn 20 kí tự',
        ]);

        $director->name = $request->tendaodien;
        $director->slug = Str::of($request->tendaodien)->slug('-');
        $director->birthday	= $request->namsinh;
        $director->nationality = $request->quoctich;
        $director->story = $request->tieusu;

        if ($request->hasfile('hinh')) {
            $mypath = 'public/img';
            $imagename = $request->file('hinh')->getClientOriginalName();
            $request->file('hinh')->storeAs($mypath,$imagename);
            $director->image = $imagename;
        }

        $director->active = $request->trangthai;
        $director->update();
        return redirect('admin/director')->with('msg', 'Sửa đạo diễn thành công');
        // return dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        director::find($id)->delete();
        return redirect('admin/director')->with('msg', 'Bạn đã xóa thành công đạo diễn');

    }
}
