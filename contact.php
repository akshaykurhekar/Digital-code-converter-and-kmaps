    
<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    <?php include 'includes/head.php' ?>
</head>
<body class="">
  
        <?php include 'includes/nav.php' ?>

            <!-- titel page-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Contact Us</h2>
                        <!--span class="title-line"><i class="fa fa-car"></i></span-->
                        <p> Fill the below details</p>

                         
                        <p></p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>


      <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action=" contactinfo.php " method="POST" autocomplete="off" >
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text"  name="name" placeholder="Full Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="website-input">
                                        <input type="text" name="college" placeholder="College Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="text" name="number" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="message-input">
                               <textarea  name="message" cols="30" rows="10" placeholder=" Message " required></textarea>
                            
                            </div>

                            <div class=" input-submit">
                                <button type="submit" name="submit" >Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php include 'includes/footer.php' ?>
     <?php include 'includes/script.php' ?>
</body>
</html>
