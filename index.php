<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

   

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area auto-height">
        <div id="bootcarousel" class="carousel text-light text-small slide animate_text" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                <li data-target="#bootcarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active bg-cover" style="background-image: url(assets/img/pich1.jpg);">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                        	<ul data-animation="animated slideInLeft">
                                            	<li>Personal Injury</li>
                                            	<li>Modern equipment</li>
                                            </ul>
                                            <h2 data-animation="animated slideInDown">Medicolegal <strong>Consultancy</strong></h2>
                                            <a  data-animation="animated fadeInUp" class="btn btn-md btn-info"  href="about-us.php" >Discover More</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-cover" style="background-image: url(assets/img/pich3.jpg);">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                        	<ul data-animation="animated slideInLeft">
                                            	<li>Criminal Cases</li>
                                            	<li>Independent Medical Examinations</li>
                                            </ul>
                                            <h2 data-animation="animated slideInDown">Medicolegal  <strong>Consultancy</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-info" href="about-us.php">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

        </div>
    </div>
    <!-- End Banner -->

     <!-- Start Our About
    ============================================= -->
    <div class="about-area features-area default-padding bg-gray">
        <div class="container">
            <div class="about-items features-item-box">
                <div class="row">
                    <div class="col-lg-5 info">
                        <h5>About Us</h5>
                        <h2>Are you a lawyer, a legal firm or an insurance company dealing with medical cases?</h2>
                        <p>
                            Athenia Medicolegal Consultancy addresses the complex issues on cases where medical and legal worlds collide. Founded by board-certified pathologists, we bring on vast experience in interpreting medical cases both in life and death and court appearances as expert witnesses in forensic cases. 
                        </p>
                        <ul>
                            <li>
                                <div class="info">
                                    <h4>Our Fields include</h4>
                                    <div class="items">
                                        <span>Medical Negligence</span>
                                        <span>Wrongful Death</span>
                                        <span>Criminal Cases</span>
                                        <span>Personal Injury</span>
                                        <span>Medical Examinations</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="assets/img/pich3.5.jpg" alt="Thumb">
                                    </div>
                                    <div class="content-box">
                                        <div class="info-title">
                                            <i class="flaticon-test"></i>
                                            <h4><a href="#">Medical Examinations</a></h4>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Article smiling respect opinion excited. Welcomed humoured rejoiced peculiar to remaining conveying.
                                        </p>
                                        <button type="button" class="btn btn-info"><i class="fa fa-angle-right"></i> Read More </button> 
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                             <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="assets/img/pich2.jpg" alt="Thumb">
                                    </div>
                                    <div class="content-box">
                                        <div class="info-title">
                                            <i class="flaticon-insurance"></i>
                                            <h4>
                                                <a href="#">Criminal Cases</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Article smiling respect opinion excited. Welcomed humoured rejoiced peculiar to remaining conveying.
                                        </p>
                                         <button type="button" class="btn btn-info"><i class="fa fa-angle-right"></i> Read More </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->
    <!-- Start Register Area
    ============================================= -->
    <div class="register-area default-padding">
        <div class="container">
            <div class="register-items">
                <div class="row align-center">
                    
                    <div class="col-lg-6 form text-light">
                        <div class="appoinment-box" style="background-color:#45B0C9">
                            <div class="heading">
                                <h2>Make an Appointment</h2>
                            </div>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="date" name="date" placeholder="Appointment Date" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us More *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 info">
                        <h5>Consultation</h5>
                        <h2>Book an appointment.</h2>
                        <p>
                            Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Timed balls match at by rooms we. Fat not boy neat left had with past here call. Court nay merit few nor party learn.
                        </p>
                        <div class="steps">
                            <ul>
                                <li>
                                    <i class="flaticon-calendar-1"></i>
                                    <h5>Appointment</h5>
                                </li>
                                <li>
                                    <i class="flaticon-test"></i>
                                    <h5>Testing</h5>
                                </li>
                                <li>
                                    <i class="flaticon-heartbeat"></i>
                                    <h5>Consultation</h5>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Register Area -->


    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.099007952871!2d37.010307!3d-1.459041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf61e946b6a51603!2sGreenpark%20Estate!5e0!3m2!1sen!2ske!4v1600767472740!5m2!1sen!2ske"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->

     <!-- Star Footer
    ============================================= -->
   <?php include 'footer.php';?>
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>