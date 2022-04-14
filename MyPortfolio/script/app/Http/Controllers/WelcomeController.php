<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Seo;
use App\Category;
use App\Contact;
use App\Portfolio;
use App\Service;
use App\Setting;
use App\Skill;
use App\Social;
use App\Subscriber;
use App\Tagline;
use App\Testimonial;
use DB;
use Newsletter;
use App\Lang;
use  Artesaos\SEOTools\Facades\SEOTools;

class WelcomeController extends Controller
{
	public function welcome()
	{

      
         try {
          DB::connection()->getPdo();
        if(DB::connection()->getDatabaseName()){
        $seo=Seo::first();
        $settings=Setting::first();
        SEOTools::setTitle($seo->meta_title);
        SEOTools::setDescription($seo->meta_description);
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('keywords', $settings->meta_tags);
        SEOTools::opengraph()->addProperty('author', $settings->author);
        SEOTools::twitter()->setSite(url('/'));
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');

        return view('welcome',compact('settings'));
        }else{
            return redirect()->route('install');
        }
        } catch (\Exception $e) {
            return redirect()->route('install');
        } 

    }


    public function home()
    {
       $bg_img=Setting::select('home_img')->first();
       $tagline=Tagline::select('tag_line','id')->get();
       $socials=Social::select('icon','link')->latest()->get();
       return response()->json(['bg_img'=>$bg_img,'tagline'=>$tagline,'socials'=>$socials]);
    }

    public function about()
    {
          $about=About::select('description','cv','image')->first();
          $skill=Skill::select('name','percent')->get();
          return response()->json(['about'=>$about,'skill'=>$skill]);
    }

    public function service()
    {

     $service_settings=Setting::select('service_description','service_img')->first();
     $services=Service::select('icon','title','description')->get();
     return response()->json(['settings'=>$service_settings,'services'=>$services]);

    }

    public function portfolio()
    {
     $portfolio_description=Setting::select('portfolio_description')->first();
     $category=Category::select('name','id')->get();
     $portfolio=Portfolio::select('image','title','cat_id')->latest()->get();
     return response()->json(['description'=>$portfolio_description,'category'=>$category,'portfolio'=>$portfolio]);

    }

    public function testimonial()
    {
     $settings=Setting::select('review_img')->first();
     $reviews=Testimonial::select('name','avatar','position','review')->latest()->get();
     return response()->json(['settings'=>$settings,'reviews'=>$reviews]);

    }

    public function subscribe()
    {
     $settings=Setting::select('subscribe_img','subscribe_description')->first();
     return response()->json(['settings'=>$settings]);
    }
    public function subscribed(Request $request)
    {
        
     $validatedData = $request->validate([
        'email' => 'required|email|max:50',
    ]);
     $setting=Setting::first();
     if (!empty($setting->mailchimp_list_id) && !empty($setting->mailchimp_api_key)) {
         Newsletter::subscribe($request->email);
     }
    
     $subscrib=new Subscriber;
     $subscrib->email=$request->email;
     $subscrib->save();
     return response()->json(200);

    }

    public function contact()
    {
     $settings=Setting::select('contact_description')->first();
     $contacts=Contact::select('phone','email','address')->first();
     return response()->json(['settings'=>$settings,'contacts'=>$contacts]);

    }
}
