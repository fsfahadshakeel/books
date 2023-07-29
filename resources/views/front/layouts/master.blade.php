<!DOCTYPE html>
<html lang="en">
<head>
@include('front.layouts.head')
</head>
<body>
<!-- Start of Whole Site Wrapper with mobile menu support -->
<div id="whole" class="whole-site-wrapper">
@include('front.layouts.header')

@yield('content')
        
@include('front.layouts.footer')
    <!-- Start of Scroll to Top -->
    <div id="to_top">
        <i class="ion ion-ios-arrow-forward"></i>
        <i class="ion ion-ios-arrow-forward"></i>
    </div>
    <!-- End of Scroll to Top -->
</div>
<!-- End of Whole Site Wrapper -->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat" attribution=setup_tool page_id="427286664529734" theme_color="#4267B2" logged_in_greeting="Hi!" logged_out_greeting="Hi!" greeting_dialog_display="hide"></div>

<!-- JS
============================================ -->
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Fancy Box JS -->
<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>