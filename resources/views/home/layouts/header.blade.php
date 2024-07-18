<div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
      <a class="navbar-brand order-1" href="{{ route('index') }}">
        <img class="img-fluid" width="100px" src="{{asset("assets")}}/images/logo.png" alt="Reader | Hugo Personal Blog Template">
      </a>
      <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('index') }}" role="button" aria-haspopup="true"
              aria-expanded="false">
              Trang chủ
            </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Tin Tức <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">

              <a class="dropdown-item" href="{{ route('details') }}">Chính trị - Xã Hội</a>

              <a class="dropdown-item" href="{{ route('details') }}">Đời sống - Dân sinh</a>

              <a class="dropdown-item" href="{{ route('details') }}">Nóng trên mạng</a>

            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Kinh Doanh <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">

              <a class="dropdown-item" href="{{ route('details') }}">Doanh nhân</a>
              <a class="dropdown-item" href="{{ route('details') }}">Tài chính</a>
              <a class="dropdown-item" href="{{ route('details') }}">Bất động sản</a>
              <a class="dropdown-item" href="{{ route('details') }}">Khởi Nghiệp</a>
              <a class="dropdown-item" href="{{ route('details') }}">Doanh nghiệp</a>
              <a class="dropdown-item" href="{{ route('details') }}">Chứng khoán</a>
              <a class="dropdown-item" href="{{ route('details') }}">Tỉ giá</a>
              <a class="dropdown-item" href="{{ route('details') }}">Giá vàng</a>
              <a class="dropdown-item" href="{{ route('details') }}">Tiền tiền tiền</a>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Phản hồi</a>
          </li>
          <div class="order-2 order-lg-3 d-flex align-items-center">  
            <!-- search -->
            <form class="search-bar">
              <input id="search-query" name="s" type="search" placeholder="Tìm kiếm tin tức">
            </form>
  
            <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
              data-target="#navigation">
              <i class="ti-menu"></i>
            </button>
          </div>

          
        </ul>
      </div>
      <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            @if (Auth::check())
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              {{ Auth::user()->name }} <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a>
              <a class="dropdown-item" href="{{ route('profile') }}">Thông tin cá nhân</a>
            </div>
            @else
            <a class="nav-link" href="{{ route('login') }}" role="button"  aria-haspopup="true"
            aria-expanded="false"> Đăng nhập </a>
            @endif
          </li>
        </ul>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('register') }}" role="button"  aria-haspopup="true"
            aria-expanded="false"> Đăng kí </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>