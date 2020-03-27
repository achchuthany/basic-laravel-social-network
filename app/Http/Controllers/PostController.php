<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostController extends Controller
{
    //
    public function postCreatePost(Request $request){
        $this->validate($request,[
            'body'=>'required|max:255'
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
}
