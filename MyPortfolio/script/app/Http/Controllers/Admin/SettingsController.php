<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Setting;
use App\Contact;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $info=Setting::first();
       $contact=Contact::first();
       return view('admin.settings.site_settings',compact('info','contact'));
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
         $request->validate([
            'logo' => 'image',
            'favicon' => 'mimes:ico',
            
        ]);
         $settings=Setting::first();
        
             if ($request->logo) {
                 $imageName = time().'.'.request()->logo->getClientOriginalExtension();
                  request()->logo->move('uploads/',$imageName);
                $logo='uploads/'.$imageName;
                if (file_exists($settings->logo)) {
                      unlink($settings->logo);
                  }
                
             }
             else{
                $logo=$settings->logo;
             }


             if ($request->favicon) {
                 $imageName = time().'2.'.request()->favicon->getClientOriginalExtension();
                  request()->favicon->move('uploads/',$imageName);
                  $favicon='uploads/'.$imageName;
                  if (file_exists($settings->favicon)) {
                      unlink($settings->favicon);
                  }
                 
             }
             else{
                 $favicon=$settings->favicon;
             }



          


             if ($request->home_img) {
                 $faqimg = time().'3.'.request()->home_img->getClientOriginalExtension();
                  request()->home_img->move('uploads/',$faqimg);
                  $home_img='uploads/'.$faqimg;
                  if (file_exists($settings->home_img)) {
                      unlink($settings->home_img);
                  }
                 
             }
             else{
                 $home_img=$settings->home_img;
                 
             }

           


             DB::table('settings')->update([
                'logo'=>$logo,
                'favicon'=>$favicon,
                'site_name'=>$request->site_name,
                'home_img'=>$home_img,
                'lang'=>$request->lang,
                'service_description'=>$request->service_description,
                'portfolio_description'=>$request->portfolio_description,
                'subscribe_description'=>$request->subscribe_description,
                'contact_description'=>$request->contact_description,
                'hire_link'=>$request->hire_link,
                'mailchimp_api_key'=>$request->mailchimp_api_key,
                'mailchimp_list_id'=>$request->mailchimp_list_id,
                
               
               
                
             ]);

         
         
         

        $notification = array(
            'message' => 'Updated Success',
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
         DB::table('settings')->update([
                'ui'=>$request->ui,
            ]);
          $notification = array(
            'message' => 'Layout Changed',
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
        //
    }
}
