<!DOCTYPE html>
<html>
<head>
	<title>online Kmap Converter</title>
 <?php include 'includes/head.php'?>

        <script type="text/javascript">
        var qq = 0;
        class Kmap
        {
            constructor()
            {
               this.input = [];
               this.y = [];
               this.z = [];
               this.ip = [];
               this.A = [];
               this.op = [];
               this.red = [];
               this.v = 0;
               //this.t = 0;
               this.c =0;
               this.d = 0;
               this.cn = 0;
                for(var i = 0; i < 20; i++)
                {
                    this.input[i] = 0;
                    this.y[i] = 0;
                    this.z[i] = 0;
                    this.ip[i] =[];
                    this.A[i] = [];
                    this.op[i] = [];
                    this.red[i] = []; 
                   for(var j = 0; j < 20; j++)
                   {
                     this.ip[i][j] = 0;
                     this.A[i][j] = 0;
                     this.op[i][j] = 0;
                     this.red[i][j] = 0;
                    }
                }
            }//constructor ends

//Function to Get Data from User

            getdata(n)
            {
                var i,j,x;

                for(i = 0;i < Math.pow(2,n);)
                {
                    x = prompt("Enter the input(Only NUMERIC VALUES) to the Kmap (-1 to stop) ");
                    if(x == "")
                    {
                        alert("Please do not enter null values");
                    } 
                    else
                    {
                        x = parseInt(x);

                    for(var k=0;k<Math.pow(2,n);++k)
                    {   
                        if(x==this.input[k] && x!=0)
                        {
                         alert("\n This input is already inserted ! ");
                          x=-2;
                          break;
                        }
                    }
                    if(x<-1 || x>=Math.pow(2,n))
                    {           
                        alert("\n Invalid Input !");
                    }
                    else if (x==-1)
                    {
                        break;
                    }
                    else 
                    {
                        this.input[i]=x;
                        ++this.c;
                        ++i;    
                    }
                    }

                for(i=0;i<this.c;++i)
                {           
                    //this.dectobin(this.input[i]);
                            var s,r = this.input[i]; 
                            var a = [0,0,0,0];

                            for(s = 0 ; r >=1; s++)
                            {                           
                                a[s] =  r % 2;
                                r = Math.floor(r / 2);      
                            }

                            for(var k = this.v-1; k >= 0; k--)
                             {
                                this.ip[i][k] = a[k]; 
                                //document.write(this.A[i][k]+" ");
                             }

                }
                    
                }    
            } // getdata function ends

//Function to Print the data entered by the user

            printdata(v)
            {
                var ch;
                var i,j,output=[];
                var tab = "\t";
                
                for(i=0;i<Math.pow(2,this.v);++i)
                {
                    for(j=0;j<this.c;++j)
                    {   
                        if(i == this.input[j])
                        {   
                            output[i]=1;
                            break;
                        }
                    }
                    if(j==this.c)
                    {
                        output[i]=0;
                    }
                }
                document.write("<br> I");
                ch = 65;
                for(i=0;i<this.v;++i)
                {   
                    var e = String.fromCharCode(ch);
                    ++ch;
                    document.write(e+" ");
                }
                document.write("O");
                for(i=0;i<Math.pow(2,this.v);++i)
                {
                    document.write("<br> "+i+" "+tab);
                    //decimal to binary
                            var s,r = i; 
                            var a = [0,0,0,0];

                            for(s = 0 ; r >=1; s++)
                            {                           
                                a[s] =  r % 2;
                                r = Math.floor(r / 2);      
                            }

                            for(var k = this.v-1; k >= 0; k--)
                             {
                                this.A[i][k] = a[k]; 
                                document.write(this.A[i][k]+" ");
                             }  
                        
                        document.write(" "+tab+" "+output[i]);
                }
            }//printdata ends

//Function to Print Canonical Expression example : AB'C + ABC + A'BC 

            sop(v)
            {
                document.write("<br><b>Canonical Expression (Sum of Products) : </b>");
                var i,j,ch,e;
                for(i = 0; i < this.c ; ++i) //for loop 1
                {
                    ch = 65;    
                    for(j = this.v - 1; j >= 0 ; --j) //for loop 2
                    {
                        if(this.ip[i][j] == 1)
                        {
                            e = String.fromCharCode(ch);
                            document.write(e);
                            ch++;
                        }
                        else
                        {
                            e = String.fromCharCode(ch);
                            document.write(e+"'");
                            ch++;
                        }
                    }//for loop 2 ends

                    if(i<this.c-1)
                    {
                        document.write(" + ");
                    }
                }//for loop 1 ends
            }//sop ends

//Function to Minimize expressions in 1.Single term 2.Pair 3.Quad 4.Octet 

            minimize(a , r)
            {
                var s ,kk = 0, com = [],i,j;
                for(var i = 0; i < 20; i++)//making of 2D array
                {
                    com[i] = [];
                    for(var j = 0; j < 20; j++)
                    {
                       com[i][j] = 0;
                    }
                }

                for(s=0;s<this.d;++s)
                {
                    if(this.isSubset(this.op[s],a,r)==1)
                    break;
                }   
                
                if(s==this.d)
                {  
                    for(i=0;i<r;++i) //for loop 1 
                    {
                        //decimal to binary conversion;
                            var e,q = a[i]; 
                            var qq = [0,0,0,0];

                            for(e = 0 ; q >=1; e++)
                            {                           
                                qq[e] =  q% 2;
                                q = Math.floor(q / 2);      
                            }
                           // document.write(" q = "+qq);
                            for(var k = this.v-1; k >= 0; k--)
                             {
                                com[i][k] = qq[k]; 
                             }
                    }//for loop 1 ends
                
                    for(j=this.v-1;j>=0;--j)//for loop 2 
                    {
                        for(i = 0;i < r; ++i)
                        {
                            if(com[i][j]!=com[0][j])
                            {
                                break;
                            }   
                        }
                        if(i == r)
                        {
                            kk = kk + 1;
                        }
                    }//for loop 2ends
                    if(kk==1 && r==8)
                    {
                        document.write("<br> It is an octet : ");
                        for(var j=0;j<r;++j)
                        {
                            document.write(" "+a[j]);
                        }
                        document.write("<br>");
                        for(j=0;j<r;++j)
                        {
                            this.op[this.d][j]=a[j];
                        }
                        this.y[this.d]=r;
                        ++this.d;
                    }
                    else
                    if(r==4)
                    {
                      if(kk == this.v - 2)
                      {
                        document.write("<br> It is a quad : ");
                        for(var j = 0; j < r ; ++j)
                        {
                            document.write(" "+a[j]);
                        }
                        document.write("<br>");
                        for(j=0;j<r;++j)
                        {
                            this.op[this.d][j]=a[j];
                        }
                        this.y[this.d]=r;
                        ++this.d;
                      }
                    }
                    else
                    if(r==2)
                    {
                       if(kk == this.v - 1)
                       {
                        document.write("<br> It is a pair : ");
                        for( j = 0; j < r ; ++j)
                        {
                            document.write(" "+a[j]);
                        }
                        document.write("<br>");
                        for( j=0 ; j < r ;++j)
                        {
                            this.op[this.d][j]=a[j];
                        }
                        this.y[this.d]=r;
                        ++this.d;
                       } 
                    }
                    else
                    if( r==1)
                    {
                        if(kk == this.v)
                        {
                            document.write("<br> It is single : ");
                            for(j=0;j<r;++j)
                            {
                                document.write(" "+a[j]);
                            }   
                            document.write("<br>");
                            for(j=0;j<r;++j)
                            {
                                this.op[this.d][j]=a[j];
                            }
                            this.y[this.d]=r;
                            ++this.d; 
                        }
                    }
                }//if ends

            }//minimize ends

//Function to print Simplified Expression

            simplify(v)
            {
                if(this.c == Math.pow(2,this.v))
                {
                    document.write("<h4>Simplified expression : 1</h4> ");

                }
                else
                {
                    document.write("<br><h4> Simplified Expression :</h4>");
                var com = [],i,j,kk,ch;
                for(var i = 0; i < 20; i++)//making of 2D array
                {   
                    com[i] = [];
                    for(var j = 0; j < 20; j++)
                    {
                       com[i][j] = 0;
                    }
                }

              this.redun();

                for(i = 0 ; i < this.cn ; ++i)
                 {         
                    for( j = 0 ; j < this.z[i]; ++j)
                    {
                        //decimal to Binary conversion
                        var s,r = this.red[i][j]; 
                        var a = [0,0,0,0];

                            for(s = 0 ; r >=1; s++)
                            {                           
                                a[s] =  r % 2;
                                r = Math.floor(r / 2);      
                            }
                            for(var k = this.v-1; k >= 0; k--)
                             {
                                com[j][k] = a[k];
                             } 
                    }
                    ch = 65;
                    for(j = this.v-1 ;j >= 0; --j)
                    {
                        var e = String.fromCharCode(ch);
                        for(kk = 0; kk < this.z[i]; ++kk)
                        {
                            if(com[kk][j]!=com[0][j])
                            {
                                break;
                            }   
                        }
                        if(kk==this.z[i])
                        {
                            if(com[0][j]==1)
                            {document.write(e);}
                            else
                            {document.write(e+"'");}
                        }
                        ch++;
                    }    
                        if(i<this.cn-1)
                        document.write(" + ");
                 }//simplified expression prints here
                }//else ends
                
            }//simplify ends

//Function to Remove Redundancy in grouping 

            redun()
            {
                var i,j,k, arr = [];
               // document.write("Value of d is : "+this.d);
                for(i = 0; i < this.d; ++i)
                {
                    for(j = 0; j < this.y[i];++j)
                    {
                        arr[0]=this.op[i][j];
                        for(k=0;k<this.d;++k)
                        {
                            if(k!=i)
                            {
                                if(this.isSubset(this.op[k],arr,1)==1)
                                {break;}
                            }
                        }
                        if(k==this.d)
                        {break;}
                    } 
                    if(j != this.y[i])
                    {
                        for( k = 0 ; k < this.y[i] ; ++k)
                        {this.red[this.cn][k]=this.op[i][k];}
                        
                        this.z[this.cn] = this.y[i];
                        this.cn++;   
                       // document.write("Value of cn is : "+this.cn);
                    }   
                }
            }

//Function to Group Elements

            combination(arr , data , start , end , index , r)
            {
                if(index == r)
                {
                    this.minimize(data , r);
                    //return;
                }

                for(var i = start; i <= end && (end - i + 1) >= (r - index); i++)
                {
                    data[index] = arr[i];
                    var g = i+1;
                    this.combination(arr, data, g,end, index+1, r);
                }
            }//combination ends
            
            isSubset(arr1 , arr2 , n)
            {
                for(var i = 0; i < n; ++i)
                {
                    for(var j = 0; j < 8; ++j)
                    {
                        if(arr2[i] == arr1[j])
                        {break;}
                    }
                    if(j==8)
                    {
                        return 0;
                       // break;
                    }
                }   
                return 1;
            }//isSubset ends

            minterms()
            {
                var data = [] , r;

                for(r = 8 ; r >= 1 ; r = Math.floor(r/2) )
                {
                    this.combination(this.input,data,0,this.c-1,0,r);
                }
            }//minterms ends

        }//class ends

        function main()
        {
            var km = new Kmap();
            
            var v = document.getElementById("num1").value;
            km.v = parseInt(v);

            if (v>4)
            {
                alert("Number of variables should not be greater than 4");
            }
            else
            {
                km.getdata(v);
                km.printdata(v);
                km.sop(v);
                km.minterms();
                km.simplify(v);
            }
        }    
            
        </script>

</head>
<body>

<?php include 'includes/navkmap.php'?>

 <!-- titel page-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Karnaugh Map</h2>
                        <h4><p>Try it YourSelf</p></h4>

                         
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Titel page end-->

<br>
	<div class=" container jumbotron bg-light" style="text-align: center;">
	<p><h2>Soving K-map upto 4 variables </h2></p>
    <form style="padding: 2rem;">
       <p><h4>Enter the number of variables : <input type="number" id="num1" required></h4></p>
       <br>     <button class="btn btn-info" onclick="main()">Submit</button> 
    </form>
	</div>
 <?php include 'includes/footer.php'?>
<?php include 'includes/script.php' ?>
</body>
</html>