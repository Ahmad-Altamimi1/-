

<footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div dir="rtl" class="row d-flex align-items-center gy-4">
                        <div class="col-2">
                            <img style="width: 190px;" src="{{ asset('انجابي فكتور-01-01.jpg') }}" alt="logo"
                                class="mb-4" />
                        </div>
                        <div class="col-2">
                            <p>طبكم هي منصة صحية تثقيفية نعل من خلالها على توفير المعلومات الطبية
                                الموثوقة لإثراء الثقافة الصحية ونشرها في أوساط المجتمع العربي</p>
                        </div>
                        <div class="col-1">
                            <ul style="text-align: end;" class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="https://www.facebook.com/tabkom"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/tebkum"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.youtube.com/@Tebkum"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/tebkum"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.tiktok.com/tebkum"><i
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
                                    <i class="fa-solid fa-circle-info fa-2xl"></i>
                                    <a href="#">
                                        <p>عن طبكم</p>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <i class="fa-regular fa-address-book fa-2xl"></i>
                                    <a href="#">
                                        <p>اتصل بنا</p>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <i class="fa-solid fa-image fa-2xl"></i>
                                    <a href="#">
                                        <p>اعلن معنا</p>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <i class="fa-solid fa-book fa-2xl"></i>
                                    <a href="#">
                                        <p>سياستنا</p>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <i class="fa-solid fa-user fa-2xl"></i>
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
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
      <script src="{{ url('assets/libs/lucide/umd/lucide.min.js') }}"></script>
        <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>

        <script src="{{ url('assets/js/app.js') }}"></script>
    <script src="{{ url('pages/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ url ('pages/js/main.js') }}"></script>
    <script src="{{ url ('pages/js/contact.js') }}"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('searchInput');
    var searchResults = document.getElementById('searchResults');
 var searchContent = document.querySelector('#searchcontent');
    var closeIcon = document.querySelector('.for-search-close');
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
  closeIcon.addEventListener('click', function() {
        searchContent.style.height = '0px';
    });
function displayResults(results) {
searchResults.innerHTML = '';
console.log(document.querySelector('#searchcontent'));
    if (results.length > 0) {
    var containerHeight = results.length > 0 ? results.length * 70 : 30;
    document.querySelector('#searchcontent').style.height = containerHeight + 'px';

        results.forEach(function(result) {
            var li = document.createElement('li');
   li.innerHTML = `<a href="/المقال/${result.id}">
                  ${result.TITLE}
                </a>`;
            searchResults.appendChild(li);

        });
    } else {
        var li = document.createElement('li');
        li.textContent = 'No results found';
        searchContent.style.height = '100px';
        searchResults.appendChild(li);
    }
    if (clickOnWindow) {
    document.querySelector('#searchcontent').style.display = 'none';
}
}
});
  function showPreloader() {
      var preloader = document.getElementById('preloader');
      preloader.classList.remove('d-none');
    }

    // Function to hide the preloader
    function hidePreloader() {
      var preloader = document.getElementById('preloader');
      preloader.classList.add('d-none');
    }

    // Example: Call showPreloader when the page loads
    document.addEventListener("DOMContentLoaded", function() {
      showPreloader();

      // Example: Call hidePreloader after a delay (simulating some asynchronous task completion)
      setTimeout(function() {
        hidePreloader();
      }, 3000); // Adjust the delay as needed
    });
   </script>

</body>
</html>
