<!doctype html>
{{-- <html class="no-js" lang="ar" dir="rtl">    --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>إنْجابيّ</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ url('css/animate.css') }}">

    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.timepicker.css') }}">
    <link rel="shortcut icon" href="../انجابي_فكتور-TITLE-removebg-preview.png" />

    <link rel="stylesheet" href="{{ url('assets/libs/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/tailwind.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="../انجابي_فكتور-TITLE-removebg-preview.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ url('pages/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ url('pages/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('pages/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ url('pages/css/responsive.css') }}">
    {{-- /* gogle fonts  */ --}}
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.8.1/slick.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=EB+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- /* gogle fonts  */ --}}
    <style>
        /* Define the styles for the scrollbar */
        ::-webkit-scrollbar {
            width: 16px;
            /* width of the scrollbar */
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background-color: pink;
            /* color of the scrollbar handle */
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* color of the scrollbar track */
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgb(225, 98, 119);
            /* color of the scrollbar handle on hover */
        }
        .header-contact-search{
                align-items: center;

        }
    </style>
</head>

<body style="text-align: right">
    <div class="body-wrapper">
        <!-- HEADER AREA START (header-3) -->
        <!-- HEADER AREA START (header-4) -->
        <header class="ltn__header-area ltn__header-8 section-bg-6">
            <!-- ltn__header-top-area start -->
         <div class="ltn__header-middle-area">
            <div class="container">
                <div class="">

                    <div class="col header-contact-serarch-column d-none d-xl-block">
                        <div class="header-contact-search">
                            <!-- header-feature-item -->
                            <div class="header-feature-item">
                                <div class="header-feature-icon">

                                </div>
                                <div class="header-feature-info">
                                    <div class="mobile-menu-toggle ">
                                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                                <svg viewBox="0 0 800 600" style="    height: 86px;
    width: 90px;
}">
                                                    <path
                                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                                        id="top"></path>
                                                    <path d="M300,320 L540,320" id="middle"></path>
                                                    <path
                                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                                        id="bottom"
                                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                </div>
                            </div>
                            <!-- header-search-2 -->

                            <div class="header-search-2" style="    padding: 22px 0 0 0 !important ;position: relative;">


                                    <input type="text" id="searchInput" placeholder="بحث"
                                        style="margin: 0;    text-align: right;">
                                        {{-- <span><i class="icon-magnifier"></i></span> --}}
                                    <ul id="searchResults" style="position: absolute;
                                    right: 0;
                                    display: none;
                                    width: 135px;
                                    background: #d54368;
    height: 227%;
    border-radius: 12px;
    color: white;
    z-index: 1000;" ></ul>
                                    </button>
                                {{-- </form> --}}
                            </div>
                                                        <div class="site-logo">
                                                <a href="{{ route('home') }}"><img src="{{asset('../انجابي فكتور-01-01.jpg')}}"
                                                        alt="Logo" style="
    width: 140px;
"></a>
                                            </div>
                                            <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                        <li><a href="#" title="Tiktok"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href="#" title="Youtube"><i class="icon-social-youtube"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                    </ul>
                </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- header-options -->
                        <div class="ltn__header-options">
                            <ul>

                                <li class="d-none">
                                    <!-- header-search-1 -->
                                    <div class="header-search-wrap">
                                        <div class="header-search-1">
                                            <div class="search-icon">

                                            </div>
                                        </div>
                                        <div class="header-search-1-form">
                                            <form id="#" method="get"  action="#">
                                                <input type="text" name="search" value="" placeholder="Search here..."/>
                                                <button type="submit">
                                                    <span><i class="icon-magnifier"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-none">
                                    <!-- user-menu -->
                                    <div class="ltn__drop-menu user-menu">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-user"></i></a>
                                                <ul>
                                                    <li><a href="login.html">Sign in</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <!-- Mobile Menu Button -->
                                    <div class="mobile-menu-toggle d-lg-none">
                                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                            <svg viewBox="0 0 800 600">
                                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                                <path d="M300,320 L540,320" id="middle"></path>
                                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ltn__header-top-area end -->

            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white plr--5---">
                <div class="container">
                    <div class="row">
                        <div class="col logo-column" style="margin-right: 50px">
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">

                                    </div>
                                </div>
                                <div class="header-search-1-form " id="searchcontent" style="display: none">

                                    {{-- <input type="text" id="searchInput" placeholder="Type to search"
                                        style="margin: 0;">
                                    <ul id="searchResults"></ul>
                                </div> --}}
                                <?php
                                use App\Models\Post;
                                use App\Models\poststags;

                                $First_trimester = poststags::where('TITLE', '=', 'الثلث الأول')->first();
                                $Second_trimester = poststags::where('TITLE', '=', 'الثلث الثاني')->first();
                                $Third_trimester = poststags::where('TITLE', '=', 'الثلث الثالث')->first();

                                    $alltags_from_home=poststags::all();
                                    $tags=$alltags_from_home
                                ?>
                            </div>
                        </div>
                        <div class="col header-menu-column">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <?php

