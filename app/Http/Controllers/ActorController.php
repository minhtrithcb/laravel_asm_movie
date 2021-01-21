<?php

namespace App\Http\Controllers;

use App\Models\actor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actor = actor::paginate(10);
        return view('admin.page.actor.index', ['actor' => $actor]);
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
            'tendienvien' => 'required|min:7|unique:actor,name',
            'namsinh' => 'required',
            'quoctich' => 'required',
            'chieucao' => 'required',
            'cannang' => 'required',
            'tieusu' => 'required|min:20',

        ],[
            'tendienvien.required' => 'Tên diễn viên không được phép để trống',
            'namsinh.required' => 'Năm sinh không được phép để trống',
            'quoctich.required' => 'Quốc tịch không được phép để trống',
            'tieusu.required' => 'Tiểu sử không được phép để trống',
            'chieucao.required' => 'Chiều cao không được phép để trống',
            'cannang.required' => 'Cân nặng không được phép để trống',
            'tendienvien.unique' => 'Tên diễn viên đã bị trùng',
            'tendienvien.min' => 'Tên diễn viên phải lớn hơn 7 kí tự',
            'tieusu.min' => 'Tiểu sử diễn viên phải lớn hơn 20 kí tự',
        ]);

        $actor = new actor;
        $actor->name = $request->tendienvien;
        $actor->slug = Str::of($request->tendienvien)->slug('-');
        $actor->birthday	= $request->namsinh;
        $actor->nationality = $request->quoctich;
        $actor->height = $request->chieucao;
        $actor->weight = $request->cannang;
        $actor->story = $request->tieusu;

        if ($request->hasFile('hinh')) {
            $mypath = 'public/img';
            $imagename = $request->file('hinh')->getClientOriginalName();
            $path = $request->file('hinh')->storeAs($mypath,$imagename);
            $actor->image = $imagename;
        }

        $actor->active = $request->trangthai;
        $actor->save();
        return redirect('admin/actor')->with('msg', 'Thêm diễn viên thành công');
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
        $actor = actor::find($id);
        return view('admin/page/actor/edit',['actor' => $actor]);
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

        $actor = actor::find($id);

        $request->validate([
            'tendienvien' => 'required|min:7',
            'namsinh' => 'required',
            'quoctich' => 'required',
            'chieucao' => 'required',
            'cannang' => 'required',
            'tieusu' => 'required|min:20',

        ],[
            'tendienvien.required' => 'Tên diễn viên không được phép để trống',
            'namsinh.required' => 'Năm sinh không được phép để trống',
            'quoctich.required' => 'Quốc tịch không được phép để trống',
            'tieusu.required' => 'Tiểu sử không được phép để trống',
            'chieucao.required' => 'Chiều cao không được phép để trống',
            'cannang.required' => 'Cân nặng không được phép để trống',
            'tendienvien.min' => 'Tên diễn viên phải lớn hơn 7 kí tự',
            'tieusu.min' => 'Tiểu sử diễn viên phải lớn hơn 20 kí tự',
        ]);

        $actor->name = $request->tendienvien;
        $actor->slug = Str::of($request->tendienvien)->slug('-');
        $actor->birthday	= $request->namsinh;
        $actor->nationality = $request->quoctich;
        $actor->height = $request->chieucao;
        $actor->weight = $request->cannang;
        $actor->story = $request->tieusu;

        if ($request->hasFile('hinh')) {
            $mypath = 'public/img';
            $imagename = $request->file('hinh')->getClientOriginalName();
            $path = $request->file('hinh')->storeAs($mypath,$imagename);
            $actor->image = $imagename;
        }

        $actor->active = $request->trangthai;
        $actor->save();
        return redirect('admin/actor')->with('msg', 'Sửa diễn viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        actor::find($id)->delete();
        return redirect('admin/actor')->with('msg', 'Xóa diễn viên thành công');

    }
}
