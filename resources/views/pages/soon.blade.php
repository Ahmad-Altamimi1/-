<!DOCTYPE html>
<html>
  <head>
    <title>anjaby - Coming Soon</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<style>

</style>
    <!-- CSS Files comes here -->
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('css/style.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('css/colors/green.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('css/jquery.vegas.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('css/jquery.ketchup.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('css/responsive.css')}}" rel="stylesheet" media="screen">

    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800" rel="stylesheet" type="text/css">

    <!-- Modernizer and IE specyfic files -->
    <script src="{{url('js/modernizr.custom.js')}}"></script>


<style>


section{
    position: relative;
}
section::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: black;
    opacity: .5;
    top: 0;
    left: 0;
    /* z-index: ; */
}
#home_content {
    text-align:center;
    position:fixed;
    top: 50%;
    left: 50%;
    margin-top: -18em;
    margin-left: -390px;
    height:36em;
    width:780px;
}

#logo {
    margin-bottom: 0.75em;

    -webkit-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -moz-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -o-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}

#logo_header {
    margin-bottom:4.568em
}


/* Counter */

#counter_box {
    width:28.75em;
    height:auto;
    margin-left:auto;
    margin-right:auto;
    border: solid 0.3125em white;
    margin-bottom:4.568em;
}

.countdown {
    font-family: 'Open Sans', sans-serif;
    font-size:300%;
    color:white;
    text-transform:uppercase;
    font-weight:600;
    line-height:1.8em;
    padding-bottom:0.1em;
}
.countdown strong{
    font-family: 'Open Sans', sans-serif;
    font-size:100%;
    color:white;
    text-transform:uppercase;
    font-weight:600;
    line-height:1.8em;
    padding-bottom:0.1em;
    opacity:0.3;
}
#slogan {
    color:white;
}


/* Newsletter Form */

#newsletter_form {
    margin-top:2.4em;
    height: 3.25em;
}

.subscribe-form {
    margin-left:auto;
    margin-right:auto;
    width:28.75em;
    position: relative;
    z-index:10;
}

.subscribe-input {
    float:left;
    padding-left: 1.2em;
    padding-top: 0.1em;
    width:21.875em;
    height: 3.25em;
    font-family: 'Open Sans', sans-serif;
    font-weight:300;
    color: #444;
    background: white;
    -webkit-border-top-left-radius: 10px;
    -webkit-border-bottom-left-radius: 10px;
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-bottomleft: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-border-top-right-radius: 0px;
    -webkit-border-bottom-right-radius: 0px;
    -moz-border-radius-topright: 0px;
    -moz-border-radius-bottomright: 0px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;

    border:none;
}

.subscribe-input:focus {
    outline: 0;
}

.subscribe-submit {
    padding-top: 0.1em;
    display: block;
    position: absolute;
    top: 0px;
    right: 0px;
    font-family: 'Oxygen', sans-serif;
    font-weight:400;
    height: 3.25em;
    width: 6.875em;
    border:none;
    -webkit-border-top-right-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
    -moz-border-radius-topright: 10px;
    -moz-border-radius-bottomright: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    cursor: pointer;
    color:white;
    outline: 0;

    -webkit-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -moz-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -o-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);

}

.subscribe-submit:active {
    outline: 0;
}

.subscribe-submit:hover {
    opacity:0.8
}

#preview {
    width:28.75em;
    height: 3.25em;
    border-radius: 10px;
    border:none;
    margin-left:auto;
    margin-right:auto;
    margin-top:-3.25em;
    padding:1.1em;

    z-index:5;
    -webkit-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -moz-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -o-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);

}

#preview p {
    margin:0;
    line-height:1em;
    font-weight:600;
    color: black;
}

/* Arrow */

#arrow {
    margin-top:2.4em;
    margin-left:auto;
    margin-right:auto;
    width:2.5em;
    height:2.5em;
    padding:0.55em;
    border-radius: 30px;


    -webkit-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -moz-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -o-transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    transition: all 500ms cubic-bezier(0.190, 1.000, 0.220, 1.000);



}

#arrow:hover {
    cursor: pointer;
    width:3em;
    height:3em;
    margin-top: 2.15em;
}

