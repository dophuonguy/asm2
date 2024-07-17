<!doctype html>
<html lang="en">

<head>
	@include('login.layouts.head')
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
		@include('login.layouts.register')
		<!-- Form Side // -->

	</main>
	@include('login.layouts.footer')
</body>
</html>