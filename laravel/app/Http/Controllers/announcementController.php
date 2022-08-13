<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\announcementmodel;

class announcementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $save= announcementmodel::all();
        return view('admin.announcementform',compact("save"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcementform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $h = new announcementmodel;
        $h ->name=$request->name;
        $h ->body=$request->body;
        $h ->image=$request->image;
        $h->save();
        return redirect('announcementform');
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
           $message = announcementmodel::find($id);
        return view('admin.editannouncement',compact("message"));
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
        $h = announcementmodel::find($id);
        $h ->name=$request->name;
        $h ->body=$request->body;
        $h ->image=$request->image;
        $h->save();
        return redirect('announcementform');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $de = announcementmodel::find($id);
        $de->delete();
        return redirect('announcementform');
    }
}







