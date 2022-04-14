<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use DB;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Portfolio::latest()->get();
        return view('admin.portfolio',compact('info'));
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
            'title' => 'required|max:30',
            'file'=> 'required|image'
         ]);

        if ($request->file) {

            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move('uploads/',$imageName);
            $file='uploads/'.$imageName;

         
        }
        if ($request->url) {
           $url=$request->url;
        }
        else{
            $url="#";
        }
        $link="<a href='".$url."'  target='".$request->target."' id='link'>".$request->title."</a>";

         $Portfolio=new Portfolio;
         $Portfolio->title=$link;
         $Portfolio->cat_id=$request->cat_id;
         $Portfolio->image=$file;
         
         $Portfolio->save();
          $notification = array(
            'message' => 'Portoflio Created',
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
        $info=Portfolio::find($id);
        return view('admin.portfolioedit',compact('info'));
       
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
            'title' => 'required|max:30',
            'file'=> 'image'
         ]);
         $portfolio= Portfolio::find($id);
        if ($request->file) {

            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move('uploads/',$imageName);
            $file='uploads/'.$imageName;
            if (file_exists($portfolio->image)) {
                unlink($portfolio->image);
            }
             $portfolio->image=$file;
         
        }

        if ($request->url) {
           $url=$request->url;
        }
        else{
            $url="#";
        }
        $link="<a href='".$url."'  target='".$request->target."' id='link'>".$request->title."</a>";
        
         $portfolio->title=$link;
         $portfolio->cat_id=$request->cat_id;
        
         
         $portfolio->save();
          $notification = array(
            'message' => 'Portoflio Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.portfolio.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info=Portfolio::find($id);
        if (file_exists($info->image)) {
            unlink($info->image);
        }
        Portfolio::destroy($id);
         $notification = array(
            'message' => 'Row Deleted',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
