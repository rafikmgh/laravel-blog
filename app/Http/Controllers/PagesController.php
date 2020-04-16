<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * show all the posts
     * @return string
     */
    public function show()
    {
        return view('posts.postsDisplay');
    }

}
