<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>

        @yield('title' , 'hamza')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <style>

    </style>

</head>
<body>
<div  class="top-bar">



    <div style="color:white" class="top-bar-left">
        <h4 >
            <a href="{{route('home')}}">
                <i class="fa fa-home " aria-hidden="true">
                </i>
                Home
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('shirts')}}">
                    Produits
                </a>
            </li>
            <li>
                <a href="#">
                    CONTACT
                </a>
            </li>
            <li>
                <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart fa-1x" aria-hidden="true">
                    </i>
                    panier
                    <span class="alert badge">
                               {{Cart::count()}}
                            </span>
                </a>
            </li>
        </ol>
    </div>






</div>
@yield('content')
<footer class="footer">
    <div class="row full-width">

    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
