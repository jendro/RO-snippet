<!DOCTYPE html>
<html lang="en">
  <head>
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>RO-SNIPPET</title>
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
      
      <link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">

      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/nivo-lightbox/nivo-lightbox.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/nivo-lightbox/default.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-custom.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/atom-one-dark.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-tagsinput.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
      
      <script type="text/javascript" src="{{ asset('js/jquery.1.11.1.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/highlight.pack.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script> 
      
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
      
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
      
    @include('layouts.section.header')
   
    @yield('content')

    @include('layouts.section.footer')
    
    <script type="text/javascript" src="{{ asset('js/nivo-lightbox.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
  </body>
</html>