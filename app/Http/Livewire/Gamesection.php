<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\groups;
use App\Models\poststags;
use App\Models\Videos;

class PostCarousel extends Component
{
    public $selectedTag = 'صحتك ماما';

    public function render()
    {
        
    $tagTitle = $this->selectedTag ;
    $slicedTags=[];
        $tag = poststags::where('TITLE', $tagTitle)->first();
        $id = $tag->id;
        $tagbyid = poststags::find($id);
        $tags = poststags::all();
        $allgroups = groups::all();
        $groupnew = [];
        $slicedArray = [];
        $otherIds = [];
    
        foreach ($allgroups as $value) {
            $grouptag = $value->TAG;
            $grouparray = explode(',', $grouptag);
    
            if (in_array($id, $grouparray)) {
                $groupnew[] = $value;
            }
        }
    
        foreach ($groupnew as $group) {
            $grouptags = $group->TAG;
            $grouparrays = explode(',', $grouptags);
    
            $tagIndices = array_keys($grouparrays, $id);
    
            foreach ($tagIndices as $index) {
                $slicedArray = array_merge($slicedArray, array_slice($grouparrays, $index));
            }
    
            $otherIds = array_diff($grouparrays, $slicedArray);
        }
    
        $postIdsInTag = Post::whereIn("TAG", $slicedArray)->pluck('id')->toArray();
        $third_section = Post::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get();
        $havevideo=false;
        if (count($third_section)==0 ) {
    
    
            $postIdsInTag = Videos::whereIn("TAG", $slicedArray)->pluck('id')->toArray();
        if ( count(Videos::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get())>0) {
    $havevideo=true;
            $third_section = Videos::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get();
    
        }}
    
        $pageid = $id;
    
    
        $games = $third_section ;

        return view('pages.home', compact('games'));
    }
}
