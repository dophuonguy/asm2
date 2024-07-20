<!DOCTYPE html>
<html lang="en-us">

<head>
    @include('home.layouts.head')
    <title>Trang chủ</title>
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


  @include('home.layouts.js')
</body>

</html>