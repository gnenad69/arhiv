<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class WebsiteController extends Controller
{
  /**
   * Prikaz postova na index strani.
   */
    public function index(){

      $categories = Category::orderBy('name', 'ASC')->where('is_published', '1')->get();
      $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(2);

      return view('website.index', compact('posts', 'categories'));
    }

    /**
     * Prikaz postova pojedinacno.
     */
    public function post($slug){

      $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', '1')->first();
      return view('website.post', compact('post'));

    }

    /**
     * Prikaz kategorija.
     */
     public function category($slug){

       $category = Category::where('slug', $slug)->where('is_published', '1')->first();
       $posts = $category->posts()->orderBy('post_id', 'DESC')->where('is_published', '1')->paginate(5);
       return view('website.category', compact('category', 'posts'));
     }



}
