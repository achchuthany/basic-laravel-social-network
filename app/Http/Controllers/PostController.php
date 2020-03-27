<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    //
    public function postCreatePost(Request $request){
        $this->validate($request,[
            'body'=>'required|max:1000'
        ]);
        $body = $request['body'];
        $post = new Post();
        $post->body = $body;
        $message = 'There was an error!!';
        if($request->user()->posts()->save($post)){
            $message = 'Post successfully created!';
        }
        return redirect()->route('dashboard')->with(['message'=>$message]);
    }
    public function getDashboard()
    {
       $posts = Post::orderBy('created_at','desc')->get();
        return view('dashboard',['posts'=>$posts]);
 
    }

    public function postEditPost(Request $request){
        $this->validate($request, [
            'body' => 'required|max:1000'
        ]);
        $post_id = $request['postId'];
        $body = $request['body'];
        $post = Post::find($post_id);
        
        if(Auth::user() != $post->user){
            return redirect()->back();
        }
        $post->body = $body;
        $post->update();
        $updated_by = 'By '.Auth::user()->first_name.' on ' .$post->updated_at->diffForHumans();
        return response()->json(['new_body'=>$post->body,'updated_at'=>$updated_by],200);

    }
}
