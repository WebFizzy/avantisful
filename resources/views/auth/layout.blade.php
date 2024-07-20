<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Finance at it's best">
    <meta name="keywords" content="finance,financial freedom">
    <meta name="author" content="stacks">
    <meta property="og:description" content="Finance at it's best!">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/perfectscroll/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/pace/pace.css') }}">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/neptune.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/neptune2.png') }}" />

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="form-nav">
        <div class="form-navv">
            <div class="gtranslate_wrapper"></div>
            <script>window.gtranslateSettings = {"default_language":"en","wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"inline","switcher_vertical_position":"left","flag_style":"3d"}</script>
            <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

            <div class="form-home">
                <a href="{{ url('/') }}">Home</a>
            </div>
        </div>
    </div>
        

    @yield('content')
    <!-- Javascripts -->
    <script src="{{ asset('plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- <script src="//code.tidio.co/yffhutkmnm04cqyup59fscjek5yyrhmt.js" async></script> -->

    <!--<script src="//code.tidio.co/zl2u4njuiabawakolyq94orej88hxayg.js" async></script> -->

    @stack('scripts')
</body>
</html>