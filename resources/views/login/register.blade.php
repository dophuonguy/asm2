<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login and Register Form HTML Template - developed by 'ceosdesigns' - sold exclusively on 'themeforest.net'">
	<meta name="author" content="ceosdesigns.sk">
    <title>register</title>
	<link href="images/favicon.png" rel="icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;display=swap" rel="stylesheet">
	<link href="{{asset("lg-assets")}}/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" rel="stylesheet">
	<link href="{{asset("lg-assets")}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset("lg-assets")}}/css/styles.css" rel="stylesheet">
</head>
<body>
	<!-- // Preloader -->
	<div id="nm-preloader" class="nm-aic nm-vh-md-100">
		<div class="nm-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- Preloader // -->

	<main id="page-content" class="d-flex nm-aic nm-vh-md-100">
		
		<!-- // Form side -->
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-6 offset-xl-3 nm-st nm-st-md">
					<form action="" method="POST">
						@csrf
						<div class="nm-mb-2 nm-mb-md-2">
							<h2>Create your free account now!</h2>
							<p>Already have an account? <a class="nm-fs-1 nm-fw-bd underline" href="{{ route('login') }}">Log In</a></p>
						</div>
						
						<div class="input-group nm-gp">
							<span class="nm-gp-pp"><i class="fas fa-user"></i></span>
							<input type="text" class="form-control" id="inputUsername" tabindex="1" placeholder="Username" name="name" required >
						</div>

						<div class="input-group nm-gp">
							<span class="nm-gp-pp"><i class="fas fa-envelope-open"></i></span>
							<input type="email" class="form-control" id="inputEmail" tabindex="2" placeholder="Email" name="email" required >
						</div>
						
						<div class="input-group nm-gp">
							<span class="nm-gp-pp"><i class="fas fa-lock"></i></span>
							<input type="password" class="form-control" id="inputPassword" tabindex="3" placeholder="Password" name="password" required>
						</div>

						<div class="row nm-aic nm-mb-2">
							<div class="col-sm-6 nm-mb-1 nm-mb-sm-0">
								<span class="nm-fs-1 nm-tm">Show password</span>
								<label class="nm-sw-pd">
									<input type="checkbox" id="toggle-password" class="d-none">
									<span class="slider round"></span>
								</label>
							</div>
							
							<div class="col-sm-6 nm-sm-tr">
								<button type="submit" class="btn btn-primary nm-hvr nm-btn-1">Log In</button>
							</div>
						</div>

						<div class="row nm-row-ct nm-tp-3">
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="termsAndConditions">
								<label class="form-check-label nm-check" for="termsAndConditions">I agree to the <a class="nm-fs-1 nm-fw-bd" href="#">Terms & Conditions</a></label>
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

	</main>
	<script src="{{asset("lg-assets")}}/js/jquery-3.6.0.min.js"></script>
	<script src="{{asset("lg-assets")}}/js/bootstrap.bundle.min.js"></script>

	<script src="{{asset("lg-assets")}}/js/script.js"></script>
	<script>
		let tmpLocation = window.location.href;
		let tmpEndLocation = tmpLocation.split("../../index.html");
		let targetLocation = tmpEndLocation[tmpEndLocation.length-1];
		targetLocation = targetLocation.replace(".html","").replace("#", "");
		let targetLocationArray = [];

		if(targetLocation.includes("_")){
			targetLocationArray = targetLocation.split("_");
			targetLocationArray[1] = "_" + targetLocationArray[1];
		}
		else {
			targetLocationArray[0] = targetLocation;
			targetLocationArray[1] = "";
		}

		let l = document.links;
		for(let i=0; i<l.length; i++) {
			let tmp = l[i].attributes.href.nodeValue;
			l[i].attributes.href.nodeValue = tmp.replace("recover","recover" + targetLocationArray[1]).replace("login","login" + targetLocationArray[1]).replace("signup","signup" + targetLocationArray[1]);
		};
	</script>
</body>
</html>