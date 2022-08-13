<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staffmodel;
class staffcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $staffs= staffmodel::all();
        return view('admin.staff',compact("staffs"));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $h = new staffmodel;
        $h ->name=$request->name;
        $h ->lastname=$request->lastname;
        $h ->provence=$request->provence;
        $h ->age=$request->age;
        $h ->phone=$request->phone;
        $h ->salary=$request->salary;
        $h->save();
        return redirect('staff');
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
         $message = staffmodel::find($id);
        return view('admin.editstaff',compact("message"));
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
         $h = new staffmodel;
        $h ->name=$request->name;
        $h ->lastname=$request->lastname;
        $h ->provence=$request->provence;
        $h ->age=$request->age;
        $h ->phone=$request->phone;
        $h ->salary=$request->salary;
        $h->save();
        return redirect('staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $de = staffmodel::find($id);
        $de->delete();
        return redirect('staff');
    }
}
