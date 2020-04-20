<?php


namespace App\Http\Controllers;
use App\Comment;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;



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
        * store the poste and display it to posts page
        * @param CreatePostRequest $request
        * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
        */
        public function store(CreatePostRequest $request)
        {

            $post = Post::create($request->all());
            return redirect()->route('posts.index');

        }

    /**
     * the edit post page
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
       {
           return view('posts.update',compact('id'));
       }

    /**
     * update a post
     * @param UpdatePostRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePostRequest $request, $id)
       {
           $post = Post::FindOrFail($id);
           $post->title = $request->input('newtitle') ;
           $post->content = $request->input('newcontent');
           $post->save();
           return redirect()->route('posts.show',$id);
       }

     public function delete($id)
     {
         $post = Post::FindOrFail($id);
         $comments = Comment::where('postid' ,$post->id)->get();

         foreach ($comments as $comment)
         {
             $comment->delete();
         }

         $post->delete();
         return redirect()->route('posts.index');

     }


}
