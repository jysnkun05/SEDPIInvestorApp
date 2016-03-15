<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>@yield('title') - SEDPI </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{asset('common/css/normalize.min.css')}}">
        <link rel="stylesheet" href="{{asset('common/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('common/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('common/css/bootstrap-material-design.min.css')}}">
        <link rel="stylesheet" href="{{asset('common/css/ripples.min.css')}}">
        <link rel="stylesheet" href="{{asset('common/css/font-awesome.min.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="{{asset('common/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/common/js/jquery.min.js"><\/script>')</script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                }
            });
        </script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @yield('content')

        <script src="{{asset('common/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('common/js/material.min.js')}}"></script>
        <script src="{{asset('common/js/ripples.min.js')}}"></script>
        <script src="{{asset('common/js/moment.min.js')}}"></script>
        <script src="{{asset('common/js/accounting.min.js')}}"></script>
        <script src="{{asset('app/bundle.js')}}"></script>
    
        <script type="text/javascript">
            $.material.init();
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
