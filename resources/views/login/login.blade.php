<!doctype html>
<html lang="en">

<head>
    @include('login.layouts.head')
</head>
<body>
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
				@include('login.layouts.main')
			</div>
		</div>

	</main>
	<!-- // link js // -->
	@include('login.layouts.footer')
</body>
</html>