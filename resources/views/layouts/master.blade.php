<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Unique New</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/style.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/animate.css') }}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{ url('js/respond-1.1.0.min.js')}}"></script>
    <script src="{{ url('js/html5shiv.js')}}"></script>
    <script src="{{ url('js/html5element.js')}}"></script>
    <![endif]-->

</head>
<body>
<!-- Stripped Header and set to main layout since it will load initially on page loads -->
@include('layouts.partials.header')

@yield('content')

<!--Footer-->
@include('layouts.partials.footer')

<script type="text/javascript" src="{{ url('js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery-scrolltofixed.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.nav.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ url('js/wow.js') }}"></script>
<script type="text/javascript" src="{{ url('js/custom.js') }}"></script>

</body>
</html>