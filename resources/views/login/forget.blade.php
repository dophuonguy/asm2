@include('login.layouts.head')
<main id="page-content" class="d-flex nm-aic nm-vh-md-100">
		
    <!-- // Form side -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-6 offset-xl-3 nm-st nm-st-md">
                <form>
                    <div class="nm-mb-2 nm-mb-md-2">
                        <h2>Đặt lại mật khẩu</h2>
                        <p>Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn mã đặt lại!</p>
                    </div>
                    
                    <div class="input-group nm-gp">
                        <span class="nm-gp-pp"><i class="fas fa-envelope-open"></i></span>
                        <input type="email" class="form-control" id="inputEmail" tabindex="1" placeholder="Email" required>
                    </div>

                    <div class="row nm-aic nm-mb-2">
                        <div class="col-sm-6 nm-mb-1 nm-mb-sm-0">
                            <span>Có một tài khoản? </span><a class="nm-fs-1 nm-fw-bd underline" href="login.html">Đăng nhập</a>
                        </div>
                        
                        <div class="col-sm-6 nm-sm-tr">
                            <button type="submit" class="btn btn-primary nm-hvr nm-btn-1">Reset</button>
                        </div>
                    </div>

                    <div class="row nm-row-ct nm-tp-5">
                        <p>
                            © 2020 Mọi quyền được bảo lưu. <a class="heading" href="../index.html" aria-label="Nimoy">READER</a> được tạo bởi ceosDesigns <a class="heading" href="#" aria-label="Terms & Conditions">Điều khoản & Điều kiện</a>, <a class="heading" href="#" aria-label="Privacy">Những thiết lập riêng tư</a>.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form Side // -->

    <!-- // Non-form side -->

    <!-- Non-form Side // -->
</main>

@include('login.layouts.footer')