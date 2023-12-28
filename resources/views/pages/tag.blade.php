
     @extends('../layouts.pagesLayouts.Master')
    @section('content')
 <div class="ltn__utilize-overlay"></div>
<style>

/* Blur-zoom Container */
.img-hover-zoom--blur a img:hover {
  transition: transform 1s, filter 2s ease-in-out;
  filter: blur(2px);

  transform: scale(1.2);
}

/* The Transformation */
.img-hover-zoom--blur:hover a img{
  filter: blur(0);
  transform: scale(1);
}
<style>
    /* Add preloader styles */
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .preloader img {
        width: 50px; /* Adjust the size of the preloader image */
    }
</style>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---"
    style="background-image:url(../uploads/{{ $tagbyid->IMG}})">
        <div class="container">
            <div class="row">



                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">{{ $tagbyid->TITLE }}</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <span><a href="{{ route('home') }}">الصفحة الرئيسية</a>

                                    @foreach ($otherIds as $stag)

                                   @foreach ($tags as $singletag)
                                   @if ($stag == $singletag->id  )
                                   <span> <a href="{{ route('showtag', ['tag' => $singletag->id])  }}"
>  {{  '/'. $singletag->TITLE  }}</a></span>

                                   @endif
                                   @endforeach
                                   @endforeach
                                   <span> <a href="{{ route('showtag', ['tag' => $tagbyid->id])  }}"
                                    >  {{  '/'. $tagbyid->TITLE  }}</a></span>
                               </span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                               <div class="showing-product-number text-right">
    <span>
        {{-- عرض {{ $postintag->firstItem() }} - {{ $postintag->lastItem() }} من {{ $postintag->total() }} النتائج --}}
    </span>
</div>

                            </li>
                            <li>
                               <div class="short-by text-center">
                                    {{-- <select class="nice-select" id="sorting-options">

    <option value="default">ترتيب عشوائي</option>
    <option value="popularity" data-sort="popularity"> الترتيب حسب الأكثر قراءه</option>
    <option value="new" data-sort="created_at">الترتيب حسب الأجدد</option>

                                    </select> --}}
                                </div>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="icon-grid"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="icon-menu"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row" style="flex-direction: row-reverse; justify-content: center;row-gap: 52px; column-gap:40px">
                                    <!-- ltn__product-item -->
                                    <div class="ltn__utilize-overlay"></div>
                                    @if(count($postintag)>0)

                                    @foreach ($postintag as $postintags)
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12" style="border: 1px solid #eee;
                                    border-radius: 12px;
                                    padding: 0px;
                                    border-top-color: transparent;
                                    height: 450px;
                                    direction: rtl;">
                                        <div class="ltn__product-item text-center">

                                            <div class="product-img img-hover-zoom img-hover-zoom--blur img-hover-zoom--xyz">
                                                <a href="{{ route('ShoWarticle',['id'=>$postintags->id]) }}"><img src="../{{ $postintags->IMG }}" style="aspect-ratio: 6/4;" alt="#" ></a>
                                                <div class="product-badge">
                                                    @if($popularpost !=null)

                                                    @if ($popularpost->id==$postintags->id)

                                                    <ul>
                                                        <li class="badge-2">ألأكثر قراءه</li>
                                                    </ul>
                                                    @endif
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a style="font-weight: 700;" href="{{ ROUTE('home',['id'=>$postintags->id]) }}">{{ $postintags->TITLE }}</a></h2>
                                                <div class="product-price" style="padding: 0 15px">
                                                           {{ \Illuminate\Support\Str::limit($postintags->DESCRIPTION, $limit =80, $end = '...') }}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <p style="text-align: center;
                                    font-size: 32px;
                                    font-weight: 700;">لا يوجد مقالات لعرضها</p>
                                    @endif

                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                    @foreach ($postintag as $postintags)

                                        <div class="ltn__product-item">
                                            <div class="product-img">
                                              <a href="{{ route('ShoWarticle',['id'=>$postintags->id]) }}"><img src="../{{ $postintags->IMG }}" alt="#" style="aspect-ratio: 6/4;"></a>

                                              <div class="product-badge">
                                                @if($popularpost !=null)

                                                    @if ($popularpost->id==$postintags->id)

                                                    <ul>
                                                        <li class="badge-2">ألأكثر قراءه</li>
                                                    </ul>
                                                    @endif
                                                    @endif
                                                </div>
                                            </div>


                                           <div class="product-info">
                                                <h2 class="product-title"><a href="{{ ROUTE('home',['id'=>$postintags->id]) }}">{{ $postintags->TITLE }}</a></h2>
                                                <div class="product-price">
{{ \Carbon\Carbon::parse($postintags->DATE_SCHEDULER)->locale('ar')->isoFormat('MMM DD, YYYY') }}
                                            </div>

                                                <div class="product-brief">
                                                           {{ \Illuminate\Support\Str::limit($postintags->DESCRIPTION, $limit =20, $end = '...') }}
</p>
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="ltn__pagination-area text-center">
    <div class="ltn__pagination ltn__pagination-2">
        <ul>


                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

    <!-- BRAND LOGO AREA START -->

  <script src="{{ url('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>
<script>
  $(document).ready(function() {
        var pageid = "{{ $pageid }}"; // Make sure this value is set correctly

        $('#sorting-options').change(function() {
            var selectedOption = $(this).find(':selected');
            var sortValue = selectedOption.data('sort');

            // Show preloader while waiting for the AJAX response
            var preloader = $('<div class="preloader"><img src="../uploads/1700929636.jpg" alt="Loading..."></div>');
            $('body').append(preloader);

            // Make an AJAX request to the server
            $.ajax({
                url: '/showtag/' + pageid,
                type: 'GET',
                data: { sort: sortValue },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Hide the preloader
                    preloader.remove();

                    // Update only the product grid content
                    $('#liton_product_grid .ltn__product-grid-view').html($(response).find('.ltn__product-grid-view').html());
                    $('#liton_product_list .ltn__product-list-view').html($(response).find('.ltn__product-list-view').html());
                },
                error: function(error) {
                    console.error('Error:', error);

                    // Hide the preloader on error
                    preloader.remove();
                }
            });
        });
    });
</script>


    @endsection
    <!-- BRAND LOGO AREA END -->
