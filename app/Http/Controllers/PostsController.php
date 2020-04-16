<?php


namespace App\Http\Controllers;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{

    /**
     * show all the posts
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
 {
 $posts = Post::latest()->get();
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

    /**
     * create a new post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
   {
       return view('posts.create');
   }


    /**
     * store all the data and display them to posts page
     * @param CreatePostRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreatePostRequest $request)
   {
   Request::

   $post = Post::create($request->all());
   return redirect('posts');

   }


}
