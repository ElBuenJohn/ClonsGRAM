<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    
    public function __invoke()
   {
        //obtener a las personas que seguimos
        $ids = auth()->user()->followings->pluck('id')->toArray();
        $posts = Post::whereIn('user_id', $ids)->latest()->paginate(20);

        //se siguen a todos
        // $posts = Post::latest()->paginate(20);
        
        return view('home', [
         'posts' => $posts
         ]);
   }
}
