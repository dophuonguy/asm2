@extends('home.index')
@section('main')
<section class="section pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5">
          @foreach ($f_f_e as $f_f_e)
          <h2 class="h5 section-title">{{ $f_f_e->tintucCategory->title }}</h2>
          {{-- {{ url('category/'.$f_f_e->tintucCategory->slug) }} --}}
          
          <article class="card">
            <div class="post-slider slider-sm">
              <a href="{{ route('bai-viet',['slug'=>$f_f_e->slug]) }}" class="card-img-top" style="height:355px">
                <img src="{{asset("uploads")}}/tintuc/{{ $f_f_e->hinhanh }}"  alt="post-thumb" >
              </a>
            </div>
            <div class="card-body">

              <h3 class="h4 mb-3">
                <a class="post-title" href="{{ route('bai-viet',['slug'=>$f_f_e->slug]) }}">
                  {{ $f_f_e->title }}
                </a>
              </h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  @foreach ($user as $u)
                    @if ($u->id == $f_f_e->tacgia)
                      <a href="author-single.html" class="card-meta-author">
                        <img src="{{asset("assets")}}/images/kate-stone.jpg" alt="Kate Stone">
                        <span>{{ $u->name }}</span>
                      </a>
                    @endif
                  @endforeach
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 phút để đọc
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{ $f_f_e->ngayduyet }}
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">màu sắc</a></li>
                    <li class="list-inline-item"><a href="tags.html">Công thức</a></li>
                    <li class="list-inline-item"><a href="tags.html">Formula</a></li>
                  </ul>
                </li>
              </ul>
              <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ những công ty khởi nghiệp thú vị đến…</p>
              <a href="{{ route('bai-viet',['slug'=>$f_f_e->slug]) }}" class="btn btn-outline-primary">Đọc thêm</a>
            </div>
            
          </article>
          @endforeach
        </div>
        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Tin công nghệ</h2>
          <article class="card mb-4">
            @foreach ($cong_nghe2 as $cong_nghe2)
            <div class="card-body d-flex">
              <a href="{{ route('bai-viet',['slug'=>$cong_nghe2->slug]) }}" >
                <img src="{{asset("uploads")}}/tintuc/{{ $cong_nghe2->hinhanh }} "  class="card-img-sm" alt="" >
              </a>
              <div class="ml-3">
                <h4><a href="{{ route('bai-viet',['slug'=>$cong_nghe2->slug]) }}" class="post-title">{{ $cong_nghe2->title }}</a></h4>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>{{ $cong_nghe2->ngayduyet }}
                  </li>
                  <li class="list-inline-item mb-0">
                    <i class="ti-timer">
                    @foreach ($user as $u)
                      @if ($u->id == $cong_nghe2->tacgia)
                          <li><a href="#">{{ $u->name }}</a></li>
                      @endif
                    @endforeach
                  </i>
                  </li>
                </ul>
              </div>
            </div>
            @endforeach
          </article>
        </div>
        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Khoa học</h2>
          <article class="card mb-4">
            @foreach ($khoa_hoc2 as $khoahoc)
            <div class="card-body d-flex">
              <a href="{{ route('bai-viet',['slug'=>$khoahoc->slug]) }}" >
                <img src="{{asset("uploads")}}/tintuc/{{ $khoahoc->hinhanh }} "  class="card-img-sm" alt="" >
              </a>
              <div class="ml-3">
                <h4><a href="{{ route('bai-viet',['slug'=>$khoahoc->slug]) }}" class="post-title">{{ $khoahoc->title }}</a></h4>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>{{ $khoahoc->ngayduyet }}
                  </li>
                  <li class="list-inline-item mb-0">
                      @foreach ($user as $u)
                      @if ($u->id == $khoahoc->tacgia)
                          <li><a href="#" class="ti-timer">{{ $u->name }}</a>
                          </li>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </div>
            </div>
            @endforeach
          </article>
        </div>
        <div class="col-12">
          <div class="border-bottom border-default"></div>
        </div>
      </div>
    </div>
