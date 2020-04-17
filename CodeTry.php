<!DOCTYPE html>
<html>
    <head>
        <title>online Code Converter</title>
<?php include 'includes/head.php'?>
    </head>
 
    <script type="text/javascript">
    

        function main()
        {
            var f = document.getElementById("text1").value;
            f = parseInt(f);
                dectobin(f);
            }


        function ex3tobcd(z)
        {   
            var  result2 = 0;
            var b = [0,0,0,0,0,0,0] ,j,x;

            if(z >= 3 && z <= 12)
            {
                for(j = z - 3,x = 0; j >=1; j = Math.floor(j/2) , ++x)
                {
                 b[x] = j % 2;
                }


                for(x = 3 ; x >= 0 ; --x )
                {
                   // document.write(" "+b[x]);
                          result2 += b[x]*10**x ;
  document.getElementById("text6").value = result2;
                }
            }
            else
            {   
                result2 = " X X X X" ;
                document.getElementById("text6").value = result2;

     /*          for(x = 3 ; x >= 0 ; --x)
              {
                 // document.write("X");
                          result += a[i]*10**i ;
  document.getElementById("text2").value = result;
               }*/
            }
        }

        function bcdtoex3(z)
        {   
            var result = 0;
            var b = [0,0,0,0,0,0,0] ,j,r,x;

            if(z <= 9)
            {
                for(j = z + 3,x = 0; j >=1; j = Math.floor(j/2) , ++x)
                {
                 b[x] = j % 2;
                }

                for(x = 3 ; x >= 0 ; --x )
                {
                   // document.write(" "+b[x]);
                          result += b[x]*10**x ;
                document.getElementById("text5").value = result;
                }
            }
            else
            {   
                 result = " X X X X" ;
                document.getElementById("text5").value = result;

           /*   for(x = 3 ; x >= 0 ; --x)
              {
                  document.write("X");
              }
                */
            } 
        }

        function graytobin(a,c)
        {   
            var result = 0;
            var b = [0,0,0,0,0,0,0] ,i,r;
            b[c] = a[c];
            r=b[c];

            for(i = c - 1 ; i >= 0 ; --i)
            {
                r = r^a[i];
                b[i] = r;
            }
            for(i = c ; i >= 0 ; --i)
            {
               // document.write(" "+b[i]);
                      result += b[i]*10**i ;
  document.getElementById("text4").value = result;
            }
        }

        function bintogray(a,c)
        {   
            var result1 = 0;
            var b = [0,0,0,0,0,0,0,0,0] ,i;
            b[c] = a[c];

            for ( i = c-1 ; i >= 0 ; --i)
            {
                b[i] = a[i]^a[i+1];
            }

            for(i = c ; i >= 0 ; --i)
            {
                //document.write(" "+b[i]);
                       result1 += b[i]*10**i ;
  document.getElementById("text3").value = result1;
            }
        }
        
         function dectobin(z)
         {
             var a = [0,0,0,0,0,0,0,0]; 
             var i , n;
             var t = z;
              var result = 0;
            for(i = 0 ; z >=1; i++)
             {
                 a[i] = z % 2;
                 z = Math.floor(z / 2); 
             }

             if(t<8)
             {
                n = 4;
             }
             else
             {
                n = i+1;
             }
             
            for(i = n - 1 ; i >= 0 ; --i)
            {
               // document.write(" "+a[i]);
                   result += a[i]*10**i ;
  document.getElementById("text2").value = result;
            }
            
             bintogray(a,n-1);
         
             graytobin(a,n-1);
           
             bcdtoex3(t);
           
             ex3tobcd(t);        
         }


    </script>
   <body>

<?php include'includes/navcode.php'?>


            <!-- titel page-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>CODE CONVERTERS</h2>
                        <P>Try It yourSelf</P>
                        <p> Advancing in Techonlogy.... Digital World</p>

                         
                        <p></p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>

<br>
<br>
   	<div class="container">
    
    <div class="jumbotron bg-#99ff99" style="line-height: 2rem;">
      
          <form><h2><center> INPUT</center></h2>
          <br>
            <p><h3><center>Enter value in Decimal : <input id = "text1" type="number"></center></h3></p>
            <br>
            <h2> <center> <input class="btn btn-info" type="button" onclick="main()"  value = "OUTPUT"></center>    </h2>
            <br>
            <p><h4><center>Decimal to Binary :</center><center> <input id = "text2" readonly></center></h4></p>
            <p><h4><center>Binary  to Gray   :</center><center> <input id = "text3" readonly></center></h4></p>
            <p><h4><center>Gray to Binary    :</center><center><input id = "text4" readonly></center></h4></p>
            <p><h4><center>BCD to Excess-3   :</center><center> <input id = "text5" readonly></center></h4></p>
            <p><h4><center>Excess-3 to BCD   :</center><center> <input id = "text6" readonly></center></h4></p>
            <br>
           
           </form>
    </div>
  </div>
<br>
    <br>
<br>
 <?php include 'includes/footer.php'?>
<?php include 'includes/script.php' ?>
</body>
</html>