<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('blogs.index');
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        return redirect()->route('blogs_path');
    }
}
