<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\history_model;
class historycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         $save= history_model::all();
        return view('admin.abouthistory',compact("save"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('abouthistory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $h = new history_model;
        $h ->name=$request->name;
        $h ->body=$request->body;
        $h->save();
        return redirect('abouthistory');
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
        $message = history_model::find($id);
        return view('admin.edithistory',compact("message"));
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
        $h = history_model::find($id);
        $h ->name=$request->name;
        $h ->body=$request->body;
        $h->save();
        return redirect('abouthistory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $de = history_model::find($id);
        $de->delete();
        return redirect('abouthistory');
    }
}
