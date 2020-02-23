<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['home', 'create_post','edit_post','show','comment_update']);
    }

    public function home(){
        $post = Post::all();
        $post = Post::orderby('id','desc')->paginate(6);
        $count_comment = Comment::count();
        return view('/posts/home',compact('post','count_comment'));
    }

    public function create_post(){
        
        return view('posts/create_post');
    }

    public function create_post_stor(Request $request){
        $data = $request->validate([
            'title' => 'required|min:4|max:50',
            'content' => 'required',
            'image' => 'image|required',
            'user_id' => ''
        ]);
        if($request->hasFile('image')){
            $image_name = $request->image->hashName();
            $request['image']->move(public_path('uploade_image'),$image_name); 
            $data['image'] = $image_name;
        }
        $data['user_id'] = auth()->user()->id;
        Post::create($data);
        return redirect('/home')->with('message','the post is created !!'. ' '. auth()->user()->name);
    }

    public function edit_post($id){
        $post = Post::find($id);
        return view('/posts/edit_post',compact('post'));
    }

    public function edit_post_stor(Request $request, $id){
        $data = $request->validate([
            'title' => 'required|min:8|max:50',
            'content' => 'required',
            'image' => 'image'
        ]);
        if($request->hasFile('image')){
            $image_name = $request->image->hashName();
            $request['image']->move(public_path('uploade_image'),$image_name);
            $data['image'] = $image_name;
        }
        $post = Post::find($id);
        $post->update($data);
        return redirect('/home')->with('message','the post is updated');
    }

    public function delete($id){
        $post = Post::find($id)->delete();
        return back()->with('delete',"the post is deleted". ' '. auth()->user()->name);
    }

    public function show($id){
        $post = Post::find($id);
        $comment = Comment::count();
        return view('posts/show',compact('post','comment'));
    }

    //comments
    public function comment_stor(Request $request){
        $data = $request->validate([
            'content' => 'required',
            'post_id' => ''
        ]);
        $data['user_id'] = auth()->user()->id;
        Comment::create($data);
        return back();
    }

    public function comment_update($id){
        $comment = Comment::find($id);
        return view('posts/comment_update',compact('comment'))->with('message','the comment is updated'. ' '. auth()->user()->name);
    }

   public function comment_update_stor(Request $request, $id){
       $data = $request->validate([
           'content' => 'required',
           'post_id' => ''
       ]);
       $comment = Comment::find($id);
       $comment->update($data);
       return redirect()->route('show',$comment->post_id);
   }
    public function comment_delete($id){
        $comment = Comment::find($id)->delete();
        return back();
    }
}
