<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
        - primary meta tags
    -->
    <title>Grilli - Amazing & Delicious Food</title>
    <meta name="title" content="Grilli - Amazing & Delicious Food">
    <meta name="description" content="This is a Restaurant html template made by codewithsadee">

    <!--
        - favicon
    -->
    <link rel="shortcut icon" href="{{ asset('front-end/assets/images/favicon.svg'); }}" type="image/svg+xml">

    <!--
        - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

    <!-- **********
    ******* custom css link ******* -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css'); }}">

    <!-- *********
        ******* #PRELOADER IMAGES *******
    ********** -->
    <link rel="preload" as="image" href="{{ asset('front-end/assets/images/hero-slider-1.jpg'); }}">
    <link rel="preload" as="image" href="{{ asset('front-end/assets/images/hero-slider-2.jpg'); }}">
    <link rel="preload" as="image" href="{{ asset('front-end/assets/images/hero-slider-3.jpg'); }}">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css')}}" integrity="sha512-WxpJXPm/Is1a/dzEdhdaoajpgizHQimaLGL/QqUIAjIihlQqlPQb1V9vkGs9+VzXD7rgI6O+UsSKl4u5K36Ydw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="top">

    <!-- *********
        ******* #PRELOADER *******
    ********** -->
    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Grilli</p>
    </div>


    <!-- ********* header section start ********** -->
    @include('frontend.body.header')
    <!-- ********* header section end ********** -->


    <!-- ********** main body section start ********* -->
    @yield('frontend')
    <!-- ********** main body section end ********* -->


    <!-- ********** footer section start ********* -->
    @include('frontend.body.footer')
    <!-- ********** footer section end ********* -->


  <!-- **********
   ***** BACK TO TOP *****
  ********* -->
  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>


  <!-- ********** CUSTOME JS LINK ********* -->
  <script src="{{ asset('front-end/assets/js/script.js'); }}"></script>

  <!-- ********** ICONS LINK ********* -->
  <script type="module" src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}"></script>
  <script nomodule src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js') }}"></script>
</body>
</html>
