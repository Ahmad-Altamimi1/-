
     @extends('../layouts.pagesLayouts.Master')
    @section('content')
 <div class="ltn__utilize-overlay"></div>
<style>
.product-price{
    color: #9faabb;
}
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
                    <div class="ltn__breadcrumb-inner ">
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
                               <div class="short-by ">
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



{{-- tab atb tab tab taba tabat btab  --}}



                   <div class="ltn__pagination-area ">
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
