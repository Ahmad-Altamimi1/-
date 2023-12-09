<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
       public function index() {
        return view('search.index');
    }

    public function search(Request $request)
    {
        // Perform your search logic here and return results
        $query = $request->input('query');
        $results = Post::where('TITLE', 'like', '%' . $query . '%')->take(3)->orderBy('SHOW', 'asc')
        ->get();


        return response()->json($results);
    }
}
