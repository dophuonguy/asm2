	<!-- // Vendor JS files -->
	<script src="{{asset("lg-assets")}}/js/jquery-3.6.0.min.js"></script>
	<script src="{{asset("lg-assets")}}/js/bootstrap.bundle.min.js"></script>
	<!-- Vendor JS files // -->

	<!-- Template JS files // -->
	<script src="{{asset("lg-assets")}}/js/script.js"></script>
	<!-- Template JS files // -->


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
    