/*######################################*/
/*CONTACT ##############################*/
/*######################################*/

#contact {
    position:relative;
    z-index:100;
    background-color:white;
    padding-top: 4.568em;
    padding-bottom: 4.568em;
    opacity:0;
}

.contact_info {
    margin-top: 1.625em;
    margin-bottom:0px;
}

#about {
    padding-right:3em;
}

#phone_icon {
    vertical-align:middle;
    width:1.5em;
    height:1.5em;
    margin-right:1em;
    margin-top:-0.1em;
}

#mail_icon {
    vertical-align:middle;
    width:1.5em;
    height:1.5em;
    margin-right:1em;
    margin-top:-0.1em;
}

/* Social icons */

#social_icons {
    text-align:center;
}

#social_icons li {
    display:inline;
    padding-left:0.4em;
    padding-right:0.4em;
}

#fb_icon, #tw_icon, #in_icon, #g_icon, #pin_icon, #fli_icon {
    width:2.5em;
    height:2.5em;

    -webkit-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -moz-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -o-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}

#fb_icon:hover, #tw_icon:hover, #in_icon:hover, #g_icon:hover, #pin_icon:hover, #fli_icon:hover {
    cursor: pointer;
}

/* Arrow-back */

#arrow_back {
    margin-top:-2em;
    margin-left:auto;
    margin-right:auto;
    width:2.5em;
    height:2.5em;
    padding:0.5em;
    border-radius: 30px;

    -webkit-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -moz-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    -o-transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
    transition: all 300ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}

#arrow_back:hover {
    cursor: pointer;
    width:3.1em;
    height:3.1em;
    margin-top:-2.1em;
}

</style>


  </head>

  <body>

    <!--###############################-->
    <!--PRELOADER #####################-->
    <!--###############################-->

    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--###############################-->
    <!--HOME ##########################-->
    <!--###############################-->

    <section id="home"  style="background-image: url('../top-view-hands-holding-board_23-2150252831.jpg') !important">
    <div class="container" id="home_background" >
        <div class="row">
            <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1" id="home_content">
                 <div id="logo"><a href="#home"><img src="{{asset('Asset.png')}}"  width='300px' alt="logo"></a></div>
                 <div id="logo_header" ><h5 style="color: white;font-size:52px">Coming soon</h5></div>
                 <div id="counter_box"><div class="countdown"></div></div>

                 </div>
                 <div id="preview"></div>
                 <div id="arrow">
                     <svg viewBox="0 0 32 32">
                         <use xlink:href="#arrow-top"></use>
                     </svg>
                 </div>
            </div>
        </div>
    </div>
    </section>

    <!--###############################-->
    <!--CONTACT #######################-->
    <!--###############################-->












    <!-- JavaScript plugins comes here -->
    <script src="{{url('js/jquery-2.0.3.min.js')}}"></script>
    <script src="{{url('js/jquery.easing.min.js')}}"></script>
    <script src="{{url('js/jquery.scrollTo.js')}}"></script>
    <script src="{{url('js/jquery.countdown.js')}}"></script>
    <script src="{{url('js/jquery.form.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
    <script src="{{url('js/retina.js')}}"></script>
    <script src="{{url('js/jquery.vegas.min.js')}}"></script>
    <script src="{{url('js/pseudo.jquery.js')}}"></script>
    <script src="{{url('js/jquery.ketchup.all.min.js')}}"></script>
    <script type="text/javascript">
        $('document').ready(function()
            {
            $('#subscribe-form').ajaxForm( {
                target: '#preview',
                success: function() {
                      $('#subscribe-form').slideUp('slow');
                      $('#preview').css({"opacity":"1"});
                    }
                });
            });
    </script>
    <script>
        var url ='images/icons.svg';
        var c=new XMLHttpRequest(); c.open('GET', url, false); c.setRequestHeader('Content-Type', 'text/xml'); c.send();
        document.body.insertBefore(c.responseXML.firstChild, document.body.firstChild)
    </script>

    <!-- Demo Switcher JS -->
	<script type="text/javascript" src="{{url('js/fswit.js')}}"></script>
