<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Post;
use Illuminate\Support\Facades\App;
use App\Comment;

class CommentsController extends Controller
{

public function show($id)
{
  $post = Post::FindOrFail($id);
  $comments = $post->comments;
   return view('comments.commentsDisplay')->with(compact('post','comments','id'));
}


    /**
     * add a comment to a post
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add($id)
{
    return view('comments.create',compact('id'));
}


    /**
     *
     * @param AddCommentRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(AddCommentRequest $request, $id)
    {

        $comment = Comment::create(['postid'=>$id,'author'=>$request->input('author'),'comment'=>$request->input('comment')]);
        return redirect("/posts/comments/$id");

    }

   public function edit($id , $commentid)
   {
       return view('comments.update',compact('id','commentid'));
   }


   public  function update(UpdateCommentRequest $request,$id,$commentid)
   {
       $comment = Comment::findOrFail($commentid);
       $comment->comment = $request->input('newcomment');
       $comment->save();
       return redirect()->route('comments.show',$id);

   }
   public function delete($id ,$commentid)
   {
       $comment = Comment::FindOrFail($commentid);
       $comment->delete();
       return redirect()->route('comments.show',$id);

   }


}
