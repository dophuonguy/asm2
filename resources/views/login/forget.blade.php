@include('login.layouts.head')
<main id="page-content" class="d-flex nm-aic nm-vh-md-100">
		
    <!-- // Form side -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-6 offset-xl-3 nm-st nm-st-md">
                <form>
                    <div class="nm-mb-2 nm-mb-md-2">
                        <h2>Password Reset</h2>
                        <p>Enter your email address and we will send you reset code!</p>
                    </div>
                    
                    <div class="input-group nm-gp">
                        <span class="nm-gp-pp"><i class="fas fa-envelope-open"></i></span>
                        <input type="email" class="form-control" id="inputEmail" tabindex="1" placeholder="Email" required>
                    </div>

                    <div class="row nm-aic nm-mb-2">
                        <div class="col-sm-6 nm-mb-1 nm-mb-sm-0">
                            <span>Have an account? </span><a class="nm-fs-1 nm-fw-bd underline" href="login.html">Log In</a>
                        </div>
                        
                        <div class="col-sm-6 nm-sm-tr">
                            <button type="submit" class="btn btn-primary nm-hvr nm-btn-1">Reset</button>
                        </div>
                    </div>

                    <div class="row nm-row-ct nm-tp-5">
                        <p>
                            © 2020 All Rights Reserved. <a class="heading" href="../index.html" aria-label="Nimoy">NIMOY</a> created by ceosDesigns. <a class="heading" href="#" aria-label="Terms & Conditions">Terms & Conditions</a>, <a class="heading" href="#" aria-label="Privacy">Privacy Settings</a>.
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