use App\Models\groups;

                                            ?>
                                        <ul>
                                            <!-- <li class="menu-icon"><a href="#"> </a> -->
                                            <li class="menu-icon"><a href="https://tebkum.com/">طبكم</a>
                                            <li class="menu-icon"><a href="{{ route('showgroup', ['id' => groups::where('TITLE', '=', 'مستشارة إنجابي')->first()->id]) }}">مستشار إنْجابيّ</a>
                                            <li class="menu-icon"><a href="{{ route('showgroup', ['id' => groups::where('TITLE', '=', 'مدونة إنجابي')->first()->id]) }}"> مدونة إنجابي </a>
                                            <li class="menu-icon"><a href="{{ route('showgroup', ['id' => groups::where('TITLE', '=', 'منوعات إنجابي')->first()->id]) }}">منوعات إنْجابيّ </a>
                                            <li class="menu-icon"><a href="{{ route('showgroup', ['id' => groups::where('TITLE', '=', 'صحة العائلة')->first()->id]) }}">صحة العائلة </a>
                                            <li class="menu-icon"><a href="{{ route('showgroup', ['id' => groups::where('TITLE', '=', 'العناية الشخصية')->first()->id]) }}">العناية الشخصية</a>

                                            <li class="menu-icon"><a href="{{ route('showgroup', ['id' => groups::where('TITLE', '=', 'أشهر الحمل')->first()->id]) }}">أشهر الحمل </a>
                                                <ul class="mega-menu">
                                                    <?php
$Third_trimester_months_ids=[];
$Second_trimester_months_ids=[];
$First_trimester_months_ids=[];
$slicedArray=[];
                                                    $groupnew_First_trimester = groups::where('TAG', 'like', '%' . $First_trimester->id . '%')->get();
                                                    $groupnew_Third_trimester = groups::where('TAG', 'like', '%' . $Third_trimester->id . '%')->get();
                                                    $groupnew_Second_trimester= groups::where('TAG', 'like', '%' . $Second_trimester->id . '%')->get();
                                                    $ids = [];

                                                    $Third_trimester_months_ids = processTrimesterGroups($groupnew_Third_trimester, $Third_trimester->id);
                                                    $First_trimester_months_ids = processTrimesterGroups($groupnew_First_trimester, $First_trimester->id);
                                                    $Second_trimester_months_ids = processTrimesterGroups($groupnew_Second_trimester, $Second_trimester->id);

                                                    function processTrimesterGroups($groups, $trimesterId) {
                                                        $trimesterMonthsIds = [];
                                                        $ids = [];

                                                        foreach ($groups as $group) {
                                                            $groupArray = explode(',', $group->TAG);

                                                            $tagIndices = array_keys($groupArray, $trimesterId);

                                                            foreach ($tagIndices as $index) {
                                                                if ($index < count($groupArray)) {
                                                                    $tagSlice = array_slice($groupArray, $index);
                                                                    $trimesterMonthsIds = array_merge($trimesterMonthsIds, array_filter($tagSlice, function ($tagid) use ($ids) {
                                                                        return $tagid !== "" && !in_array($tagid, $ids);
                                                                    }));
                                                                }
                                                            }
                                                        }

                                                        return $trimesterMonthsIds;
                                                    }
                                                    ?>

                                                    <li style="text-align: right"><a href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثالث')->first()->id]) }}">الثلث الثالث </a>
                                                        <ul>

                                                            @foreach ($Third_trimester_months_ids as $Third_trimester_month)
                                                            @if($Third_trimester_month !="" && poststags::where('id','=',$Third_trimester_month)->first()->TITLE != 'الثلث الثالث'  )
                                                                <li style="text-align: right"><a
                                                                        href="{{ route('showtag', ['tag' => $Third_trimester_month]) }}">{{ poststags::where('id','=',$Third_trimester_month)->first()->TITLE  }}</a>
                                                                </li>
                                                            @endif

                                                            @endforeach

                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثاني')->first()->id]) }}" style="text-align: right">الثلث الثاني</a>
                                                        <ul>

                                                            @foreach ($Second_trimester_months_ids as $Second_trimester_month)
                                                            @if ($Second_trimester_month!=""&& poststags::where('id','=',$Second_trimester_month)->first()->TITLE != 'الثلث الثاني')
                                                            <li style="text-align: right"><a
                                                                href="{{ route('showtag', ['tag' => $Second_trimester_month]) }}">{{ poststags::where('id','=',$Second_trimester_month)->first()->TITLE  }}</a>
                                                            </li>
                                                            @endif
                                                            @endforeach

                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الأول')->first()->id]) }}" style="text-align: right">الثلث الأول</a>
                                                        <ul>

                                                            @foreach ($First_trimester_months_ids as $First_trimester_month)
                                                            @if ($First_trimester_month!=""&& poststags::where('id','=',$First_trimester_month)->first()->TITLE!='الثلث الأول' )
                                                                <li style="text-align: right"><a
                                                                        href="{{ route('showtag', ['tag' => $First_trimester_month]) }}">{{ poststags::where('id','=',$First_trimester_month)->first()->TITLE  }}</a>
                                                                    </li>
                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li class="menu-icon">
                                                <a href="#">الفئات</a>

                                            </li> -->



                                            <!-- <li class="menu-icon">
                                                <a href="#">فئات أخرى</a>
                                                <ul> -->

