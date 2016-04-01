<html>
<head>
    <title>Project flyer</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/libs.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">

</head>
<body>

@include('navbars.top')

<div class="container">
    @yield('content')
</div>

<script src="/js/libs.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
@yield('scripts.footer')
@include('flash')
</body>
</html>