<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comic_list = Comic::all();

        // dd($comic_list);
        return view('comic.index', compact('comic_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
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
            'title' => 'required|max:100|min:3',
            'description' => 'required|max:500',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:30',
            'sale_date' => 'required',
            'type' => 'required|max:50' 
        ]);

        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($data);
        // $new_comic->title = $data['title'];
        //  $new_comic->description =$data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_data'];
        // $new_comic->type = $data['type'];
        $new_comic->save();

        return redirect() ->route('comic.show', ['comic'=> $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected_comic = Comic::find($id);
        // dd($selected_comic);
        return view('comic.show', compact('selected_comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic_to_update = Comic::findOrFail($id);
        return view('comic.edit', compact('comic_to_update'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
