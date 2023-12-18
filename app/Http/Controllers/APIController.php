<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\groups;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
        $posts = $this->postcheck();

        return response()->json($posts, 200);
    }

    private function postcheck()
    {
        $totalGroups = count(groups::all());

        $randomTopics = [
            rand(1, $totalGroups),
            rand(2, $totalGroups),
        ];

        $posts = Post::whereIn('TOPIC', $randomTopics)->with(['tag', 'group'])->take(4)->get();

        if (count($posts) < 1) {
            // Recursive call to ensure at least one post is retrieved
            return $this->postcheck();
        }

        return $posts;
    }
}