<!--
                                                    @foreach ($allgroups as $group)
                                                        <?php
                                                        $string = $group->TAG;
                                                        $str_arr = '';
                                                        $str_arr = explode(',', $string);

                                                        ?>

                                                        <li>
                                                            {{ $group->TITLE }}
                                                            <ul>
                                                                @foreach ($tags as $key => $singletag)
                                                                    @if (in_array($singletag->id, $str_arr))
                                                                        <li>
                                                                            <a href="{{ route('showtag', ['tag' => $singletag->id]) }}"
                                                                                style="display: block; width: 100%; text-align: right; padding-right: 20px;">
                                                                                {{ $singletag->TITLE }}
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach -->



                                                <!-- </ul>
                                            </li> -->

                                            <li><a href="{{ route('allTV') }}"> إنْجابيّ TV</a></li>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ltn__header-options">
                                <ul>


                                    <li>
                                        <!-- mini-cart 2 -->
                                    <li>
                                        <!-- header-search-1 -->
                                        <div class="col logo-column">
                                            {{-- <div class="site-logo">
                                                <a href="{{ route('home') }}"><img src="../انجابي فكتور-01-01.jpg"
                                                        alt="Logo" style="
    width: 140px;
"></a>
                                            </div> --}}
                                        </div>
                                    </li>
                                    </li>
                                    <li>
                                        <!-- Mobile Menu Button -->
                                        <div class="mobile-menu-toggle d-xl-none">
                                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                                <svg viewBox="0 0 800 600">
                                                    <path
                                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                                        id="top"></path>
                                                    <path d="M300,320 L540,320" id="middle"></path>
                                                    <path
                                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                                        id="bottom"
                                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->


        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                               <div class="" style="text-align: right ;width:100%;margin:8px 0;padding: 10px 0;">

                       جميع ألأقسام
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">

                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="{{route('allTV')}}"> إنْجابيّ TV</a></li>
                        <?php
$groupstitles = [];
$allgroupnew = [];

foreach ($allgroups as $group) {
    if (!in_array($group->TITLE, $groupstitles)) {
        $mergedTags = $group->TAG;

        foreach ($allgroups as $groupseconde) {
            if ($group->TITLE == $groupseconde->TITLE && $group->id != $groupseconde->id) {
                $mergedTags .= ',' . $groupseconde->TAG;
            }
        }

        $group->TAG = $mergedTags;
        $allgroupnew[] = $group;
        $groupstitles[] = $group->TITLE;
    }
}
?>

<?php
// print_r($groupstitles)

?>

       @foreach ($allgroupnew as $group)


                                                        <?php
                                                        $string = $group->TAG;
                                                        $str_arr = '';
                                                        $str_arr = explode(',', $string);
                                                        $second_indexs=[];
$groubs_same_name=groups::where("TITLE",'=',$group->TITLE)->get();
                                                        ?>
                                                        <li style="display: block;
    padding: 8px 24px 8px 0;
    text-transform: uppercase;">

                                                            {{ $group->TITLE }}
                                                            <ul class="sub-menu">
                                                                @foreach ($tags as $key => $singletag)
                                                    <?php
                                                                foreach ($groubs_same_name as $item) {
                                                                    $string_array = explode(',', $item->TAG);
                                                                    if (count($string_array) > 1) {
            $second_indexs[$string_array[1]] = array_slice($string_array, 2);
        }
                                                                }
                                                    ?>
                                               @if (in_array($singletag->id, $str_arr))
                                               @if( array_key_exists($singletag->id, $second_indexs))
                                               <li  style="display: block;
                                               padding: 8px 24px 8px 0;
                                               text-transform: uppercase;">
                                                   <a href="{{ route('showtag', ['tag' => $singletag->id]) }}" style="text-align: right;">
                                                       {{ $singletag->TITLE }}
                                                   </a>
                                               @endif

                                                   <ul class="sub-menu">
                                                       @foreach ($second_indexs[$singletag->id] as $subItem)
                                                       <li>
                                                        <?php
                                                        $poststag = poststags::where('id', '=', $subItem)->first();
                                                        if ($poststag) {
                                                            echo $poststag->TITLE;
                                                        }
                                                        ?>
                                                    </li>
                                                       @endforeach
                                                   </ul>
                                               </li>
                                           @endif
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach


                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                        <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

        <body>


