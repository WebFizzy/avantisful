<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/png">
    <title>{{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!---Animate on scroll--->    

    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!--Animate on scroll-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google font (poppins $ outfit)-->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans:wght@300&family=Outfit:wght@600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--Swiperjs cdn link------>   
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/> 
    
        <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    
    <link rel="stylesheet" href="{{ asset('assets/website/css/style.css') }}">

    <script type="text/javascript">
      (function () {
          var options = {
              whatsapp: "+447437286745", // WhatsApp number
              call_to_action: "Message us", // Call to action
              position: "left", // Position may be 'right' or 'left'
          };
          var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
    </script>
  </head>
  <body>
    <nav>
      <div class="container1 nav-container">
          <a class="nav-logo" href="index.html">
          <img src="{{ asset('images/avantiswealth.png') }}" alt="navbar logo">
          </a>  

          <ul class="nav-menu nav-m-pg">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('about') }}">Services</a></li>
          <li><a href="{{ url('plan') }}">Pricing</a></li>
          <li><a href="{{ url('faq') }}">FAQs</a></li>
          <li><a href="https://www.bitcoin.com/">Buy Bitcoin</a></li>
          <li class="loggg"><a href="{{ route('home') }}">Login</a></li>
          <li class="reg"><a href="{{ url('register') }}">Get Started</a></li>
        </ul>
        <div class="nav-buttons">
          <button class="nav-theme-btn"><i class="uil uil-moon"></i></button>
          <button class="nav-toggle-open"><i class="uil uil-bars"></i></button>
          <button class="nav-toggle-close"><i class="uil uil-multiply"></i></button>
        </div>
      </div>

      <div class="gtranslate_wrapper"></div>
        <script>window.gtranslateSettings = {"default_language":"en","wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"inline","switcher_vertical_position":"top","flag_style":"3d"}</script>
        <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script> 
    </nav>
    <!------------------END OF NAV----------------->  

    