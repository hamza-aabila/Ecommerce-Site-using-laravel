<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::all();

        return view('home',compact('categories'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('frontend.partial.show',compact('post'));
    }

    public function jewelry()
    {

        $jewelry = \DB::table('categories')->join('posts', 'categories.id', '=', 'posts.category_id')->where('categories.name', '=', 'jewelry')->select('posts.id', 'posts.title', 'posts.image', 'posts.price', 'posts.excerpt')->get();

        return view('jewelry',compact('jewelry'));
    }

    public function painting()
    {
        $painting = \DB::table('categories')->join('posts', 'categories.id', '=', 'posts.category_id')->where('categories.name', '=', 'painting')->select('posts.id', 'posts.title', 'posts.image', 'posts.price', 'posts.excerpt')->get();
            
        return view('painting',compact('painting'));
    }

    public function sculpture()
    {
        $sculpture = \DB::table('categories')->join('posts', 'categories.id', '=', 'posts.category_id')->where('categories.name', '=', 'sculpture')->select('posts.id', 'posts.title', 'posts.image', 'posts.price', 'posts.excerpt')->get();
            
        return view('sculpture',compact('sculpture'));
    }

    public function wooden_toy()
    {
       $wooden_toy = \DB::table('categories')->join('posts', 'categories.id', '=', 'posts.category_id')->where('categories.name', '=', 'wooden toy')->select('posts.id', 'posts.title', 'posts.image', 'posts.price', 'posts.excerpt')->get();
            
        return view('woodentoy',compact('wooden_toy'));
    }
}
