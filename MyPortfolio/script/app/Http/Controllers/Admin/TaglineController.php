<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tagline;
class TaglineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taglines=Tagline::latest()->get();
        return view('admin.Tagline',compact('taglines'));
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
            'tag_line' => 'required',
            
        ]);
        $Tagline=new Tagline;
        $Tagline->tag_line=$request->tag_line;
        
        $Tagline->save();
        $notification = array(
            'message' => 'Tagline Created',
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
            'tag_line' => 'required',
            
        ]);
        $Tagline=Tagline::find($id);
        $Tagline->tag_line=$request->tag_line;
        
        $Tagline->save();
        $notification = array(
            'message' => 'Tagline updated',
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
       Tagline::destroy($id);
       $notification = array(
            'message' => 'Tagline Destroy',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification); 
    }
}
