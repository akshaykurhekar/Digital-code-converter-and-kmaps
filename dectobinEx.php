<!DOCTYPE html>
<html>
<head>
	<title>dec to binary</title>
	<?php include 'includes/head.php'?>
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
	<div class=" container jumbotron bg" >
	<h1 style="text-align: center;">Steps to Convert from Decimal to Binary</h1>
    <br><br>
	<ol style=" margin-left: 5rem; line-height: 2rem;">
		<p>If you don't have a calculator to hand, you can easily convert a decimal number to binary using the remainder method. This involves dividing the number by 2 recursively until you're left with 0, while taking note of each remainder.
        <br>
        <br>
        <p >
            
            <li>Write down the decimal number.</li>
            <li>Divide the number by 2.</li>
            <li>Write the result underneath.</li>
            <li>Write the remainder on the right hand side. This will be 0 or 1.</li> 
            <li> Divide the result of the division by 2 and again write down the remainder.</li> 
            <li> Continue dividing and writing down remainders until the result of the division is 0.</li>
            <li>The most significant bit (MSB) is at the bottom of the column of remainders and the least significant bit (LSB) is at the top.</li>
            <li>Read the series of 1s and 0s on the right from the bottom up. This is the binary equivalent of the decimal number.</li> 
          </p>
</p>


	</ol>
	</div>
    <br><br>
   <?php include 'includes/footer.php'?>
<?php include 'includes/script.php' ?>
</body>
</html>