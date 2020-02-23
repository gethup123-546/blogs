<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('profile','edit_profile');
    }

    public function profile($id){
        $user = User::find($id);
        return view('auth/profile',compact('user'));
    }

    public function edit_profile($id){
        $user = User::find($id);
        return view('auth/edit_profile',compact('user'));
    }

    public function edit_profile_stor(Request $request, $id){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'image' => 'image'
        ]);
        if($request->hasFile('image')){
            $image_name = $request->image->hashName();
            $request['image']->move(public_path('uploade_image'),$image_name);
            $data['image'] = $image_name;
        }
        $user = User::find($id);
        $user->update($data);
        return redirect()->route('profile',$user->id);
    }

    public function dashbord(){
        $user = auth()->user();
        $post = $user->posts;
        return view('auth.dashbord',compact('post'));
    }
    
}
