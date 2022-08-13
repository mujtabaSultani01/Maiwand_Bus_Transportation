<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallerymodel;
class gallery extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $save= gallerymodel::all();
        return view('admin.galleryform',compact("save"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galleryform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $h = new gallerymodel;
        $h ->image=$request->image;
        $h->save();
        return redirect('galleryform');
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
         $message = gallerymodel::find($id);
        return view('admin.galleryedit',compact("message"));
       
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
         $h = gallerymodel::find($id);
        $h ->image=$request->image;
        $h->save();
        return redirect('galleryform');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $de = gallerymodel::find($id);
        $de->delete();
        return redirect('galleryform');

    }
}
