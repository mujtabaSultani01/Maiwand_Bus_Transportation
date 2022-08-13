<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\aboutus;
class aboutuscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $save= aboutus::all();
        return view('admin.aboutusform',compact("save"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aboutusform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $h = new aboutus;
        $h ->body=$request->body;
        $h ->image=$request->image;
        $h->save();
        return redirect('aboutusform');
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
        $message = aboutus::find($id);
        return view('admin.editaboutus',compact("message"));
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
           $h = aboutus::find($id);
        $h ->body=$request->body;
        $h ->image=$request->image;
        $h->save();
        return redirect('aboutusform');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $de = aboutus::find($id);
        $de->delete();
        return redirect('aboutusform');
    }
}
