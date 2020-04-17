<!DOCTYPE html>
<html>
<head>
	<title>BCD _TO_Excess-3</title>
	 <?php include 'includes/head.php' ?>
</head>
<body>

<?php include 'includes/navCode.php'?>

 <!-- titel page-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Code Converter</h2>
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

<?php include 'includes/footer.php'?>
 <?php include 'includes/script.php' ?>
</body>
</html>