<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    @yield('title')
    <link rel="stylesheet" type="text/css"  href="{{asset('/Hexashop/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/Hexashop/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/Hexashop/assets/css/templatemo-hexashop.css')}}">
    <link rel="stylesheet" href="{{asset('/Hexashop/assets/css/owl-carousel.css')}}">
    @yield('css')
</head>
<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    @include('components.header')
    @yield('content')
    @include('components.footer')
    <script src="{{asset('/Hexashop/assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/popper.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/accordions.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/datepicker.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/imgfix.min.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/slick.js')}}}}"></script>
    <script src="{{asset('/Hexashop/assets/js/lightbox.js')}}"></script>
    <script src="{{asset('/Hexashop/assets/js/isotope.js')}}"></script>
    @yield('js')
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
                setTimeout(function() {
                    $("."+selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>
</html>
