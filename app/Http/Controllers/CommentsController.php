<?php

namespace App\Http\Controllers;


use App\Comment;
use App\Post;

class CommentsController extends Controller
{

public function show($id)
{
  $post = Post::FindOrFail($id);
  $comments = Comment::where('postid',$id)->get();
   return view('comments.commentsDisplay')->with(compact('post','comments'));
}

}
