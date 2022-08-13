<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drivermodel;
class drivercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $drivers= drivermodel::all();
        return view('admin.driver',compact("drivers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $h = new drivermodel;
        $h ->name=$request->name;
        $h ->lastname=$request->lastname;
        $h ->provence=$request->provence;
        $h ->age=$request->age;
        $h ->phone=$request->phone;
        $h->save();
        return redirect('driver');
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
        $message = drivermodel::find($id);
        return view('admin.editdriver',compact("message"));
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
        $h = new drivermodel;
        $h ->name=$request->name;
        $h ->lastname=$request->lastname;
        $h ->provence=$request->provence;
        $h ->age=$request->age;
        $h ->phone=$request->phone;
        $h->save();
        return redirect('driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $de = drivermodel::find($id);
        $de->delete();
        return redirect('driver');
    }
}
