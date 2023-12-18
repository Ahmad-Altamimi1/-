<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){
        $posts = Post::with(['tag', 'group'])->take(4)->get();
         return response()->json(['posts'=>$posts,], 200);
    }
}
