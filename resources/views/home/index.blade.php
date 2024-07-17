<!DOCTYPE html>
<html lang="en-us">

<head>
    @include('home.layouts.head')
</head>

<body>
  <!-- navigation -->
  <header class="navigation fixed-top">
      @include('home.layouts.header')
  </header>
  <!-- /navigation -->

  <!-- start of banner -->
  <div class="banner text-center">
      @include('home.layouts.banner')
  </div>
  <!-- end of banner -->
    @yield('main')

  <footer class="footer">
    @include('home.layouts.footer')
  </footer>


  <script src="{{asset("assets")}}/plugins/jQuery/jquery.min.js"></script>
  <script src="{{asset("assets")}}/plugins/bootstrap/bootstrap.min.js"></script>
  <script src="{{asset("assets")}}/plugins/slick/slick.min.js"></script>
  <script src="{{asset("assets")}}/plugins/instafeed/instafeed.min.js"></script>
  <script src="{{asset("assets")}}/js/script.js"></script>
</body>

</html>