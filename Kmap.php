<!DOCTYPE html>
<html>
<head>
	<title>Kmap</title>
	<?php include 'includes/head.php'?>
  	<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;

  }
  </style>
  <style>
  .fakeimg {
    height: 180px;
    background: #aaa;
  }
  </style>

</head>
<body class="">

<?php include'includes/navkmap.php'?>

  <!-- titel page-->
    <section id="page-title-area" class="section-padding overlay";>
        <div class="container" >
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Karnaugh Map</h2>
                        <br>
                        <h5><p>Sometimes it's fine to be in 'dont'n care'condition....
                        <br><br>Helping life's K-map in minimizing the complexity.. </p>

                         </h5>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Titel page end-->


<br>
<br>
	<div class="container jumbotron bg-#4dffa6">
		
			<h2> K-Map (Karnaugh Map) </h2>
			<br>
  <h5>
<p>
  In many digital circuits and practical problems we need to find expression with minimum variables. We can minimize Boolean expressions of 3, 4 variables very easily using K-map without using any Boolean algebra theorems.<br><br> K-map can take two forms Sum of Product (SOP) and Product of Sum (POS) according to the need of problem. K-map is table like representation but it gives more information than TRUTH TABLE. We fill grid of K-map with 0’s and 1’s then solve it by making groups.
</p>
</h5>


	
</div>
	</div>
</div>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <div class="jumbotron "><img src="page_image\digi7.jpg"> </div>
  
      <br>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8 ">
    <div class="jumbotron  " style="text-align: center; line-height: 2; ">
      <p>
        <br>
         <h6>
      <p>Karnaugh maps are useful for detecting and eliminating race conditions.
        <br>Race hazards are very easy to spot using a Karnaugh map,
         because a race condition may exist when moving between any pair of adjacent, but disjoint, regions circumscribed on the map.<br> <br>However, because of the nature of Gray coding, adjacent has a special definition explained above – we're in fact moving on a torus, rather than a rectangle, wrapping around the top, bottom, and the sides.</p>
      </h6>

      </p>
      </div>
     
      <br>
      <br>
     <div class="fakeimg"> <img src="page_image\digi2.jpg"></div>
     <br>
     <h6>

      <p class="jumbotron">Karnaugh maps are used to simplify real-world logic requirements so that they can be implemented using a minimum number of physical logic gates. A sum-of-products expression can always be implemented using AND gates feeding into an OR gate, and a product-of-sums expression leads to OR gates feeding an AND gate. <br> Karnaugh maps can also be used to simplify logic expressions in software design. Boolean conditions, as used for example in conditional statements, can get very complicated, which makes the code difficult to read and to maintain. Once minimised, canonical sum-of-products and product-of-sums expressions can be implemented directly using AND and OR logic operators.<br> Diagrammatic and mechanical methods for minimizing simple logic expressions have existed since at least the medieval times.<br> More systematic methods for minimizing complex expressions began to be developed in the early 1950s, but until the mid to late 1980s the Karnaugh map was the most common used in practice</p>
 </h6>
    <br>
    </div>
    <br>
  </div>
</div>

<?php include 'includes/footer.php'?>
<?php include 'includes/script.php' ?>
</body>
</html>


