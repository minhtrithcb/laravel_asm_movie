<?php

namespace App\Http\Controllers;

use App\Http\Requests\filmstore;
use App\Http\Requests\filmupdate;
use App\Models\director;
use App\Models\film;
use App\Models\genres;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = film::paginate(5);
        $genres = genres::all();
        $dir = director::all();
        return view('admin.page.film.index', ['film' => $film, 'genres' => $genres, 'dir' => $dir]);
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
    public function store(filmstore $request)
    {
        $film = new film;
        $film->title = $request->tenfilm;
        $film->slug = Str::of($request->tenfilm)->slug('-');
        $film->year_release	= $request->namphathanh;
        $film->imdb = $request->diemimdb;
        $film->time = $request->thoiluong;
        $film->link_youtube = $request->linkyoutube;
        $film->link = $request->link;
        $film->content = $request->noidung;

        $film->dir_id = $request->daodien;

        if ($request->hasFile('poster')) {
            $mypath = 'public/img';
            $imagename = $request->file('poster')->getClientOriginalName();
            $request->file('poster')->storeAs($mypath,$imagename);
            $film->poster = $imagename;
        }

        if ($request->hasFile('wallpaper')) {
            $mypath = 'public/img';
            $imagename = $request->file('wallpaper')->getClientOriginalName();
            $request->file('wallpaper')->storeAs($mypath,$imagename);
            $film->wallpaper = $imagename;
        }

        $film->save();
        $film->genres()->attach($request->theloai);

        
        return redirect('admin/film')->with('msg', 'Thêm phim thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = film::find($id);
        $dir = director::find($film->dir_id);
        $gen = $film->genres;
        // return dd($gen);
        return view('admin.page.film.detail', ['film' => $film , 'dir' => $dir, 'gen' => $gen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = film::find($id);
        $dir = director::all();
        $gen = genres::all();
        $filmgenres = $film->genres;
        $data = ['film' => $film, 'dir' => $dir, 'gen' => $gen, 'filmgenres' => $filmgenres];
        return view('admin.page.film.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(filmupdate $request, $id)
    {
        $film = film::find($id);     

        $film->title = $request->tenphim;
        $film->slug = Str::of($request->tenphim)->slug('-');
        $film->year_release	= $request->namphathanh;
        $film->imdb = $request->imdb;
        $film->time = $request->thoiluong;
        $film->link_youtube = $request->linkyoutube;
        $film->link = $request->link;
        $film->content = $request->noidung;

        $film->dir_id = $request->daodien;

        if ($request->hasFile('poster')) {
            $mypath = 'public/img';
            $imagename = $request->file('poster')->getClientOriginalName();
            $request->file('poster')->storeAs($mypath,$imagename);
            $film->poster = $imagename;
        }

        if ($request->hasFile('wallpaper')) {
            $mypath = 'public/img';
            $imagename = $request->file('wallpaper')->getClientOriginalName();
            $request->file('wallpaper')->storeAs($mypath,$imagename);
            $film->wallpaper = $imagename;
        }

        
        $film->genres()->sync($request->theloai);
        $film->update();
        // return dd($hasGenres);
        return redirect('admin/film')->with('msg', 'Sửa phim thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        film::find($id)->delete();
        return redirect()->back()->with('msg', 'Xóa phim thành công');
    }
}
