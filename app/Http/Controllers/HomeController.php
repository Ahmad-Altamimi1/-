<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Homeslider;
use App\Models\poststags;
use App\Models\groups;
use App\Models\Videos;
use Illuminate\Support\Facades\View;

use function PHPSTORM_META\map;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $slidercontent= Homeslider::all();
        // $havevideo=false;
        // foreach($slidercontent as $slider){
        //     if ($slider->video) {
        //         $havevideo=true;
        //         $slidercontent= $slider;
        //     };
        // };
        $selectedTag = 'صحتك ماما';
        $videos = Videos::orderBy('id', 'DESC')->take(6)->get();
        $mostposts = Post::orderBy('REED', 'DESC')->take(4)->get();

        $recentposts = Post::orderBy('DATE_SCHEDULER', 'asc')->take(4)->get();
        $Monthsofpregnancy= Post::where('Monthsofpregnancy',"=","1")->orderBy('id', 'desc')->get();
        $tags= poststags::all();
$newsList=$recentposts;
$games=$recentposts;
        // $videos=;
        $first_tag = poststags::where('TITLE','=','الشهر الثامن')->first();
        $left_side_bar_content= $this->getposts_in_one_tag('أعتني بطفلك');
        $baby= $this->getposts_in_one_tag('صحة الطفل');
        $mama= $this->getposts_in_one_tag('صحتك ماما');
        // $left_side_bar_content = poststags::where('TITLE','=','أعتني بطفلك')->first();
        $defaultPosts = Post::take(4)->get();

        return view('pages.home',compact('baby','mama','selectedTag','recentposts','games', 'tags', 'Monthsofpregnancy', 'left_side_bar_content', 'defaultPosts', 'first_tag','newsList'));
    }
    public function getposts_in_one_tag($tagname){
        $tagbyid = poststags::where('TITLE','=',$tagname)->first();
        $tag=$tagbyid ->id;
        $tags = poststags::all();
        $allgroups = groups::all();
        $postintag = [];
        $groupnew = [];
        $ids = [];

        foreach ($allgroups as $value) {
            $grouptag = $value->TAG;
            $grouparray = explode(',', $grouptag);

            if (in_array($tag, $grouparray)) {
                $groupnew[] = $value;
            }
        }

        foreach ($groupnew as $group) {
            $grouptags = $group->TAG;
            $grouparrays = explode(',', $grouptags);

            $tagIndices = array_keys($grouparrays, $tag);

            foreach ($tagIndices as $index) {
                $slicedArray = array_slice($grouparrays, $index);


            }
            $postintag = Post::whereIn("TAG", $slicedArray)->orderBy('SHOW', 'asc')->paginate(6);

            $otherIds = array_diff($grouparrays, $slicedArray);
    if (in_array($tag, $grouparray)) {
$groupnew[]= $value;
}
 }
 return $postintag;
    }


        // -----------------------------------------------------------------------------------------------------------------------
                                            //  Start First section (Months)
// -----------------------------------------------------------------------------------------------------------------------
    public function fetchContent(Request $request)
    {

        $tagTitle = $request->input('tagTitle');
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
        $posts_thumbs = Post::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get();
        $havevideo=false;
        if (count($posts_thumbs)==0 ) {


            $postIdsInTag = Videos::whereIn("TAG", $slicedArray)->pluck('id')->toArray();
        if ( count(Videos::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get())>0) {
$havevideo=true;
            $posts_thumbs = Videos::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get();

        }}

        $sortingOption = request('sort');
        $pageid = $id;



        $content = View::make('partial.thumb', compact('posts_thumbs','havevideo'))->render();

        return response()->json(['content' => $content]);
    }



    // -----------------------------------------------------------------------------------------------------------------------
                                            //  End First section (Months)
// -----------------------------------------------------------------------------------------------------------------------




  // -----------------------------------------------------------------------------------------------------------------------
                                            //  Start Seconde section
// -----------------------------------------------------------------------------------------------------------------------


    public function fetchContentbottom(Request $request)
    {

        $tagTitle = $request->input('tagTitle');
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
        $posts_content = Post::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get();
        $havevideo=false;
        if (count($posts_content)==0 ) {


            $postIdsInTag = Videos::whereIn("TAG", $slicedArray)->pluck('id')->toArray();
        if ( count(Videos::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get())>0) {
$havevideo=true;
            $posts_content = Videos::whereIn("id", $postIdsInTag)->orderBy('id', 'asc')->get();

        }}

        $pageid = $id;



        $content = View::make('partial.content_slider', compact('posts_content','havevideo'))->render();

        return response()->json(['content' => $content]);
    }



// -----------------------------------------------------------------------------------------------------------------------
                                            //  End Seconde section
// -----------------------------------------------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------------------------------------------
                                            //  Start Thered section
// -----------------------------------------------------------------------------------------------------------------------
public function thirdfetchContent(Request $request)
{

    $tagTitle = $request->input('tagTitle');
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



    $content = View::make('partial.thirdsection', compact('third_section','havevideo'))->render();

    return response()->json(['content' => $content]);
}


