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


    public function groupsecbyid($id) {

        // $arry = explode(',', $group->TAG);
        $title = $id;
$Main_Tag=poststags::find($title);
// dd($Main_Tag);
        $mainTitle = [];
        $OtherTitle = [];
        $tagsinallgroups = "";

        foreach (groups::all() as $value) {
            $arry2 = explode(',', $value->TAG);
if (count(array_filter($arry2))>0) {

            if ($arry2[1] == $title) {
                $group=poststags::findOrfail($arry2[1]);
                $maingroup=poststags::findOrfail($arry2[0]);
                if (count($arry2) > 0) {
                    if (isset($mainTitle[$arry2[2]])) {
                        if (is_array($mainTitle[$arry2[2]])) {


                        foreach (array_slice($arry2, 2) as $key => $rrr) {
                          if (!in_array($rrr,$mainTitle[$arry2[2]])) {
                            $mainTitle[$arry2[2]][] = $rrr;
                          }
                        }
                    }else{
                        $mainTitle[$arry2[2]][] =array_slice($arry2, 2);
                    }


                    }else{

                        $mainTitle[$arry2[2]] = array_slice($arry2, 2);


                }


                $tagsinallgroups .= $value->TAG;
                            }
                               }
                            }
        }

        if (!($group && $maingroup)) {
            $group = groups::where('TAG', 'LIKE', '%' . $id . '%')->first();
            $maingroup= poststags::findOrfail(explode(',',$group->TAG)[0]);   # code...
        }
        $string = $tagsinallgroups . $group->TAG;

        $tagsId = explode(',', $string);
        $alltags = poststags::all();
        $tags = [];
        foreach ($alltags as $tag) {
            if (in_array($tag->id, $tagsId)) {
                $tags[] = $tag;

        }
        }

        $page = array(
            "name" => $group->TITLE,
            "tital" => $group->TITLE,
            "description" => $group->DESCRIPTION,
            "url" => url('/') . '/group/' . $group->id . '/show',
            "imgurl" => asset('storage/' . $group->id . '')
        );
            return view("pages.secondegroup", compact('tags', 'group','page','mainTitle','maingroup','Main_Tag'));
    }

    public function groupbyid($id) {
        $group = groups::findorfail($id);
        $arry = explode(',', $group->TAG);
        $title = $arry[0];
        $mainTitle = [];
        $OtherTitle = [];
        $tagsinallgroups = "";

        foreach (groups::all() as $value) {
            $arry2 = explode(',', $value->TAG);

            if ($arry2[0] == $title) {
                if (count($arry2) > 0) {
                    if (isset($mainTitle[$arry2[1]])) {
                        if (is_array($mainTitle[$arry2[1]])) {


                        foreach (array_slice($arry2, 1) as $key => $rrr) {
                          if (!in_array($rrr,$mainTitle[$arry2[1]])) {
                            $mainTitle[$arry2[1]][] = $rrr;
                          }
                        }
                    }else{
                        $mainTitle[$arry2[1]][] =array_slice($arry2, 1);
                    }


                    }else{

                        $mainTitle[$arry2[1]] = array_slice($arry2, 1);
                    }
                }
                $tagsinallgroups .= $value->TAG;
            }
        }
        $page = array(
            "name" => $group->TITLE,
            "tital" => $group->TITLE,
            "description" => $group->DESCRIPTION,
            "url" => url('/') . '/group/' . $group->id . '/show',
            "imgurl" => asset('storage/' . $group->id . '')
        );
        $string = $tagsinallgroups . $group->TAG;

        $tagsId = explode(',', $string);
        $alltags = poststags::all();
        $tags = [];

        foreach ($alltags as $tag) {
            if (in_array($tag->id, $tagsId)) {
                $tags[] = $tag;
            };
        };
        $mainTitle = array_filter($mainTitle, function ($key) {
            return $key !== '';
        }, ARRAY_FILTER_USE_KEY);
$Main_Tag=poststags::find($title);
            return view("pages.newgroup", compact('tags', 'group','page','mainTitle','title','Main_Tag'));
    }

}