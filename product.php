<?php  wp_head();     
/* Template Name: Product
 */

?>
<?php       wp_head();      ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fair Insulation Technology</title>
    <!-- Meta tag Keywords -->

    <meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <script type="text/javascript">
        $(function() {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
                var ww = ($(window).width() < window.screen.width) ? $(window).width() : window.screen.width; //get proper width
                var mw = 480; // min width of site
                var ratio = ww / mw; //calculate ratio
                if (ww < mw) { //smaller than minimum size
                    $('#Viewport').attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + ww);
                } else { //regular size
                    $('#Viewport').attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
                }
            }
        });

    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Fair Insulation Technology is the standard and high level Sandwitch Panel maker in Bangladesh with lates technology which confirms the stablity and efficiency at high level . " />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
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


    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
    <?php while ( have_posts() ) : the_post(); ?>
    <style>
        .w3l-event-grid a img {
            width: 100%;
            height: 250px;
        }

    </style>
    <?php endwhile;?>
</head>

<body>
    <div class="wrapper">


        <div class="Main-agile ">

            <!-- banner -->
            <div class="agile-top">
                <div class="search">
                    <!--
                    <input class="search_box" type="checkbox" id="search_box">
                    <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                    <div class="search_form">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search Here......." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
-->
                </div>
                 <div class="ph-agile section-pc hederinfo">
                    <p><i class="fa fa-phone" aria-hidden="true"></i><span><?php echo $fit['contact_no'];?></span>&nbsp;<a href="mailto:<?php echo $fit['email'];?>" target="_top"><i class="fa fa-envelope " aria-hidden="true"></i> Send Mail </a></p>
                </div>
                <div class="clearfix"></div>

                <div class="sub-agile">
                    <div class="col-md-4 logo section-pc">
                        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Fair Insulation Technology</a></h1>

                    </div>

                    <div class="col-md-8 nav-w3l">
                        <!-- navigation -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ta-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                        <div class="header-right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-left">
                                    <li class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>


                                    <li><a href="#contact" class="link link--yaku scroll"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span> <span>U</span><span>S</span></a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <!-- //navigation -->
                        </div>


                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>

            <!-- banner-text -->
            <div class="slider section-pc">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="w3layouts-banner-top banner">
                                <div class="w3l-overlay">
                                    <div class="container">
                                        <div class="agileits-banner-info">


                                            <h4>Our Products Which Can Impress You</h4>
                                            <h3>
                                                Fair Insulaiton Technology
                                            </h3>
                                            <h4>We Are Hopefull To Work Together</h4>


                                            <h5><a href="#news" class="view rew3  yaku scroll"><span class="glyphicon glyphicon-circle-arrow-down faa-flash animated" aria-hidden="true"></span>Scroll Down</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="clearfix"> </div>
                <!-- //banner-text -->
                <div class="header section-pc">
                    <div class="social-w3">
                        <div class="main">
                            <ul>
                                <li class="f1">
                                    <a href="<?php echo $fit['facebook'];?>" class="hvr-grow"><i class="fa fa-facebook " aria-hidden="true"></i></a>
                                </li>
                                <li class="f2">
                                    <a href="<?php echo $fit['youtube'];?>" class="hvr-grow"><i class="fa fa-youtube " aria-hidden="true"></i></a>
                                </li>
                                <li class="f3">
                                    <a href="<?php echo $fit['twitter'];?>" class="hvr-grow"><i class="fa fa-twitter " aria-hidden="true"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <br>
        <!--Mobile Version Header-->

        <div class="container-fluid section-mobile">
            <div class="row">
                <div class="col-md-12 ">
                    <br>
                    <br>
                    <div class="divider"></div>
                    <div class="text center">
                        <br>
                        <h2 class="text-center mobile-title">Fair Insulation Technology</h2>

                        <h3 class="text-center mobile-slogan">We Are Hopefull To Work Together</h3>
                        <h2 class="text-center mobile-slogan">

                        </h2>



                    </div>
                </div>
                <div class="clearfix divider"></div>



            </div>
        </div>
        <?php 
				 $item = new WP_Query(array(
				  'post_type' => 'main_product'	  
				 ));
				 ?>

        <!-- News -->
        <div class="events-w3l" id="news">
            <div class="container">
                <div class="team-w3l">
                    <h3 class="w3_tittle">Our Products </h3>
                </div>



                <div class="w3l-event-grids">
                    <?php if ( $item->have_posts() ) : ?>

                    <?php while ( $item ->have_posts() ) :$item -> the_post(); ?>
                    <div class="col-md-4 col-sm-4 w3l-event-grid">
                        <br>
                        <div class="w3l-event-img">
                            <a href="<?php the_permalink();?>" class="rew3" data-toggle="modal"><img src="<?php the_post_thumbnail_url();?>" alt=""  class="img img-responsive"/></a>

                        </div>

                        <div class="news-grid-info">
                            <a href="<?php the_permalink();?>" class="rew3">
                                <?php the_title();?>
                            </a>
                            <p>
                                <?php  echo get_post_meta( get_the_ID(), 'fitmeta_highlight', true )?>
                            </p>

                            <a href="<?php the_permalink();?>" class="view new-w3"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Read More</a>
                            <a href="#" class="view new-w3" data-toggle="modal" data-target="#<?php echo get_the_ID();?>"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Watch Video</a>
                            <br>
                        </div>
                    </div>

                    <?php endwhile; endif; ?>

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>


        <?php if ( $item->have_posts() ) : ?>

        <?php while ( $item ->have_posts() ) :$item -> the_post();
        
       
        ?>

        <!-- Modal1 -->
        <div class="modal fade" id="<?php echo get_the_ID();?>" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-eye-close" data-dismiss="modal"></button>
                        <h4>
                            <?php the_title();?>
                        </h4>
                        
                        <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
                            <strong>Notice!</strong> Please Stop video First Before Closing The Window.
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $url = esc_url( get_post_meta( get_the_ID(), 'fitmeta_video', 1 ) ); echo wp_oembed_get( $url );?>
                        </div>



                    </div>
                </div>

            </div>
        </div>
        <!-- //Modal1 -->

        <?php endwhile; endif; ?>



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
                            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact"]');?>





                        </div>
                    </div>

                </div>



                <div class="logo-fo">
                    <h2><a href="index.html">Fair Insulation Technology</a></h2>
                </div>
                <div class="ftr-menu">
                    <ul>

                        <li><a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home </a></li>
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
        <script type="text/javascript">
            $("#myModal").on('hidden.bs.modal', function(e) {
                $("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));
            });

        </script>

        <?php  wp_footer(); get_footer(); ?>
