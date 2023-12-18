<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\groups;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){



        function postcheck (){
        $totalGroups = count(groups::all());

            $randomTopics = [
                rand(1, $totalGroups),
                rand(1, $totalGroups),
            ];
            $posts = Post::whereIn('TOPIC', $randomTopics)->with(['tag', 'group'])->take(4)->get();
            if (count($posts)<1) {

 postcheck();
            }
        };
        postcheck();
         return response()->json($posts, 200);
    }
}
