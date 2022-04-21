<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::paginate(20); 

        // dd($posts);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'body' => 'required'
        ]);

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);

        // auth()->user()->posts()->create();
        // instead of this:
        // $request->user()->posts()->create([
        //     'body' => $request->body
        // ]);
        // could do this
         $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
