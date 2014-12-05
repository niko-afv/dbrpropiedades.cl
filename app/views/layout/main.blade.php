<!doctype html>
<html class="no-js" lang="en">
    <head>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title>dbrpropiedades.cl</title>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/animate.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/js/prettyPhoto_3.1.5/prettyPhoto.css" type="text/css" media="screen">
        <link href="/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css" media="screen">
        <link rel="stylesheet" href="/js/isotope/css/style.css" type="text/css" media="screen">
        <script type="text/javascript" src="/js/modernizr.custom.48287.js"></script>
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="apple-touch-fa-57x57-precomposed.png">
        <link rel="shortcut icon" href="images/favicon.png">
    </head>
<body>
    
<header>
    @include('layout.header')
</header>
    
@if ($page == 'index')
<section id="slider_wrapper" class="slider_wrapper full_page_photo">
    @include('layout.slider')
</section>
@endif

<div class="main">
    <div class="container">
        @yield('content')
    </div>
    <footer>
        @include('layout.footer')
    </footer>
</div>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="/twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/js/modernizr.custom.48287.js"></script> 
        <script src="/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
        <script src="/js/prettyPhoto_3.1.5/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script src="/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/js/jquery.ui.totop.js"></script>
        <script type="text/javascript" src="/js/easing.js"></script>
        <script type="text/javascript" src="/js/wow.min.js"></script>
        <script type="text/javascript" src="/js/snap.svg-min.js"></script>
        <script type="text/javascript" src="/js/restart_theme.js"></script>
        <script type="text/javascript" src="/js/collapser.js"></script>
        <!--Contact Form Required Js -->
        <script type="text/javascript" src="/js/contact_form.js"></script>
    </body>
</html>