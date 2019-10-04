<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Studio7 - Digital Agency</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('includes.navbar')
    <!-- <div class="container"> -->
        @include('includes.messages')
        @yield('content')
    <!-- </div> -->


    <div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2019 Nerve. Designed by <a href="http://www.templatewire.com" rel="nofollow">SirVent</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="/js/bootstrap.js"></script> 
<script type="text/javascript" src="/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="/js/jquery.isotope.js"></script> 
<script type="text/javascript" src="/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="/js/contact_me.js"></script> 
<script type="text/javascript" src="/js/main.js"></script>
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>