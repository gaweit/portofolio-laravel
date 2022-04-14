<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::latest()->get();
        return view('admin.testimonial',compact('testimonials'));
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
            'name' => 'required',
            'avatar' => 'image',
            'position' => 'required',
            'review' => 'required',
            
        ]);

        $testimonial=new Testimonial;
        $testimonial->name=$request->name;
        $testimonial->review=$request->review;
        $testimonial->position=$request->position;
        if ($request->avatar) {

            $imageName = time().'.'.request()->avatar->getClientOriginalExtension();
            request()->avatar->move('uploads/',$imageName);
             $testimonial->avatar='uploads/'.$imageName;

         
        }
        $testimonial->save();
        $notification = array(
            'message' => 'Testimonial Created',
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
        Testimonial::destroy($id);
         $notification = array(
            'message' => 'Testimonial Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
