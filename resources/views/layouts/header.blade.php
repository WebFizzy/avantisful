<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/png">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>

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
    
    <!-- google translate -->
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link rel="stylesheet" href="{{ asset('assets/website/css/style.css') }}">
    <!-- <link rel="stylesheet" href="https://c2fc-102-91-52-86.ngrok-free.app/assets/website/css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/website/css/swiper.css') }}">
    <!-- <link rel="stylesheet" href="https://c2fc-102-91-52-86.ngrok-free.app/assets/website/css/swiper.css"> -->
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
      <!-- <div class="loader-container">
          <div class="loader1"></div>
      </div> -->

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

    <div class="header" id="home">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide sliding-1" id="grad">
            <div class="swipe swipo" data-aos="fade-right">
              <div class="front-pg">
                <div class="front-pg2">
                  <div class="swipe-cont">
                    <i>What Next For Gold?</i> 
                    <h1>A FINANCIAL <span>INSTITUTE</span></h1>
                    <h1><span>TO</span> TRUST</h1>
                  </div>
                  <div class="swipe-cont2">
                    <p>
                      <br>
                      Invest with us, for your 100% Mutual Fund and Profit Yield at Avantis Wealth Limited.
                    </p>
                  </div>
                </div>
                <div class="rocket">
                  <div class="rocket2">
                    <div class="imgg-container">
                      <img src="{{ asset('assets/website/images/rocket.png') }}" id="rotating" alt="floating">
                    </div>
                    <h2>up to <span>+5%</span> growth</h2>
                  </div>
                </div>
              </div>
              <div class="swipe-btn">
                <a href="{{ url('register') }}" class="btn primary butt">Get Started</a>
                <a href="{{ url('faq') }}" class="btn butt">FAQs</a>
              </div>
            </div>
          </div>

          <div class="swiper-slide sliding-2" id="grad">
            <div class="swipe mid-swipe">
              <div class="swipe-cont solu">
                <h1>Gold<span> Price</span> set to Reach</h1>
                <h1> New <span>All Time High</span>!!</h1>
                <div class="swipe-cont2 solu2">
                  <p>Our services are simply the best.</p>
                </div>
              </div>
              <div class="swipe-btn bbtn">
                <a href="{{ url('plan') }}" class="btn primary butt">Pricing</a>
                <a href="{{ url('about') }}" class="btn butt">Our projects</a>
              </div>
            </div>
          </div>

          <div class="swiper-slide sliding-3" id="grad">
            <div class="swipe swipo">
              <div class="swipe-cont">
                <h1>GROW <span>FINANCIALLY!</span></h1>
                <h1><span>EARN</span> PROFITS!!</h1>              
              </div>
              <div class="swipe-cont2">
                <p>We Provide Professional Market Infrastructure Firms.
                  <br>  
                We Are The Leaders Of Financial Investment Market</p>
              </div>
              <div class="swipe-btn">
                <a href="{{ url('terms') }}" class="btn primary butt">Terms</a>
                <a href="{{ url('contact') }}" class="btn butt">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
      </div>
    </div>
