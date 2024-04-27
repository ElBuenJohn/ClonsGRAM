<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NovedadesController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    
    public function __invoke()
   {
      
        

        //se siguen a todos
        $posts = Post::latest()->paginate(20);
        
        return view('nove', [
         'posts' => $posts
         ]);
   }
}