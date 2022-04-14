<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\About;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=About::first();
        return view('admin.about',compact('info'));
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
            'description' => 'required',
            'cv' => 'mimes:doc,docx,pdf',
            'file'=> 'image'
         ]);
       
         $info=About::first();
        if ($request->hasFile('cv')) {

            $cvname = time().'.'.request()->cv->getClientOriginalExtension();
            request()->cv->move('uploads/',$cvname);
            $cv='uploads/'.$cvname;

          if (file_exists($info->cv)) {
             unlink($info->cv);
         }
        }
        else{
            $cv=$info->cv;
        }
 
        if ($request->hasFile('file')) {
           
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move('uploads/',$imageName);
            $avatar='uploads/'.$imageName;

          if (file_exists($info->image)) {
             unlink($info->image);
         }
        }
        else{
            $avatar=$info->image;
        }

        DB::table('about')->update([
            'description'=>$request->description,
            'cv'=>$cv,
            'image'=>$avatar,
        ]);
        
        
          $notification = array(
            'message' => 'About Updated',
            'alert-type' => 'success'
        );

        return back()->with($notification);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
