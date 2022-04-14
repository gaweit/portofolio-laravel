<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Social;
class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials=Social::latest()->get();
        return view('admin.socials',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'classname' => 'required',
            'link' => 'required',
        ]);
        $Social=new Social;
        $Social->icon=$request->classname;
        $Social->link=$request->link;
        $Social->save();
        $notification = array(
            'message' => 'Social Created',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification); 
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
        //
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
         $validatedData = $request->validate([
            'classname' => 'required',
            'link' => 'required',
        ]);
        $Social=Social::find($id);
        $Social->icon=$request->classname;
        $Social->link=$request->link;
        $Social->save();
        $notification = array(
            'message' => 'Social Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Social::destroy($id);
       $notification = array(
            'message' => 'Social Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification); 
    }
}
