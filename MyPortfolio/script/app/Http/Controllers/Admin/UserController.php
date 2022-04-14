<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $info=User::find(Auth::id());
       
        return view('admin.settings.my_settings',compact('info'));
    }
     public function genUpdate(Request $request)
    {
        $request->validate([
            'file' => 'image',
            'email' => 'required',
            'name' => 'required',
        ]);

        $info=User::find(Auth::id());
        if ($request->file) {

            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move('uploads/',$imageName);
            $avatar='uploads/'.$imageName;

          if (file_exists($info->avatar)) {
             unlink($info->avatar);
         }
        }
        else{
            $avatar=$info->avatar;
        }

        $user=User::find(Auth::id());

        $user->name=$request->name;
        $user->email=$request->email;
        $user->avatar=$avatar;
        $user->save();

         $notification = array(
            'message' => 'Update Success',
            'alert-type' => 'success'
        );


         return redirect()->back()->with($notification);

    }

    public function updatePassword(Request $request)
    {
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
        $info=User::where('id',Auth::id())->first();

        $check=Hash::check($request->current,auth()->user()->password);
      
        if ($check==true) {
            User::where('id',Auth::id())->update(['password'=>Hash::make($request->password)]);
            $notification = array(
            'message' => 'Password Changed',
            'alert-type' => 'success'
             );


         return redirect()->back()->with($notification);  

        }
        else{
            return redirect()->back()->withErrors('Enter Valid Password');

        }
    }
}