</section>

  <section class="section-sm">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8  mb-5 mb-lg-0">
          <h2 class="h5 section-title">Recent Post</h2>
          <article class="card mb-4">
            <div class="post-slider">
              <img src="{{asset("assets")}}/images/post/post-10.jpg" class="card-img-top" alt="post-thumb">
              <img src="{{asset("assets")}}/images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
              <h3 class="mb-3"><a class="post-title" href="post-elements.html">Các yếu tố mà bạn có thể sử dụng trong này
                Bản mẫu.</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="{{asset("assets")}}/images/john-doe.jpg" alt="John Doe">
                    <span>John Doe</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>3 phút để đọc
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>15 tháng 1 năm 2020
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Thử nghiệm</a></li>
                    <li class="list-inline-item"><a href="tags.html">Yếu tố</a></li>
                  </ul>
                </li>
              </ul>
              <p>Ví dụ về tiêu đề Đây là ví dụ về bảo hiểm rủi ro. Bạn có thể sử dụng tiêu đề này bằng cách làm theo các quy tắc đánh dấu.
                Ví dụ: sử dụng # cho tiêu đề 1 và sử dụng cho tiêu đề 6.</p>
              <a href="post-elements.html" class="btn btn-outline-primary">Mở rộng</a>
            </div>
          </article>

          <article class="card mb-4">
            <div class="post-slider">
              <img src="{{asset("assets")}}/images/post/post-3.jpg" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
              <h3 class="mb-3"><a class="post-title" href="">Lời khuyên từ tuổi đôi mươi</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="{{asset("assets")}}/images/john-doe.jpg">
                    <span>Mark Dinn</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 phút để đọc
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>14 tháng 1 năm 2020
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Trang trí</a></li>
                    <li class="list-inline-item"><a href="tags.html">Sáng tạo</a></li>
                  </ul>
                </li>
              </ul>
              <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ những công ty khởi nghiệp thú vị đến những thương hiệu, công ty toàn cầu
                đang tiếp cận với các cơ quan kỹ thuật số, đáp ứng những khả năng mới có sẵn.</p>
              <a href="" class="btn btn-outline-primary">Mở rộng</a>
            </div>
          </article>

          <article class="card mb-4">
            <div class="post-slider">
              <img src="{{asset("assets")}}/images/post/post-7.jpg" class="card-img-top" alt="post-thumb">
            </div>

            <div class="card-body">
              <h3 class="mb-3"><a class="post-title" href="">Lời khuyên từ tuổi đôi mươi</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="{{asset("assets")}}/images/john-doe.jpg">
                    <span>Charls Xaviar</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 phút để đọc
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>14 tháng 1 năm 2020
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Color</a></li>
                    <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                    <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                  </ul>
                </li>
              </ul>
              <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ những công ty khởi nghiệp thú vị đến những thương hiệu, công ty toàn cầu
                đang tiếp cận với các cơ quan kỹ thuật số, đáp ứng những khả năng mới có sẵn.</p>
              <a href="" class="btn btn-outline-primary">Mở rộng</a>
            </div>
          </article>

          <article class="card mb-4">
            <div class="card-body">
              <h3 class="mb-3"><a class="post-title" href="">Cặp đôi yêu nhau vui vẻ Thợ làm bánh uống rượu
                Cà phê</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="{{asset("assets")}}/images/kate-stone.jpg" alt="Kate Stone">
                    <span>Kate Stone</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 phút để đọc
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>14 tháng 1 năm 2020
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Wow</a></li>
                    <li class="list-inline-item"><a href="tags.html">Ngon</a></li>
                  </ul>
                </li>
              </ul>
              <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ những công ty khởi nghiệp thú vị đến những thương hiệu, công ty toàn cầu
                đang tiếp cận với các cơ quan kỹ thuật số, đáp ứng những khả năng mới có sẵn.</p>
              <a href="" class="btn btn-outline-primary">Mở rộng</a>
            </div>
          </article>

          <article class="card mb-4">
            <div class="post-slider">
              <img src="{{asset("assets")}}/images/post/post-5.jpg" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
              <h3 class="mb-3"><a class="post-title" href="">How To Make Cupcakes and Cashmere Recipe
                  At Home</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="{{asset("assets")}}/images/kate-stone.jpg" alt="Kate Stone">
                    <span>Kate Stone</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 phút để đọc
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>14 tháng 1 năm 2020
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">City</a></li>
                    <li class="list-inline-item"><a href="tags.html">Food</a></li>
                    <li class="list-inline-item"><a href="tags.html">Taste</a></li>
                  </ul>
                </li>
              </ul>
              <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ những công 
                ty khởi nghiệp thú vị đến những thương hiệu, công ty toàn cầu</p>
              <a href="" class="btn btn-outline-primary">Mở rộng</a>
            </div>
          </article>

          <article class="card mb-4">
            <div class="post-slider">
              <img src="{{asset("assets")}}/images/post/post-8.jpg" class="card-img-top" alt="post-thumb">
              <img src="{{asset("assets")}}/images/post/post-9.jpg" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
              <h3 class="mb-3"><a class="post-title" href="">Cách làm bánh nướng nhỏ và công thức làm món cashmere
                Ở nhà</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="{{asset("assets")}}/images/john-doe.jpg" alt="John Doe">
                    <span>John Doe</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 phút để đọc
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>14 tháng 1 năm 2020
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Color</a></li>
                    <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                    <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                  </ul>
                </li>
              </ul>
              <p>đang tiếp cận với các cơ quan kỹ thuật số, đáp ứng những khả năng mới có sẵn.</p>
              <a href="" class="btn btn-outline-primary">Mở rộng</a>
            </div>
          </article>

          <ul class="pagination justify-content-center">
            <li class="page-item page-item active ">
              <a href="#!" class="page-link">1</a>
            </li>
            <li class="page-item">
              <a href="#!" class="page-link">2</a>
            </li>
            <li class="page-item">
              <a href="#!" class="page-link">&raquo;</a>
            </li>
          </ul>
        </div>
        <aside class="col-lg-4 sidebar-home">
          <!-- Search -->
          <div class="widget">
            <h4 class="widget-title"><span>Search</span></h4>
            <form action="#!" class="widget-search">
              <input class="mb-3" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
              <i class="ti-search"></i>
              <button type="submit" class="btn btn-primary btn-block">Search</button>
            </form>
          </div>

          <!-- about me -->
          <div class="widget widget-about">
            <h4 class="widget-title">Hi, I am Alex!</h4>
            <img class="img-fluid" src="{{asset("assets")}}/images/author.jpg" alt="Themefisher">
            <p>Khách hàng rất quan trọng, khách hàng sẽ được khách hàng theo đuổi. Hoặc trong thời gian mục tiêu ghét bây giờ laoreet
              . Tôi được tự do sử dụng.</p>
            <ul class="list-inline social-icons mb-3">

              <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

              <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

              <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

              <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

              <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

            </ul>
            <a href="about-me.html" class="btn btn-primary mb-2">Chi tiết</a>
          </div>

          <!-- Promotion -->
          <div class="promotion">
            <img src="{{asset("assets")}}/images/promotion.jpg" class="img-fluid w-100">
            <div class="promotion-content">
              <h5 class="text-white mb-3">Tạo một trang web tuyệt đẹp!!</h5>
              <p class="text-white mb-4">Khách hàng rất quan trọng, khách hàng sẽ được khách hàng theo đuổi. Hoặc trong thời gian mục tiêu ghét bây giờ laoreet
                . Tôi được tự do sử dụng..</p>
              <a href="https://themefisher.com/" class="btn btn-primary">Bắt đầu</a>
            </div>
          </div>

          <!-- authors -->
          <div class="widget widget-author">
            <h4 class="widget-title">Người đăng bài</h4>
            <div class="media align-items-center">
              <div class="mr-3">
                <img class="widget-author-image" src="{{asset("assets")}}/images/john-doe.jpg">
              </div>
              <div class="media-body">
                <h5 class="mb-1"><a class="post-title" href="author-single.html">Charls Xaviar</a></h5>
                <span>Tác giả &amp; nhà phát triển Bexer, chủ đề Biztrox</span>
              </div>
            </div>
            <div class="media align-items-center">
              <div class="mr-3">
                <img class="widget-author-image" src="{{asset("assets")}}/images/kate-stone.jpg">
              </div>
              <div class="media-body">
                <h5 class="mb-1"><a class="post-title" href="author-single.html">Kate Stone</a></h5>
                <span>Tác giả &amp; nhà phát triển Bexer, chủ đề Biztrox</span>
              </div>
            </div>
            <div class="media align-items-center">
              <div class="mr-3">
                <img class="widget-author-image" src="{{asset("assets")}}/images/john-doe.jpg" alt="John Doe">
              </div>
              <div class="media-body">
                <h5 class="mb-1"><a class="post-title" href="author-single.html">John Doe</a></h5>
                <span>Tác giả &amp; nhà phát triển Bexer, chủ đề Biztrox</span>
              </div>
            </div>
          </div>
          <!-- Search -->

          <div class="widget">
            <h4 class="widget-title"><span>Không bao giờ bỏ lỡ một tin tức</span></h4>
            <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank" class="widget-search">
              <input class="mb-3" id="search-query" name="s" type="search" placeholder="Địa chỉ email của bạn">
              <i class="ti-email"></i>
              <button type="submit" class="btn btn-primary btn-block" name="subscribe">Theo dõi ngay</button>
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
              </div>
            </form>
          </div>

          <!-- categories -->
          <div class="widget widget-categories">
            <h4 class="widget-title"><span>Danh mục</span></h4>
            <ul class="list-unstyled widget-list">
              <li><a href="tags.html" class="d-flex">Sáng tạo <small class="ml-auto">(4)</small></a></li>
              <li><a href="tags.html" class="d-flex">Thử nghiệm <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">Yếu tố <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">Đồ ăn <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">Lò vi sóng <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">Tự nhiên <small class="ml-auto">(3)</small></a></li>
              <li><a href="tags.html" class="d-flex">Thành phố New York <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">Đẹp <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">Công nghệ <small class="ml-auto">(2)</small></a></li>
              <li><a href="tags.html" class="d-flex">Quay phim <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">Vlog <small class="ml-auto">(1)</small></a></li>
              <li><a href="tags.html" class="d-flex">xứ sở thần tiên <small class="ml-auto">(1)</small></a></li>
            </ul>
          </div><!-- tags -->
          <div class="widget">
            <h4 class="widget-title"><span>Từ khóa</span></h4>
            <ul class="list-inline widget-list-inline widget-card">
              <li class="list-inline-item"><a href="tags.html">Thành phố</a></li>
              <li class="list-inline-item"><a href="tags.html">Màu sắc</a></li>
              <li class="list-inline-item"><a href="tags.html">Creative</a></li>
              <li class="list-inline-item"><a href="tags.html">Sáng tạo</a></li>
              <li class="list-inline-item"><a href="tags.html">Giải trí</a></li>
              <li class="list-inline-item"><a href="tags.html">Yếu tố</a></li>
              <li class="list-inline-item"><a href="tags.html">Cá</a></li>
              <li class="list-inline-item"><a href="tags.html">Đồ ăn</a></li>
              <li class="list-inline-item"><a href="tags.html">Đẹp</a></li>
              <li class="list-inline-item"><a href="tags.html">Công thức</a></li>
              <li class="list-inline-item"><a href="tags.html">Mùa</a></li>
              <li class="list-inline-item"><a href="tags.html">Nếm</a></li>
              <li class="list-inline-item"><a href="tags.html">Ngon</a></li>
            </ul>
          </div><!-- recent post -->
          <div class="widget">
            <h4 class="widget-title">Tin công nghệ</h4>

            <!-- post-item -->
            <article class="widget-card">
              <div class="d-flex">
                <img class="card-img-sm" src="{{asset("assets")}}/images/post/post-10.jpg">
                <div class="ml-3">
                  <h5><a class="post-title" href="post/elements/">Các yếu tố mà bạn có thể sử dụng trong mẫu này.</a></h5>
                  <ul class="card-meta list-inline mb-0">
                    <li class="list-inline-item mb-0">
                      <i class="ti-calendar"></i>Ngày 15 tháng 1 năm 2020
                    </li>
                  </ul>
                </div>
              </div>
            </article>

            <article class="widget-card">
              <div class="d-flex">
                <img class="card-img-sm" src="{{asset("assets")}}/images/post/post-3.jpg">
                <div class="ml-3">
                  <h5><a class="post-title" href="">Lời khuyên từ tuổi đôi mươi</a></h5>
                  <ul class="card-meta list-inline mb-0">
                    <li class="list-inline-item mb-0">
                      <i class="ti-calendar"></i>14 tháng 1 năm 2020
                    </li>
                  </ul>
                </div>
              </div>
            </article>

            <article class="widget-card">
              <div class="d-flex">
                <img class="card-img-sm" src="{{asset("assets")}}/images/post/post-7.jpg">
                <div class="ml-3">
                  <h5><a class="post-title" href="">Lời khuyên từ tuổi đôi mươi</a></h5>
                  <ul class="card-meta list-inline mb-0">
                    <li class="list-inline-item mb-0">
                      <i class="ti-calendar"></i>14 tháng 1 năm 2020
                    </li>
                  </ul>
                </div>
              </div>
            </article>
          </div>

          <!-- Social -->
          <div class="widget">
            <h4 class="widget-title"><span>đường liên kết mạng xã hội</span></h4>
            <ul class="list-inline widget-social">
              <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection
