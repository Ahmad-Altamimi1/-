

<style>
    .row p {
        margin-top: 20px;
        font-size: 14px
    }

</style>
<footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div dir="rtl" class="row d-flex align-items-center gy-4">
                        <div class="col-2">
                            <img style="width: 190px;" src="{{ asset('انجابي فكتور-01-01.jpg') }}" alt="logo"
                                class="mb-4" />
                        </div>
                        <div class="col-2">
                            <p>إنجابي هي منصة صحية تثقيفية نعل من خلالها على توفير المعلومات الطبية الموثوقة لصحة الأم والطفل خلال فترات الحمل والأمومة.</p>
                        </div>
                        <div class="col-1">
                            <ul style="text-align: end;display: flex;

                            flex-direction: column;
                            align-items: center;" class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="https://www.facebook.com/tabkom"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/tebkum"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.youtube.com/@Tebkum"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/tebkum"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item" style="    margin-right: 1rem;"><a href="https://www.tiktok.com/tebkum"><i
                                            class='fab fa-tiktok'></i>
                                    </a></li>
                            </ul>
                        </div>
                        <div style="text-align: center;" class="col-6">
                            <div class="row">
                                <div class="col">
                                    <p>جميع المعلومات الواردة في الموقع هي
                                        لغايات المعرفة والثقافة الصحية ولا تغني عن استشارة المختصين</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-circle-info fa-2xl" aria-hidden="true"></i>
                                    <a href="#">
                                        <p>عن أنجابي</p>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <i class="fa fa-phone fa-2xl" aria-hidden="true"></i>
                                    <a href="#">
                                        <p>اتصل بنا</p>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <i class="fa fa-picture-o fa-2xl" aria-hidden="true"></i>
                                    <a href="#">
                                        <p>اعلن معنا</p>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <i class="fa fa-address-book-o fa-2xl" aria-hidden="true"></i>
                                    <p>سياستنا</p>


                                </div>
                                <div class="col-2">
                                    <i class="fa fa-user fa-2xl" aria-hidden="true"></i>
                                    <a href="#">
                                        <p>شروط الإستخدام</p>
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <p>&copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> كافة الحقوق محفوظة | تم تصميمه من
                                        قبل <a href="https://doroobgroup.com/" target="_blank">دروب
                                            السلام</a>
                                    </p>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </div><!-- end site wrapper -->

    <!-- All JS Plugins -->
    <!-- Include WOW library -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script type="text/javascript" src="{{ url('slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('slick/slick.js') }}"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ url('assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script> --}}
    <script>
      $(document).ready(function(){
        // Initialize Slick Carousel
        $('.slick-carousel').slick({
          slidesToShow: 3, // Adjust the number of slides to show
          slidesToScroll: 1,
          autoplay: true, // Set to true if you want the carousel to autoplay
          autoplaySpeed: 2000 // Adjust the autoplay speed in milliseconds
          // Add more options as needed
        });
      });
    </script>

    <script>
      
// Replace Owl Carousel initialization with Slick Carousel
$('.custom-carousel').slick({
  variableWidth: true, // autoWidth equivalent
  infinite: true, // loop equivalent
  slidesToShow: 1, // Assuming you want one visible slide at a time
  slidesToScroll: 1, // Assuming you want to scroll one slide at a time
});
$(document).ready(function () {
  $(".custom-carousel .item").hover(function () {
    $(".custom-carousel .item").not($(this)).removeClass("active");
    $(this).toggleClass("active");
  });
});
// Use 'init' event to handle item click and toggle 'active' class
$(document).ready(function () {
  $('.custom-carousel').on('init', function () {
    $('.custom-carousel .slick-slide').click(function () {
      $('.custom-carousel .slick-slide').not($(this)).removeClass('active');
      $(this).toggleClass('active');
    });
  });
});

  </script>
      

        {{-- <script src="{{ url('js/app.js') }}"></script> --}}




        {{-- <script src="{{ url('assets/js/app.js') }}"></script> --}}
    {{-- <script src="{{ url('pages/js/plugins.js') }}"></script> --}}

    <!-- Main JS -->
    <script src="{{ url ('pages/js/main.js') }}"></script>
    {{-- <script src="{{ url ('pages/js/contact.js') }}"></script> --}}
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var prevButton = document.querySelector('.slick-prev');
      if (prevButton) {
        prevButton.click();
      }
    var searchInput = document.getElementById('searchInput');
    var searchResults = document.getElementById('searchResults');
 var searchContent = document.querySelector('#searchcontent');

    searchInput.addEventListener('input', function() {
        var query = searchInput.value;

        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/search', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var results = JSON.parse(xhr.responseText);
                displayResults(results);
            }
        };
        xhr.send('query=' + encodeURIComponent(query));
    });
//   closeIcon.addEventListener('click', function() {
//         searchContent.style.height = '0px';
//     });
function displayResults(results) {
searchResults.innerHTML = '';
console.log(document.querySelector('#searchcontent'));
    if (results.length > 0) {
    var containerHeight = results.length > 0 ? results.length * 70 : 30;
    document.querySelector('#searchcontent').style.height = containerHeight + 'px';

    results.forEach(function(result, index) {
    var searchResultsul = document.querySelector('#searchResults');

    searchResultsul.style.display = 'flex';

    var li = document.createElement('li');
    li.style.position = "absolute";
    li.style.top = (index * 30) + "px";

    li.innerHTML = `<a href="/postss/${result.id}" style='    width: 100%;
    display: inline-block;
    height: 30px;
    overflow: hidden;'>
                      ${result.TITLE}</a>`;
    searchResults.appendChild(li);
});

    } else {
        var li = document.createElement('li');
        // li.style.position = "absolute";
        li.textContent = 'لا يوجد نتائج';
        searchContent.style.height = '100px';
        searchResults.appendChild(li);
    }

}
});


document.addEventListener("DOMContentLoaded", () => {


setTimeout(function() {
  hidePreloader();
}, 3000);
    var swiper = new Swiper('.blog-slider', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        mousewheel: {
            invert: false,
        },
        pagination: {
            el: '.blog-slider__pagination',
            clickable: true,
        }
    });
  document.querySelectorAll(".carousel-container").forEach((carousel) => {
    insertNumbers(carousel);

    carousel.querySelector(".prev").addEventListener("click", () => {
      navigate(carousel, -1);
    });

    carousel.querySelector(".next").addEventListener("click", () => {
      navigate(carousel, 1);
    });

    insertDots(carousel);

    carousel.querySelectorAll(".dot").forEach((dot, index) => {
      dot.addEventListener("click", () => {
        showItem(carousel, index);
      });
    });

    showItem(carousel, 0);
  });
});

function insertNumbers(carousel) {
  const items = carousel.querySelectorAll(".item");
  const length = items.length;

  items.forEach((item, index) => {
    const nmbr = document.createElement("div");
    nmbr.classList.add("numbertext");
    nmbr.innerText = index + 1 + " / " + length;

    item.appendChild(nmbr);
  });
}

function insertDots(carousel) {
  const dotsContainer = document.createElement("div");
  dotsContainer.classList.add("dots");

  carousel.appendChild(dotsContainer);

  carousel.querySelectorAll(".item").forEach(() => {
    const dot = document.createElement("div");
    dot.classList.add("dot");

    dotsContainer.appendChild(dot);
  });
}

function navigate(carousel, direction) {
  const current = currentItem(carousel);
  const totalItems = carousel.querySelectorAll(".item").length;
  const nextItem = (current + direction + totalItems) % totalItems;

  showItem(carousel, nextItem);
}

function currentItem(carousel) {
  return [...carousel.querySelectorAll(".item")].findIndex(
    (item) => item.style.display === "block"
  );
}

function showItem(carousel, index) {
  carousel.querySelectorAll(".item").forEach((item, i) => {
    item.style.display = i === index ? "block" : "none";
  });

  const activeDot = carousel.querySelector(".dot.active");
  if (activeDot) {
    activeDot.classList.remove("active");
  }

  carousel.querySelectorAll(".dot")[index].classList.add("active");
}


  function showPreloader() {
      var preloader = document.getElementById('preloader');
      preloader.classList.remove('d-none');
    }
    document.addEventListener('click', function(event) {
    var searchResults = document.querySelectorAll('#searchResults li');
    var searchResultsul = document.querySelector('#searchResults');
    searchResultsul.style.display = 'none';
    // Iterate through each <li> element within #searchResults
    searchResults.forEach(function(result) {
        // Set display to 'none' for each <li> element
        result.style.display = 'none';
    });

    // Set display to 'none' for #searchcontent
    document.querySelector('#searchcontent').style.display = 'none';
});

    // Function to hide the preloader
    function hidePreloader() {
      var preloader = document.getElementById('preloader');
      preloader.classList.add('d-none');
    }

    document.addEventListener("DOMContentLoaded", function() {

    });


   </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.5/js/uikit.min.js" integrity="sha512-y2L19LN3n8wSmzg6I5FzQRey2/6Pwi5mTEZpEM8lJW2EEUgSPE/t/E0+rBWwUuY7HLfQ7P4Gvus9L7/1vM9SZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.5/js/uikit-icons.min.js" integrity="sha512-kIXiHI1wSHtBxWjT9fcZOC2WzfuLiACZ6sC9Kg0/kJu5T4e4vsTRB5PzUcf1by/hJ9ZdKaFfS+PiXlV6bl5dGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>
