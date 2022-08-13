<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\passengermodel;
class passengercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $passenger= passengermodel::all();
        return view('admin.passenger',compact("passenger"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passenger');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $h = new passengermodel;
        $h ->name=$request->name;
        $h ->provence=$request->provence;
        $h ->fee=$request->fee;
        $h ->phone=$request->phone;
        $h->save();
        return redirect('passenger');
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
        $message = passengermodel::find($id);
        return view('admin.editpassenger',compact("message"));
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
        $h = new passengermodel;
        $h ->name=$request->name;
        $h ->provence=$request->provence;
        $h ->fee=$request->fee;
        $h ->phone=$request->phone;
        $h->save();
        return redirect('passenger');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $de = passengermodel::find($id);
        $de->delete();
        return redirect('passenger');
    }
}
