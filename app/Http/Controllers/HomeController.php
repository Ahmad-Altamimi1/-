<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Homeslider;
use App\Models\poststags;
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

        $recentposts = Post::orderBy('DATE_SCHEDULER', 'asc')->take(4)->get();
        $Monthsofpregnancy= Post::where('Monthsofpregnancy',"=","1")->orderBy('id', 'desc')->get();
        $tags= poststags::all();
        $first_tag = poststags::where('TITLE','=','العناية الشخصية')->first();
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
            $posts = Post::orderBy('popularity_column', 'desc')->take(4)->get();
        } else {
            $posts = Post::orderBy('DATE_SCHEDULER', 'asc')->take(4)->get();
        }

        $view = view('partials.posts')->with('posts', $posts)->render();

        return response()->json(['html' => $view]);
    }

}
