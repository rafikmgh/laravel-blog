<?php


namespace App\Http\Controllers;
use App\Post;
class PostsController extends Controller
{

    /**
     * show all the posts
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
 {
 $posts = Post::all();
 return view('posts.postsDisplay',compact('posts'));
 }

    /**
     * show a single post
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
 {
 $post = Post::findOrfail($id);

 return view('posts.showPost', compact('post'));

 }


}
