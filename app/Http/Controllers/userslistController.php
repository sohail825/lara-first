<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userslist;
use App\Http\Requests\allusersRequest;
use RealRashid\SweetAlert\Facades\Alert;


class userslistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stu = userslist::all();
        return view('userlist',compact('stu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(allusersRequest $request)
    {
        userslist::create($request->all());
        return redirect()->route('users.index')->with('added','New User Added Successfully!');
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
        $stu = userslist::find($id);
        return view('edituser',compact('stu'));   
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
         $stu = userslist::find($id);
         $stu->update($request->all());
         return redirect()->route('users.index')->with('updated','User Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studt = userslist::find($id);
        $studt->delete();
        Alert::success('Record Deleted Successfully', 'Success Message');

        return redirect()->back();
    }
  
}