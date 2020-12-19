<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Lista;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


      $categories = Category::orderBy('id', 'DESC')->limit('3')->get();
      $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->limit('3')->get();
      $pages = Post::orderBy('id', 'DESC')->where('post_type', 'page')->limit('3')->get();
        return view('admin.index', compact('categories', 'posts', 'pages'));
    }

    public function druga()
    {
      $lista = Lista::get();
      return view('homee', compact('lista'));
    }
}