// -----------------------------------------------------------------------------------------------------------------------
                                            //  End Thered section
// -----------------------------------------------------------------------------------------------------------------------



    public function tv_show($id){
        $video=Videos::find($id);
        $string = $video->TAG;
        $Categories = explode(',', $string);
        try {
            $video->increment('show');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        $Othervideos= Videos::where("TAG", "=", $video->TAG)->orderBy('SHOW', 'asc')->take(6)->get();
        $similar_and_popular_post = Videos::where("TAG", "=", $video->TAG)->orderBy('SHOW', 'asc')->first();
        $tags = poststags::all();

        $recentposts = Videos::where('id',"!=",$id)->orderBy('DATE_SCHEDULER', 'asc')->take(6)->get();
        $secondPost = Videos::where('id', '>', $video->id)
            ->orderBy('id', 'asc')
            ->first();
$previousPost = Videos::where('id', '<', $video->id)
    ->orderBy('id', 'desc')
    ->first();
    $sharebutton = \Share::page(
        url('/'.$id),

    )->facebook()->linkedin()->telegram()->twitter();
        return view('pages.TV',compact('video', 'previousPost', 'secondPost', 'recentposts', 'tags', 'sharebutton', 'similar_and_popular_post', 'Othervideos', 'Categories'));
    }
        public function alltv(){
        $lastvideos=Videos::take(3)->get();
        $videos=Videos::all();
        return view('pages.alltv',compact('videos','lastvideos'));
    }

    public function getPosts(Request $request)
    {
        $isPopular = $request->input('isPopular', false);

        if ($isPopular) {
            $posts = Post::orderBy('popularity_column', 'desc')->take(6)->get();
        } else {
            $posts = Post::orderBy('DATE_SCHEDULER', 'asc')->take(4)->get();
        }

        $view = view('partials.posts')->with('posts', $posts)->render();

        return response()->json(['html' => $view]);
    }
    public function soon (){
        return view("pages.soon");
    }
    function generateDropdownMenu($groupTitle)
    {
        $TAGS_oF_group_new_have_Same_Inital_Tag = [];

        $tags_in_Group = explode(',', groups::where('TITLE', '=', $groupTitle)->first()->TAG);

        foreach (groups::all() as $key => $groupdropmenu) {
            $tags_in_allgroup = explode(',', $groupdropmenu->TAG);
            if ($tags_in_Group[0] == $tags_in_allgroup[0]) {
                 if (count(array_filter($tags_in_allgroup))>1) {

                    $index = $tags_in_allgroup[1];
                 }else{
                    $index=null;
                 }

if (isset($TAGS_oF_group_new_have_Same_Inital_Tag[$index])) {
    $TAGS_oF_group_new_have_Same_Inital_Tag[$index] = array_merge($TAGS_oF_group_new_have_Same_Inital_Tag[$index], array_slice($tags_in_allgroup, 2));
} else {
    $TAGS_oF_group_new_have_Same_Inital_Tag[$index] = array_slice($tags_in_allgroup, 2);
}

            }
        }

        $html = '';
        if (count($TAGS_oF_group_new_have_Same_Inital_Tag) > 1) {
            $html .= '<ul  style=" TEXT-ALIGN:RIGHT">';

            foreach ($TAGS_oF_group_new_have_Same_Inital_Tag as $key => $item) {
                $keytag = poststags::find($key);
                $havevideos = false;
                if ($keytag) {
                    if (count($keytag->posts)==0 &&count($keytag->posts)>0) {
$havevideos=true;
                    }

                    $html .= '<li style="TEXT-ALIGN:RIGHT"><a href="' . ($havevideos ? route('groupsecbyid', ['id' => $keytag->id]) : route('groupsecbyid', ['id' => $keytag->id])) . '">' . (count($item) > 1 ? "<span class='spanleft' style='float: left;'><<</span>" : "") . $keytag->TITLE . '</a>';

                if (count($item)>1) {
// DD(array_filter($item));
$uniqueItems = [];
                $html .='<ul>';
                foreach ($item as $singleitem) {
                    if (!(in_array($singleitem,$uniqueItems))) {
                        $uniqueItems[]=$singleitem;

                    $keytag = poststags::find($singleitem);
                    $havevideos = false;
                    if ($keytag) {
                        if (count($keytag->posts)==0 &&count($keytag->posts)>0) {
    $havevideos=true;
                        }


                    $html .= '<li style=" TEXT-ALIGN:RIGHT"><a href="' . ($havevideos ? route('videotags', ['id' => $keytag->id]) : route('ShoWarticle', ['id' => $keytag->id])) . '">' . $keytag->TITLE . '</a></li>';
                }

                }
            }
            $html .='</ul>';
        }
        $html .='</li>';
                }
            }

            $html .= '</ul>';
        }

        return $html;
    }
    function hometest()  {
        view('pages.hometest');

    }

}