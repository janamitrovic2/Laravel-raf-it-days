<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Blog;

class BlogController extends Controller
{
    function homepage()
    {
        $blogovi=Blog::all();
        return view('homepage',['blogovi'=>$blogovi]);
    }

    function blog($id){

        $blog = Blog::find($id);
    
        return view('blog',['blog'=>$blog]);
    
    }
}
