<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exeperince;

class ExeperinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Exeperince::latest()->get();
        return view('admin.expreince',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expreince.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'date' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]);

        $expreince = new Exeperince();
        $expreince->title = $request->title;
        $expreince->date = $request->date;
        $expreince->icon = $request->icon;
        $expreince->description = $request->description;
        $expreince->save();

        $notification = array(
            'message' => 'Exeperince Created',
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
        $expreince = Expreince::find($id);
        return view('admin.expreince.edit',compact('exprience'));
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
        $this->validate($request,[
            'title' => 'required',
            'date' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]);

        $expreince = Exeperince::find($id);
        $expreince->title = $request->title;
        $expreince->date = $request->date;
        $expreince->icon = $request->icon;
        $expreince->description = $request->description;
        $expreince->save();

        $notification = array(
            'message' => 'Exeperince Updated',
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
        Exeperince::find($id)->delete();

        $notification = array(
            'message' => 'Exeperince Deleted',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
