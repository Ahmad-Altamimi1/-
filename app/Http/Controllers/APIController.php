<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\groups;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){
        $totalGroups = count(groups::all());

        $randomTopics = [
            rand(90, $totalGroups),
            rand(90, $totalGroups),
        ];

        $posts = Post::whereIn('TOPIC', $randomTopics)->with(['tag', 'group'])->take(4)->get();
         return response()->json($posts, 200);
    }
}
