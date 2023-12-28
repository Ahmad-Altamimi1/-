<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Homeslider;
use App\Models\poststags;
use App\Models\groups;
use App\Models\Videos;

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
        $slidercontent= Homeslider::all();
        $havevideo=false;
        foreach($slidercontent as $slider){
            if ($slider->video) {
                $havevideo=true;
                $slidercontent= $slider;
            };
        };

        $recentposts = Post::orderBy('DATE_SCHEDULER', 'asc')->take(6)->get();
        $Monthsofpregnancy= Post::where('Monthsofpregnancy',"=","1")->orderBy('id', 'desc')->get();
        $tags= poststags::all();
        $first_tag = poststags::where('TITLE','=','الشهر الثامن')->first();
        $defaultPosts = Post::take(4)->get();

        return view('pages.home',compact('slidercontent','recentposts', 'tags', 'Monthsofpregnancy', 'havevideo', 'defaultPosts', 'first_tag'));
    }
    public function tv_show($id){
        $video=Videos::find($id);
        $string = $video->TAG;
        $Categories = explode(',', $string);
        try {
            $video->increment('show');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        $Othervideos= Videos::where("TAG", "=", $video->TAG)->orderBy('SHOW', 'asc')->take(4)->get();
        $similar_and_popular_post = Videos::where("TAG", "=", $video->TAG)->orderBy('SHOW', 'asc')->first();
        $tags = poststags::all();

        $recentposts = Videos::where('id',"!=",$id)->orderBy('DATE_SCHEDULER', 'asc')->take(4)->get();
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


                    $html .= '<li style=" TEXT-ALIGN:RIGHT"><a href="' . ($havevideos ? route('videotags', ['id' => $keytag->id]) : route('tagbyid', ['id' => $keytag->id])) . '">' . $keytag->TITLE . '</a></li>';
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

}