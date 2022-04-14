<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use DB;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::latest()->get();
        return view('admin.service',compact('services'));
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
            'title' => 'required|max:50',
            'description' => 'required|max:100',
            'file'=> 'required|image'
         ]);

        if ($request->file) {

            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move('uploads/',$imageName);
            $file='uploads/'.$imageName;

         
        }
         $Service=new Service;
         $Service->title=$request->title;
         $Service->description=$request->description;
         $Service->icon=$file;
        
         
         $Service->save();
          $notification = array(
            'message' => 'Service Created',
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
         $validatedData = $request->validate([
            'title' => 'required|max:20',
            'description' => 'required|max:100',
            'file'=> 'image'
         ]);
         $info=Service::find($id);
          $service=Service::find($id);
        if ($request->file) {

            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move('uploads/',$imageName);
            $file='uploads/'.$imageName;
            if (file_exists($info->icon)) {
               unlink($info->icon);
            }
            $service->icon=$file;
         
        }
        
         $service->title=$request->title;
         $service->description=$request->description;
         
        
         
         $service->save();
          $notification = array(
            'message' => 'Service Updated',
            'alert-type' => 'success'
          );

        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info=Service::find($id);
        if (file_exists($info->icon)) {
            unlink($info->icon);
        }
        Service::destroy($id);
         $notification = array(
            'message' => 'Service Destroyed',
            'alert-type' => 'success'
          );

        return back()->with($notification);
    }
}
