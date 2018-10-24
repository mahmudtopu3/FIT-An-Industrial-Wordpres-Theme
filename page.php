<?php  wp_head();      ?>
<?php global $fit;?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.css">
<!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
<!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome-animate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/custom.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/gallery.css">

<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->


<div class="container-fluid gal">
   
    <div class="well well-sm text-center">
       
        <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Fair Insulation Technology</a></h2>
        <p>Our <?php echo $_SERVER['HTTP_HOST'];?></p>
        

    </div>
    <!--Image Thumbnails With Hover Effect With Button-->
    <div class="col-sm-12">
        <div class="col-sm-4 img">
            <img src="<?php echo get_template_directory_uri();?>/images/img.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text"><button onclick="on()" class="btn btn-info">Click Here</button></div>
            </div>
        </div>
    </div>
    <!--Image Description after click on the button-->
    <div class="col-md-12">
        <div id="OverlayTextDiv" onclick="off()">
            <div id="OverlayText">
                <div class="col-md-12 ">
                    <button onclick="off()" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span></button>
                </div>
                <div class="col-md-12">
                    <img src="<?php echo get_template_directory_uri();?>/images/img.jpg" alt="Avatar" class="img img-responsive">
                </div>
                <div class="col-md-12 ">
                    <p class="pull-left"><span class="glyphicon glyphicon-tag"></span> This is a text</p>
                    <p class="pull-right"><span class="glyphicon glyphicon-time"></span> 31st Oct,2017</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function on() {
        document.getElementById("OverlayTextDiv").style.display = "block";

    }

    function off() {
        document.getElementById("OverlayTextDiv").style.display = "none";
    }

</script>



<!-- map -->
<div class="map ">
    <img src="<?php echo get_template_directory_uri();?>/images/map.jpg" alt="" class="img img-responsive  ">
    <div class="map-pos">
        <h3>ADDRESS</h3>
        <p>
            <?php echo $fit['location'];?>
        </p>

        <p>Call :
            <?php echo $fit['contact_no'];?>
        </p>
        <p>
            <a href="mailto:<?php echo $fit['email'];?>">
                <?php echo $fit['email'];?>
            </a>
        </p>
    </div>
</div>
<!-- //map -->

<!--Trusted Banks-->
<!--

        <div class="container">
            <h2 style="color:#e74c3c" class="text-center">Where Trust Ties Bonds <i style="color:#34495e" class="fa fa-handshake-o faa-flash animated"></i></h2>
            <div class="divider"></div>
            <div class="col-md-12 ">
                <div class="owl-carousel">
                    <div class="col-md-12 testimonial-img">
                        <img src="images/islami-bank.jpg" alt="Uttara Bank" class="img img-responsive ">
                    </div>
                    <div class="col-md-12 testimonial-img">
                        <img src="images/islami-bank.jpg" alt="Uttara Bank" class="img img-responsive ">
                    </div>
                    <div class="col-md-12 testimonial-img">
                        <img src="images/islami-bank.jpg" alt="Uttara Bank" class="img img-responsive ">
                    </div>
                    <div class="col-md-12 testimonial-img">
                        <img src="images/islami-bank.jpg" alt="Uttara Bank" class="img img-responsive ">
                    </div>
                    <div class="col-md-12 testimonial-img">
                        <img src="images/islami-bank.jpg" alt="Uttara Bank" class="img img-responsive ">
                    </div>



                </div>
            </div>
        </div>


        <div class="clearfix divider"></div>
-->
<!--
	             <div class="col-md-3 testimonial-img">
                         <img src="images/islami-bank.jpg" alt="Uttara Bank" class="img img-responsive ">
                     </div>
-->

<!--//Trusted Banks-->
<!-- //main -->

<!-- Footer -->
<div class="footer w3ls">
    <div class="container">

        <div class="contact" id="contact">

            <h3 class="w3_tittle">Contact Us</h3>
            <div class="contact-grid1">
                <div class="contact-top1">

                    <!--
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="Name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="E-mail" placeholder="E-mail" required="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea placeholder name="Message" required=""></textarea>
                                </div>
                                <input type="submit" value="Send">
-->
                    <?php echo do_shortcode('[contact-form-7 id="42" title="Untitled"]');?>





                </div>
            </div>

        </div>



        <div class="logo-fo">
            <h2><a href="index.html">Fair Insulation Technology</a></h2>
        </div>
        <div class="ftr-menu">
            <ul>
                <li><a class="scroll" href="#home">Home </a></li>
                <li><a class="scroll" href="#pc-about">About</a></li>
                <li><a class="scroll" href="#all-products">Products</a></li>
                <li><a class="scroll" href="#services">Services</a></li>
                <li><a class="scroll" href="#gallery">Gallery</a></li>
                <li><a class="scroll" href="#contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="w3ls-social-icons-2">
            <a class="facebook" href="<?php echo $fit['facebook'];?>"><i class="fa fa-facebook"></i></a>
            <a class="twitter" href="<?php echo $fit['twitter'];?>"><i class="fa fa-twitter"></i></a>
            <a class="tumblr" href="<?php echo $fit['youtube'];?>"><i class="fa fa-youtube"></i></a>


        </div>










        <div class="clearfix"> </div>
    </div>
</div>


<?php  wp_footer(); get_footer(); ?>
