<!DOCTYPE html>
<html>
<head>
	<title>Decmial_to_Bin</title>
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

<?php include 'navCode.php'?>

 <!-- titel page-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Decimal To Binary Conversion</h2>
                        <p></p>

                         
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Titel page end-->


<br>
	<div class=" container jumbotron bg-info">
	<p><h1> Decimal to Binary converter </h1></p>
		<h6>
	<ol>
<br><br>
<br><br>Conversion steps:
<br><br>Divide the number by 2..
<br><br>Get the integer quotient for the next iteration.
<br><br>Get the remainder for the binary digit.
<br><br>Repeat the steps until the quotient is equal to 0.
</h6>
<br><h4>Example #1</h4>
<h6>
<br>Convert 1310 to binary:
<br><br>
<table border="5">
    <tr>
        <td>Division by 2 </td>
        <td>Quotient</td>
        <td>Remainder</td>
        <td>Bit #</td>
    </tr>
    <tr>
        <td>13/2</td>
        <td>6 </td>
        <td>1</td>
        <td>0</td>
    </tr>
    <tr>
        <td>6/2</td>
        <td>3 </td>
        <td>0</td>
        <td>1</td>
    </tr>
    <tr>
        <td>3/2</td>
        <td>1 </td>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>1/2</td>
        <td>0 </td>
        <td>1</td>
        <td>3</td>

    </tr>

</table>   
So 1310 = 11012
</h6>


Example #2
Convert 17410 to binary:

Division
by 2    Quotient    Remainder   Bit #
174/2   87  0   0
87/2    43  1   1
43/2    21  1   2
21/2    10  1   3
10/2    5   0   4
5/2 2   1   5
2/2 1   0   6
1/2 0   1   7
So 17410 = 101011102
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