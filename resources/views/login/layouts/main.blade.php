<div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-6 offset-xl-3 nm-st nm-st-md">
    @if ($message = Session::get('error'))

        <div class="alert alert-danger alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>	

                <strong>{{ $message }}</strong>

        </div>

    @endif
    <form method="POST">
        @csrf
                    <div class="nm-mb-2 nm-mb-md-2">
                        <h2>Đăng nhập đến <a class="heading" href="{{ route('index') }}" aria-label="Nimoy">READER</a></h2>
                        <p>Tài khoản mới ? <a class="nm-fs-1 nm-fw-bd underline" href="{{ route('register') }}">Thêm mới tài khoản</a></p>
                    </div>
                    
                    <div class="input-group nm-gp">
                        <span class="nm-gp-pp"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" id="inputUsername" tabindex="1" placeholder="Username" name="name" required>
                    </div>
                    
                    <div class="input-group nm-gp">
                        <span class="nm-gp-pp"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="inputPassword" tabindex="2" placeholder="Password" name="password" required>
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
                            <button type="submit" class="btn btn-primary nm-hvr nm-btn-1">Đăng nhập</button>
                        </div>
                    </div>
    
                    <div class="row nm-row-ct nm-tp-3">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label nm-check" for="rememberMe">Keep me logged in</label>
                        </div>
                    </div>
    
                    <div class="row nm-row-ct">
                        <a class="nm-fs-2 nm-fw-bd" href="{{ route('forget') }}">Quên mật khẩu?</a>
                    </div>
    
                    <div class="row nm-row-ct nm-tp-5">
                        <p>
                            © 2020 All Rights Reserved. <a class="heading" href="../index.html" aria-label="Nimoy">READER</a> created by ceosDesigns. <a class="heading" href="#" aria-label="Terms & Conditions">Terms & Conditions</a>, <a class="heading" href="#" aria-label="Privacy">Privacy Settings</a>.
                        </p>
                    </div>
    </form>
</div>
