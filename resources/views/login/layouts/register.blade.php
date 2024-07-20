<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-6 offset-xl-3 nm-st nm-st-md">
            <form action="" method="POST">
                @csrf
                <div class="nm-mb-2 nm-mb-md-2">
                    <h2>Thêm mới tài khoản ngay bây giờ !</h2>
                    <p>Bạn đã có tài khoản ? <a class="nm-fs-1 nm-fw-bd underline" href="{{ route('login') }}">Đăng nhập</a></p>
                </div>
                
                <div class="input-group nm-gp">
                    <span class="nm-gp-pp"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="inputUsername" tabindex="1" placeholder="Tên đăng nhập" name="name" required >
                </div>

                <div class="input-group nm-gp">
                    <span class="nm-gp-pp"><i class="fas fa-envelope-open"></i></span>
                    <input type="email" class="form-control" id="inputEmail" tabindex="2" placeholder="Email" name="email" required >
                </div>
                
                <div class="input-group nm-gp">
                    <span class="nm-gp-pp"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" id="inputPassword" tabindex="3" placeholder="Mật khẩu" name="password" required>
                </div>

                <div class="row nm-aic nm-mb-2">
                    <div class="col-sm-6 nm-mb-1 nm-mb-sm-0">
                        <span class="nm-fs-1 nm-tm">Hiển thị mật khẩu</span>
                        <label class="nm-sw-pd">
                            <input type="checkbox" id="toggle-password" class="d-none">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="col-sm-6 nm-sm-tr">
                        <button type="submit" class="btn btn-primary nm-hvr nm-btn-1">Đăng kí</button>
                    </div>
                </div>

                <div class="row nm-row-ct nm-tp-3">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="termsAndConditions">
                        <label class="form-check-label nm-check" for="termsAndConditions">Tôi đồng ý với các <a class="nm-fs-1 nm-fw-bd" href="#">Điều khoản & Điều kiệns</a></label>
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