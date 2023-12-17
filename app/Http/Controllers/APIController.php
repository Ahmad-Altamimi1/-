<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){
        $posts=Post::where("TAG",'=',27)->get();
         return response()->json($posts, 200);
    }
}
