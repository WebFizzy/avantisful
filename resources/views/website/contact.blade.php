@include('website.includes.header')

    <section id="terms">
      <div class="container icons">
        <div class="icon-container abt2">
          <h1>
            Contact Us
          </h1>
        </div>
      </div>
    </section>


    <section>
      <div class="container contact">
        <div class="cntact">
          <p>
            Send Us Message
          </p>
          <h2>
            Contact Us
          </h2>
        </div>

        <div class="boxx">
          <div class="box">
            <span><i class="uil uil-map-marker"></i></span>
            <div class="insur">
              <h4>Find Us</h4>
              <p>20 OCEAN DRIVE EDINBURGH EH68JG, UNITED KINGDOM</p>
            </div>
          </div>
          <div class="box">
            <span><i class="uil uil-outgoing-call"></i></span>
            <div class="insur">
              <h4>Call Us</h4>
              <p>+4486524383</p>
            </div>
          </div>
          <div class="box">
            <span><i class="uil uil-envelope-upload"></i></span>
            <div class="insur">
              <h4>Mail Us</h4>
              <p>Support@{{ env('APP_NAME') }}.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="contact">
      <div class="contact2" >
        <div class="container contact-container">

          <form action="https://formsubmit.com" method="POST" class="contact-form">
            <input type="text" name="Name" placeholder="Full Name">
            <input type="email" name="Email" placeholder="Email Address">
            <textarea rows="7" name="Massage" placeholder="Message"></textarea>
            <button type="submit" class="btn sm">Send</button>
          </form>
        </div>
      </div>
    </section>


@include('website.includes.footer')

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Finance at it's best">
    <meta name="keywords" content="finance,financial freedom">
    <meta name="author" content="stacks">
    <meta property="og:description" content="Finance at it's best!">
    The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <!-- <title>@yield('title')</title> -->

    <!-- Styles -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://ce62-102-88-36-163.ngrok-free.app/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ce62-102-88-36-163.ngrok-free.app/plugins/perfectscroll/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://ce62-102-88-36-163.ngrok-free.app/plugins/pace/pace.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="https://ce62-102-88-36-163.ngrok-free.app/css/main.min.css">
    <link rel="stylesheet" href="https://ce62-102-88-36-163.ngrok-free.app/css/custom.css">


    <link rel="icon" type="image/png" sizes="32x32" href="https://ce62-102-88-36-163.ngrok-free.app/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://ce62-102-88-36-163.ngrok-free.app/images/neptune.png" />

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- </head>
<body>
    

    @yield('content') -->
    <!-- Javascripts -->
    <!-- <script src="https://ce62-102-88-36-163.ngrok-free.app/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://ce62-102-88-36-163.ngrok-free.app/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ce62-102-88-36-163.ngrok-free.app/plugins/pace/pace.min.js"></script>
    <script src="https://ce62-102-88-36-163.ngrok-free.app/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="https://ce62-102-88-36-163.ngrok-free.app/js/main.min.js"></script>
    <script src="https://ce62-102-88-36-163.ngrok-free.app/js/custom.js"></script>
    <script src="//code.tidio.co/yffhutkmnm04cqyup59fscjek5yyrhmt.js" async></script>

    @stack('scripts')
</body>
</html>  -->