<script>
    (function($) {

  var App = {

    /**
    * Init Function
    */
    init: function() {
    App.homeHeight();
    App.counter();
    App.HomeOpacity();
    App.ScrollToContact();
    App.ScrollBack();
    App.iosdetect();
    App.Preloader();
    App.HomeBackground();
    App.FormValidation();
    },



     /**
     * Home Screen Height
     */
     homeHeight: function() {
     var h = window.innerHeight;
     $('#home').height(h);

     $(window).resize(function(){
        var h = window.innerHeight;
        $('#home').height(h);
        });
     },

     /**
      * Home Screen Counter
      */
     counter: function() {
     $('.countdown').countdown({ date: "February 7, 2014 15:03:26" });
     },


     /**
      * Home Screen Opacity control
      */
     HomeOpacity: function() {

     var h = window.innerHeight;
     $(window).on('scroll', function() {
                  var st = $(this).scrollTop();
                  $('body').pseudoCss(':after', 'opacity', st/h );
                  $('#home').css('opacity', (1-st/h) );
                  });

     },


     /**
      * Scroll To Contact
      */
     ScrollToContact: function() {
     $('#arrow').click(function () {
       $.scrollTo('#contact',1200,{easing:'easeOutExpo',offset:0,'axis':'y'});
     });
     },



     /**
      * Scroll Back
      */
     ScrollBack: function() {
     $('#arrow_back').click(function () {
     $.scrollTo('#home',1500,{easing:'easeInOutExpo',offset:0,'axis':'y'});
                       });
     },


     /**
      * iosdetect
      */
     iosdetect: function() {
     var deviceAgent = navigator.userAgent.toLowerCase();
     $iOS = deviceAgent.match(/(iphone|ipod|ipad)/);

     if ($iOS) {
     var divs = $('#home_content');
     var h = window.innerHeight;
     var divh = $("#home_content").height();
     divs.css({ "position": "relative", "top": (h-divh)/2, "margin-top": "0" });
     $(window).resize(function() {
                  var divs = $('#home_content');
                  var h = window.innerHeight;
                  var divh = $("#home_content").height();
                  divs.css({ "position": "relative", "top": (h-divh)/2, "margin-top": "0" });
                  });

     // use fancy CSS3 for hardware acceleration
     } else {


     // use standard things like jQuery.animate
     }
     },


      /**
      * Preloader
      */
      Preloader: function() {
      $(window).load(function() {

                function logo_fade() {$('#logo').css({"opacity":"1"})};
                function logo_header_fade() {$('#logo_header').css({"opacity":"1"})};
                function counter_box_fade() {$('#counter_box').css({"opacity":"1"})};
                function slogan_fade() {$('#slogan').css({"opacity":"1"})};
                function newsletter_form_fade() {$('#newsletter_form').css({"opacity":"1"})};
                function arrow_fade() {$('#arrow').css({"opacity":"1"})};
                function preview_fade() {$('#preview').css({"opacity":"1"})};
                function contact_fade() {$('#contact').css({"opacity":"1"})};

                $('#logo_header').css({"opacity":"0"});
                $('#counter_box').css({"opacity":"0"});
                $('#slogan').css({"opacity":"0"});
                $('#newsletter_form').css({"opacity":"0"});
                $('#arrow').css({"opacity":"0"});
                $('#preview').css({"opacity":"0"});
                $('#contact').css({"opacity":"0"});

                $('#status').delay(100).fadeOut('slow');
                $('#preloader').delay(500).fadeOut('slow');
                $('body').delay(500).css({'overflow':'visible'});
                       setTimeout(logo_fade,700);
                       setTimeout(logo_header_fade,100);
                       setTimeout(counter_box_fade,300);
                       setTimeout(slogan_fade,600);
                       setTimeout(newsletter_form_fade,900);
                       setTimeout(arrow_fade,1200);
                       setTimeout(contact_fade,1200);
                })
        },

         /**
          * Vegas Slider
          */
         HomeBackground: function() {

                   $.vegas({
                           src:'images/home_bg.jpg'
                           });
                   $.vegas('overlay', {
                           src:'images/overlays/10.png'
                           });

         },

         /**
          * Form Validation
          */
         FormValidation: function() {
         $('#subscribe-form').ketchup();
         },




 }

$(function() {
  App.init();
  });


})(jQuery);
</script>
  </body>
</html>
