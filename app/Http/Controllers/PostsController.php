<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function posts(){
        return view("posts/allposts");

    }
}
