<?php

namespace App\Http\Controllers;
use App\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $posts=Blogs::all();
        return view('home',compact('posts'));
        
    }
    public function index1()
    {
        $posts=Blogs::all();
       
        return view('more_content',compact('posts'));
    }
}
