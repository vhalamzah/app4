<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

         <title> Rainbow&Tech</title>
      <link href="{{ asset('css/front/bootstrap.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/front/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/front/jquery.bxslider.c')}}ss">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/front/isotope.css')}}" media="screen" /> 
      <link rel="stylesheet" href="{{ asset('css/front/animate.css')}}">
      <link rel="stylesheet" href="{{ asset('js/front/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
      <link href="{{asset('css/front/prettyPhoto.css')}}" rel="stylesheet" />
      <link href="{{asset('css/front/style.css')}}" rel="stylesheet" />  
       <link href="{{ asset('css/front/app.css') }}" rel="stylesheet">
 
    @yield('stylesheets')
        
       
    </head>