<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homemodel;
class homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $save= homemodel::all();
        return view('admin.homeform',compact("save"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homeform');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $h = new homemodel;
        $h ->name=$request->name;
        $h ->body=$request->body;
        $h ->image=$request->image;
        $h->save();
        return redirect('homeform');

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
         $message = homemodel::find($id);
        return view('admin.eHome',compact("message"));
       
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
        
         $h = homemodel::find($id);
        $h ->name=$request->name;
        $h ->body=$request->body;
        $h ->image=$request->image;
        $h->save();
        return redirect('homeform');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $de = homemodel::find($id);
        $de->delete();
        return redirect('homeform');

    }
}
