<?php

namespace App\Http\Controllers;

use App\Models\groups;
use App\Models\poststags;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function showgroup($id)
    {
        $group = groups::findorfail($id);
        $title=$group->TITLE;
        $tagsinallgroups="";
        foreach (groups::all() as  $value) {
         if ($value->TITLE==$title) {
            $tagsinallgroups .= $value->TAG .",";
         }
        }
        $string = $tagsinallgroups . $group->TAG;
        $tagsId = explode(',', $string);
        $alltags = poststags::all();
        $tags = [];
        foreach ($alltags as $tag){

            if (in_array($tag->id, $tagsId)) {
                $tags[] = $tag;
            }
        }
        // dd(Post::all());
        // dd( Post::where('TAG', '=', '7'));
        return view("pages.group", compact('tags', 'group'));
    }
}
