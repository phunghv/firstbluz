<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots"  content="index,follow">
        <link rel="alternate" href="firstbluz.herokuapp.com/public/"/>
        <title>We change the world</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/all.css">
        <script type="text/javascript" src="js/all.js"></script>

        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

        <meta name="robots" content="index, follow" />

        <script type="text/javascript" src="javascript/slider/jquery.slider.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/home/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/home/style.css" />

        <link rel="stylesheet" type="text/css" href="js/javascript/slider/themes/carbono/jquery.slider.css" />

        <script type="text/javascript" src="js/javascript/jquery.min.js"></script>
        <script type="text/javascript" src="js/javascript/slider/jquery.slider.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".slider").slideshow({
                    width: 1200,
                    height: 400,
                    transition: ['barLeft', 'barRight']
                });
            });
        </script>
        
    </head>
    <body class="home">
        @include('layout.nav_fixed')
        @include('home.homepage')
        @yield('content')
    </body>
</html>