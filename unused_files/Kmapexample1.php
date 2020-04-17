<!DOCTYPE html>
<html>
<head>
	<title>Example_1</title>
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>
<body>

<?php include 'navkmap.php'?>

 <!-- titel page-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Soving Karnaugh Map</h2>
                        <p>Useing TWO varables.. </p>

                         
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Titel page end-->


<br>
	<div class=" container jumbotron bg-info">
	<p><h1><u>Steps to solve K-Map</u></h1></p>
	<ol>
		<li>
			Select K-map according to the number of variables.
		</li>
		<li>
			Identify minterms or maxterms as given in problem.
		</li>
		<li>
			For SOP put 1’s in blocks of K-map respective to the minterms (0’s elsewhere).
		</li>
		<li>
			For POS put 0’s in blocks of K-map respective to the maxterms(1’s elsewhere).
		</li>
		<li>
			Make rectangular groups containing total terms in power of two like 2,4,8 ..(except 1) and try to cover as many elements as you can in one group.
		</li>
		<li>
			From the groups made in step 5 find the product terms and sum them up for SOP form.
		</li>

	</ol>
	</div>

<?php include 'footer.php'?>

 <!-- Scroll to top ' by clicking on samll image' -->
                 <div class="scroll-top">
                    <img src="logo4.png" alt="JSOFT">
                </div>


   <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>


</body>
</html>