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
       ul.li.a:hover{
            color:#ffffff;
            background-color: #000000;
        }

    </style>

</head>





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


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<b class ="caret"></b></a>
                        <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="{{url('/')}}" style="color: #ffffff">Page Home</a></li>
                            <li><a href="{{url('/logout')}}" style="color: #ffffff">Deconnexion</a></li>
                        </ul>
                    </li>


        </ol>
    </div>






</div>