<!DOCTYPE html>
<html>
    <head>
        <title>Code Converter(dec_bin)</title>
<link rel="stylesheet" type="text/css" href="styl.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

 <script type="text/javascript">

 function func()
        {
            var num = document.getElementById("text1").value;
            var a = [] , i ;
            var result = 0;
      
             for(i = 0 ; num >= 1; i++)
             {
                     a[i] = num % 2;
                 num = Math.floor(num / 2); 
            }
            
            for(i = i - 1 ; i >= 0 ; i--)
            {
               
             result += a[i]*10**i ;
  document.getElementById("text2").value = result;
            }
           
        }
            
    </script>


     <body class="">
  
        <nav class="navbar sticky-top bg-dark ">
<div class="container">
  <ul class=" nav navbar-nav ">
    <li><a href="http://localhost/amk/Kmap.php"><h3>Kmap</h3></a></li>
  </ul>

<ul class=" nav navbar-nav ">
  <li><a href=""><h3>Trigonometric</h3></a></li>
</ul>
<ul class=" nav navbar-nav ">
  <li><a href=""><h3>Intgration</h3></a></li>
</ul>
<ul class=" nav navbar-nav ">
  <li><a href=""><h3>Diffranction</h3></a></li>
</ul>
</div>
</nav>

<!--Carousel -->
<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="decimal1.png" alt="Los Angeles" width="1100" height="400">
       <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="7aa4.jpg" alt="Chicago" width="1100" height="400">
       <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="aa3.jpg" alt="New York" width="1100" height="400">
       <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<br>
<br>
      <div class=" container jumbotron bg - #c1d7d7">
        
           <p>Enter the Decimal Number: <input id="text1" placeholder = "number"> 
             Binary Code is :  <input type ="text" id="text2" name="text2"/>
           </p>
           <br>       

 <button onclick="func()" class="btn btn-info">Submit</button>
          

      </div>

                        
        </body>
</html>