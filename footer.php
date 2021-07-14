 <footer  class=" background-color:#06335d text-light" style="background-color:#06335d">
        <div   class="container">
            <div class="f-items default-padding">
                <div  class="row">
                    <div class="single-item col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <h4 class="widget-title">About Us</h4>
                            <p>
                                Athenia Medicolegal Consultancy addresses the complex issues on cases where medical and legal worlds collide.
                            </p>
                            
                            <div class="social">
                                <h5>Follow Us:</h5>
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    

                    

                    <div class="single-item col-lg-4 col-md-7  item">
                        <div class="f-item branches">
                            <!--<h4 class="widget-title">Our branches</h4>
                            <div class="branches">
                                <ul>
                                    <li>
                                        <strong>Hospital:</strong> 
                                        <span>Machakos county, Kenya <br> Phone: +254 234 5657 56</span>
                                    </li>
                                    <li>
                                        
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div> 
                    <div class="single-item col-lg-4 col-md-7 item">
                        <div class="f-item link" >
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li>
                                    <a href="index.php" style="color:white">Home</a>
                                </li>
                                
                                <!-- <li>
                                    <a href="blog.php"style="color:white">Blog</a>
                                </li> -->
                                
                                <li>
                                    <a href="about-us.php" style="color:white">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.php" style="color:white">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class=" background-color:#06335d footer-bottom">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <?php function auto_copyright($year = 'auto'){ ?>
   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
<?php } ?>
                        
                        <p>&copy;2019 - <?php auto_copyright();?> <strong>Athenia</strong>.  <a href="#"></a></p>
                    </div>
                    <!-- <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
     
    </footer>