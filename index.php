<?php get_header();       wp_head();      ?>
<?php global $fit;?>

<style>
    
    
.banner {
    
    background: url(<?php  echo $fit['bimage11']['url']?>) no-repeat 0px 0px;
      background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 848px;
 
} 
    .banner-2 {
    
    background: url(<?php  echo $fit['bimage21']['url']?>) no-repeat 0px 0px;
      background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 848px;
 
} 
      .section-mobile {
        display: block;
        background: url(<?php  echo $fit['bimage11']['url']?>) no-repeat 0px 0px;     
          background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
          display: none;
    }
    @media(max-width: 768px) {
         .section-mobile {
          display: block;
             
    }
        .section-pc{
            display: none;
        }
        
    }
    
</style>
 
<!-- banner-text -->
<div class="slider section-pc">
    <div class="callbacks_container">
        <ul class="rslides callbacks callbacks1" id="slider4">
            <li>
                <div class="w3layouts-banner-top banner">
                    <div class="w3l-overlay">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h4><?php  echo $fit['btext11'];?></h4>
                                <h3><?php  echo $fit['btext12'];?></h3>
                                <h4><?php  echo $fit['btext13'];?></h4>
                                <h5><a href="#products" class="view rew3  yaku scroll"><span class="glyphicon glyphicon-circle-arrow-down faa-flash animated" aria-hidden="true"></span>Scroll Down</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top banner-2">
                    <div class="w3l-overlay">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h4><?php  echo $fit['btext21'];?></h4>
                                <h3><?php  echo $fit['btext22'];?></h3>
                                <h4><?php  echo $fit['btext23'];?></h4>
                                <h5><a href="#products" class="view rew3  yaku scroll"><span class="glyphicon glyphicon-circle-arrow-down faa-flash animated " aria-hidden="true"></span>Scroll Down</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
    <!-- //banner-text -->
</div>

<div class="header section-pc w3l-overlay2">
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



<!--Mobile Version Header-->

<!--Mobile Banner-->

<div class="container-fluid section-mobile">
    <div class="row">
        <div class="col-md-12 ">
            <div class="text center">
                <br>
                <h2 class="text-center mobile-title">Fair Insulation Technology</h2>
                <h3 class="text-center mobile-slogan">Sandwitch Panel Manufacturer & Heat Proof Steel Building System</h3>
            </div>
        </div>
        <div class="clearfix divider"></div>
        <div class="col-md-12">
            <div class="owl-carousel">
                
                <div class="col-md-12 testimonial-img">
                    <img src="<?php  echo $fit['bimage11']['url'];?>" alt="Factory Factory" class="img img-responsive ">
                    <p class="text-center"><?php  echo $fit['btext11'];?></p>
                </div>
                    <div class="col-md-12 testimonial-img">
                    <img src="<?php  echo $fit['bimage21']['url'];?>" alt="Factory Factory" class="img img-responsive ">
                    <p class="text-center"><?php  echo $fit['btext21'];?></p>
                </div>
                


            </div>
        </div>
        <div class="clearfix divider"></div>

    </div>
</div>

<!--Mobile Banner-->

<!--Mobile About Section-->

<div class="clearfix divider"></div>
<!--//Mobile About Section-->
                    <?php 
                             $about_us = new WP_Query(array(
                              'post_type' => 'about_us',
                               'posts_per_page' =>1	  

                             ));
                             ?>
<!-- About -->
<div class="content-agileits" id="pc-about">
    <div class="welcome-w3">
        <div class="container">
   <?php if ( $about_us->have_posts() ) : ?>
                <?php while ( $about_us ->have_posts() ) :$about_us -> the_post(); 
                        
                        
                        ?>
            <div class="welcome-grids ">
                <div class="col-md-5 wel-grid1 section-pc">
                    <div class="port-7 effect-2">
                        <div class="image-box">
                            <img src="<?php the_post_thumbnail_url()?>" alt="Image-2">
                        </div>
                        <div class="text-desc">
                            <h4>Fair Insulation Technology</h4>
                            <p>Ensures Quality With Trust</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wel-grid section-pc">
                    <h4>Little bit about us</h4>
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'company')" id="defaultOpen">Company Details</button>
                        <button class="tablinks" onclick="openCity(event, 'typeB')">Types of Business</button>
                        <button class="tablinks" onclick="openCity(event, 'country')">Countries From We Import</button>
                    </div>

                    <div id="company" class="tabcontent">
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Trade License No. <?php echo $fit['trade'];?>. </p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> TIN No. <?php echo $fit['tin'];?></p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> VAT Registration No. <?php echo $fit['vat'];?></p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Owership Type: <?php echo $fit['owner_type'];?>. </p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> No. of employees: <?php echo $fit['employee_no'];?>. </p>
                    </div>

                    <div id="typeB" class="tabcontent">
                        <p><i class="fa fa-list" aria-hidden="true"></i> <?php echo $fit['type1'];?></p>
                        <p><i class="fa fa-list" aria-hidden="true"></i> <?php echo $fit['type2'];?></p>
                        <p><i class="fa fa-list" aria-hidden="true"></i> <?php echo $fit['type3'];?></p>
                        <p><i class="fa fa-list" aria-hidden="true"></i> <?php echo $fit['type4'];?></p>
                        <p><i class="fa fa-list" aria-hidden="true"></i> <?php echo $fit['type5'];?></p>
                    </div>

                    <div id="country" class="tabcontent col-md-12">
                       <?php foreach($fit['country'] as $single_value):?>
                        <div class="col-md-2">
                            <p><img src="<?php echo $single_value['image'];?>" alt=""> <?php echo $single_value['title'];?></p>
                            
                        </div>
                     <?php endforeach;?>


                    </div>
                    <br>
                    <p><i class="fa fa-cog 
                                 faa-spin animated " aria-hidden="true"></i> We've started our journey in 2010 at Gazipur,Dhaka with the aim to deliver maximum quality by ebsuring highest quality products .</p>
                    <h5><a href="<?php the_permalink(); ?>" class="view rew3"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>More About Us</a>
                        <a href="#" class="view rew3" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Watch How Sandwitch Panel Works</a></h5>
                </div>

                <div class="mobile-link">



                    <div class="clearfix"></div>
                    <h3 class="text-center">About Us</h3>
                    <div class="clearfix divider"></div>
                    <button class="accordion">Company Details</button>
                    <div class="panel">
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Trade License No. <?php echo $fit['trade'];?></p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> TIN No. <?php echo $fit['tin'];?></p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> VAT Registration No.<?php echo $fit['vat'];?></p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Owership Type: <?php echo $fit['owner_type'];?>. </p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> No. of employees: <?php echo $fit['employee_no'];?>. </p>
                    </div>

                    <button class="accordion">Types of Businsess</button>
                    <div class="panel">
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?php echo $fit['type1'];?>. </p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?php echo $fit['type2'];?>. </p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?php echo $fit['type3'];?>. </p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?php echo $fit['type4'];?>. </p>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?php echo $fit['type5'];?>. </p>
                    
                    </div>

                    <button class="accordion">Countries From We Import</button>
                    <div class="panel">
                       <?php foreach($fit['country'] as $single_value2):?>
                        <p class=""><img src="<?php echo $single_value2['image'];?>" alt=""> &nbsp;<?php echo $single_value2['title'];?></p>
                     <?php endforeach;?>

                    </div>
                    <div class="col-sm-12 text-justify">
                        <p><i class="fa fa-cog 
                                     faa-spin animated " aria-hidden="true"></i> We've started our journey in 2010 at Gazipur,Dhaka with the aim to deliver maximum quality by ebsuring highest quality products .</p>

                        <h6><a href="<?php the_permalink();?>" class="view rew3"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>More About Us</a>
                            <a href="#" class="view rew3" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Watch How Sandwitch Panel Works</a></h6>
                        <br>
                    </div>
                </div>
            </div>
            <?php  endwhile; endif;?>
        </div>
    </div>
</div>










<!-- //About End -->









<!--Video Tab-->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4>Rockwool SANDWITCH PANEL</h4>
                <span> 
                            <iframe class="mobile-video" width="560" height="315" src="https://www.youtube.com/embed/FmFCDXW2ssM" frameborder="0" allowfullscreen></iframe>

                            </span>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4>EPS SANDWITCH PANEL</h4>
                <span> 
                            <iframe class="mobile-video" width="560" height="315" src="https://www.youtube.com/embed/V32eP6G89ng" frameborder="0" allowfullscreen></iframe>

                            </span>
            </div>
        </div>

    </div>
</div>
<!--Video Tab-->










<!-- //Modal5 -->

<!-- //banner -->
<!-- main -->










<!-- Products -->
<div class="container mobile-product" id="all-products">
    <div class="row">
        <div class="col-md-12 ">
            <div class="clearfix divider"></div>
            <h2 class="text-center " id="products" style="color:#e74c3c">Our Products</h2>
            <h3 class="text-center">"First Time 4 Type Sandwitch Panel Manufacturer In Bangladesh"</h3>
            <div class="clearfix divider"></div>
        </div>

    </div>
</div>

<div class="content-agileits main-product">
    <?php 
                             $main_product_query = new WP_Query(array(
                              'post_type' => 'main_product'                             ));
                             ?>
        
        
        <?php if ( $main_product_query->have_posts() ) : ?>

        <?php while ( $main_product_query ->have_posts() ) :$main_product_query -> the_post();
        
       
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


    <br>
    <div class="welcome-w3">
        <div class="container">
            <div class="welcome-grids">
                <!--First Produtct-->


                <?php if ( $main_product_query->have_posts() ) : ?>
                <?php while ( $main_product_query ->have_posts() ) :$main_product_query -> the_post(); 
                        
                           $select_value1 = get_post_meta( get_the_ID(), 'pro_num', true );
                           if ( 'one' === $select_value1 ):
                        
                        ?>
                <div class="col-md-5 wel-grid1">
                    <div class="port-7 effect-2">
                        <div class="image-box">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Image-2" class="img img-responsive">
                        </div>
                        <div class="text-desc">
                            <h4>
                                <?php the_title(); ?>
                            </h4>
                            <p>
                                <?php  echo get_post_meta( get_the_ID(), 'fitmeta_char1', true )?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wel-grid">
                    <h4><i class="fa fa-cogs 
                                 faa-spin animated " aria-hidden="true"></i>
                        <?php the_title(); ?>
                    </h4>
                    <p><i class="fa fa-cog 
                                 faa-spin animated " aria-hidden="true"></i>
                        <?php  echo get_post_meta( get_the_ID(), 'fitmeta_char1', true )?>
                    </p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i>
                        <?php  echo get_post_meta( get_the_ID(), 'fitmeta_char2', true )?>
                    </p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i>
                        <?php  echo get_post_meta( get_the_ID(), 'fitmeta_char3', true )?>
                    </p>
                    <p>
                        <?php  echo get_post_meta( get_the_ID(), 'fitmeta_highlight', true )?>
                    </p>
                    <h5><a href="<?php the_permalink(); ?>" class="view rew3"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Read More</a>
                        <a href="#" class="view rew3" data-toggle="modal" data-target="#<?php echo get_the_ID();?>"><i class="fa fa-video-camera 
                                 faa-flash animated " aria-hidden="true"></i> Watch How It Works</a>
                        <a href="#contact" class="view rew3 yaku scroll"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Contact Us</a>
                    </h5>
                </div>
                <?php endif; endwhile; endif; ?>
                
                <div class="clearfix"></div>
                <br>
                <br>
                <!--End First Produtct-->
                <!--Second Produtct-->
                <?php if ( $main_product_query->have_posts() ) : ?>
                <?php while ( $main_product_query ->have_posts() ) :$main_product_query -> the_post(); 
                        
                           $select_value = get_post_meta( get_the_ID(), 'pro_num', true );
                           if ( 'two' === $select_value ):
                        
                        ?>
                <div class="col-md-5 wel-grid1 m-product">
                    <div class="port-7 effect-2">
                        <div class="image-box">
                            <img src="<?php the_post_thumbnail_url()?>" alt="Image-2" class="img img-responsive">
                        </div>
                        <div class="text-desc">
                            <h4>
                                <?php the_title(); ?>
                            </h4>
                            <p>
                                <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true);?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wel-grid">
                    <h4><i class="fa fa-cogs 
                                     faa-spin animated " aria-hidden="true"></i>
                        <?php the_title(); ?>
                    </h4>
                    <p><i class="fa fa-cog 
                                     faa-spin animated " aria-hidden="true"></i>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true); ?>
                    </p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_char2',true); ?>
                    </p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_char3',true); ?>
                    </p>
                    <p>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_highlight',true); ?>
                    </p>
                    <h5><a href="<?php the_permalink(); ?>" class="view rew3"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Read More</a>
                        <a href="#" class="view rew3" data-toggle="modal" data-target="#<?php echo get_the_ID();?>"><i class="fa fa-video-camera 
                                     faa-flash animated " aria-hidden="true"></i> Watch How It Works</a>
                        <a href="#contact" class="view rew3 yaku scroll"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Contact Us</a>
                    </h5>
                </div>
                <div class="col-md-5 wel-grid1" id="pc-link">
                    <div class="port-7 effect-2">
                        <div class="image-box">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="Image-2" class="img img-responsive">
                        </div>
                        <div class="text-desc">
                            <h4>
                                <?php the_title();?>
                            </h4>
                            <p>
                                <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endif; endwhile; endif;?>
                <div class="clearfix"></div>
                <br><br>
                <!--End Second Produtct-->
                <!--Third Produtct-->
                <?php if ( $main_product_query->have_posts() ) : ?>
                <?php while ( $main_product_query ->have_posts() ) :$main_product_query -> the_post(); 
                        
                           $select_value = get_post_meta( get_the_ID(), 'pro_num', true );
                           if ( 'three' === $select_value ):
                        
                        ?>
                <div class="col-md-5 wel-grid1">
                    <div class="port-7 effect-2">
                        <div class="image-box">
                            <img src="<?php echo  the_post_thumbnail_url();?>" alt="Image-2" class="img img-responsive">
                        </div>
                        <div class="text-desc">
                            <h4>
                                <?php the_title();?>
                            </h4>
                            <p>
                                <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wel-grid">
                    <h4><i class="fa fa-cogs 
                                 faa-spin animated " aria-hidden="true"></i><?php the_title();?></h4>
                    <p><i class="fa fa-cog 
                                 faa-spin animated " aria-hidden="true"></i> <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true); ?>c</p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i><?php echo get_post_meta(get_the_ID(),'fitmeta_char2',true); ?></p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i><?php echo get_post_meta(get_the_ID(),'fitmeta_char3',true); ?>c</p>
                    <p><?php echo get_post_meta(get_the_ID(),'fitmeta_highlight',true); ?></p>
                    <h5><a href="<?php the_permalink();?>" class="view rew3"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Read More</a>
                        <a href="#" class="view rew3" data-toggle="modal" data-target="#<?php echo get_the_ID();?>"><i class="fa fa-video-camera 
                                 faa-flash animated " aria-hidden="true"></i> Watch How It Works</a>
                        <a href="#contact" class="view rew3 yaku scroll"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Contact Us</a>
                    </h5>
                </div>
                <?php endif; endwhile; endif;?>
                <div class="clearfix"></div>
                <br><br>
                <!--End Third Produtct-->
                <!--Fourth Produtct-->
                 <?php if ( $main_product_query->have_posts() ) : ?>
                <?php while ( $main_product_query ->have_posts() ) :$main_product_query -> the_post(); 
                        
                           $select_value = get_post_meta( get_the_ID(), 'pro_num', true );
                           if ( 'four' === $select_value ):
                        
                        ?>
                <div class="col-md-5 wel-grid1 m-product">
                    <div class="port-7 effect-2">
                        <div class="image-box">
                            <img src="<?php the_post_thumbnail_url()?>" alt="Image-2" class="img img-responsive">
                        </div>
                        <div class="text-desc">
                            <h4>
                                <?php the_title(); ?>
                            </h4>
                            <p>
                                <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true);?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wel-grid">
                    <h4><i class="fa fa-cogs 
                                     faa-spin animated " aria-hidden="true"></i>
                        <?php the_title(); ?>
                    </h4>
                    <p><i class="fa fa-cog 
                                     faa-spin animated " aria-hidden="true"></i>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true); ?>
                    </p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_char2',true); ?>
                    </p>
                    <p><i class="fa fa-cog faa-spin animated " aria-hidden="true"></i>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_char3',true); ?>
                    </p>
                    <p>
                        <?php echo get_post_meta(get_the_ID(),'fitmeta_highlight',true); ?>
                    </p>
                    <h5><a href="<?php the_permalink(); ?>" class="view rew3"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Read More</a>
                        <a href="#" class="view rew3" data-toggle="modal" data-target="#<?php echo get_the_ID();?>"><i class="fa fa-video-camera 
                                     faa-flash animated " aria-hidden="true"></i> Watch How It Works</a>
                        <a href="#contact" class="view rew3 yaku scroll"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Contact Us</a>
                    </h5>
                </div>
                <div class="col-md-5 wel-grid1" id="pc-link">
                    <div class="port-7 effect-2">
                        <div class="image-box">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="Image-2" class="img img-responsive">
                        </div>
                        <div class="text-desc">
                            <h4>
                                <?php the_title();?>
                            </h4>
                            <p>
                                <?php echo get_post_meta(get_the_ID(),'fitmeta_char1',true); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endif; endwhile; endif;?>
                
                <div class="clearfix"></div>
                <!--End Fourth Product Produtct-->
            </div>
        </div>
    </div>
    <div class="divider"></div>
     <div class="text-center">
            <a href="http://www.fairinsulationtechnology.com/all-products/" class="view rew3  "><span class="glyphicon glyphicon-link" aria-hidden="true"></span>See All</a>
        </div>
</div>

<!-- //Main Product Dynamic Ends -->


<!--More Products-->
                        <?php 
                             $other_product = new WP_Query(array(
                              'post_type' => 'other_product'                             ));
                             ?>
<div class="container text-center ">

    <div class="row">
        <div class="box"></div>
   
        <div class="col-md-12">
            <h2 style="color:#e74c3c">Our Other Products</h2>
        </div>
        <div class="col-md-12 other-products">
            <div class="box"></div>
            
            <div class="col-md-4">
                <ul class="list-group text-justify">
                    <?php if ( $other_product->have_posts() ) : ?>
                <?php while ( $other_product ->have_posts() ) :$other_product -> the_post(); 
                        
                           $value = get_post_meta( get_the_ID(), 'pro_row', true );
                           if ( 'one' === $value ):
                        
                        ?>
                    <li class="list-group-item"><i class="fa fa-cog fa-spin animated" aria-hidden="true"></i> <?php the_title();?></li>
                 <?php endif; endwhile; endif; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group text-justify">
                    <?php if ( $other_product->have_posts() ) : ?>
                <?php while ( $other_product ->have_posts() ) :$other_product -> the_post(); 
                        
                           $value = get_post_meta( get_the_ID(), 'pro_row', true );
                           if ( 'two' === $value ):
                        
                        ?>
                    <li class="list-group-item"><i class="fa fa-cog fa-spin animated" aria-hidden="true"></i> <?php the_title();?></li>
                 <?php endif; endwhile; endif; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group text-justify">
                    <?php if ( $other_product->have_posts() ) : ?>
                <?php while ( $other_product ->have_posts() ) :$other_product -> the_post(); 
                        
                           $value = get_post_meta( get_the_ID(), 'pro_row', true );
                           if ( 'three' === $value ):
                        
                        ?>
                    <li class="list-group-item"><i class="fa fa-cog fa-spin animated" aria-hidden="true"></i> <?php the_title();?></li>
                 <?php endif; endwhile; endif; ?>
                </ul>
            </div>




        </div>
    </div>
</div>
<div class="box"></div>
<div class="clearfix"></div>

<!--//More Products-->



<!--Service-->


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <br>
                <h2 class="text-uppercase">Our Services</h2>
                <div class="divider"></div>
                <p>"Earn your success based on service to others, not at the expense of others." <i><b>H. Jackson Brown, Jr</b></i></p>
                <div class="divider"></div>
            </div>

            <div class="col-md-4 ">
                <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon bg-df circle"><i  class="fa fa-sun-o"></i></span>
                    <h3><?php echo $fit['name1'];?></h3>
                    <div class="divider clearfix"></div>
                    <p><?php echo $fit['desc1'];?></p>
                    <a href="#contact" class="yaku scroll">Contact Us <i class="pl-5 fa fa-angle-double-down"></i></a>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon bg-df circle"><i class="fa fa-anchor"></i></span>
                    <h3><?php echo $fit['name2'];?></h3>
                    <div class="divider clearfix"></div>
                    <p><?php echo $fit['name2'];?></p>
                    <a href="#contact" class="yaku scroll">Contact Us <i class="pl-5 fa fa-angle-double-down"></i></a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon bg-df circle"><i class="fa fa-connectdevelop"></i></span>
                    <h3><?php echo $fit['name3'];?></h3>
                    <div class="divider clearfix"></div>
                    <p><?php echo $fit['desc3'];?> </p>
                    <a href="#contact" class="yaku scroll">Contact Us <i class="pl-5 fa fa-angle-double-down"></i></a>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon bg-df circle"><i class="fa fa-braille"></i></span>
                    <h3><?php echo $fit['name4'];?></h3>
                    <div class="divider clearfix"></div>
                    <p><?php echo $fit['desc4'];?></p>
                    <a href="#contact" class="yaku scroll">Contact Us <i class="pl-5 fa fa-angle-double-down"></i></a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon bg-df circle"><i class="fa fa-life-ring"></i></span>
                    <h3><?php echo $fit['name5'];?></h3>
                    <div class="divider clearfix"></div>
                    <p><?php echo $fit['desc5'];?></p>
                    <a href="#contact" class="yaku scroll">Contact Us <i class="pl-5 fa fa-angle-double-down"></i></a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>










<!--//Service-->






        <?php 
        $portfolio = new WP_Query(array(
        'post_type' => 'portfolio'));
        ?>



<!-- gallery -->
<div class="container" id="gallery">
    <div class="divider"></div>
    <h2 style="color:#e74c3c" class="text-center">We are proud to work with <i style="color:#34495e" class="fa fa-handshake-o faa-flash animated"></i></h2>
    <div class="divider"></div>
    <div class="col-md-12 ">
        <div class="owl-carousel">
            <?php if ( $portfolio->have_posts() ) : ?>
                <?php while ( $portfolio ->have_posts() ) :$portfolio -> the_post(); 
                        
                    
                        
                        ?>
            <div class="col-md-12 portfolio">

                <img src="<?php the_post_thumbnail_url();?>" alt="Uttara Bank" class="img img-responsive ">
                <div class="divider"></div>
                <a href="<?php the_permalink();?>">
                    <h2 class="text-center"><?php the_title();?> <i class="fa fa-external-link faa-pulse animated" aria-hidden="true"></i></h2>
                </a>

            </div>
            
            <?php  endwhile; endif; ?>

        </div>
        <div class="text-center">
            <a href="http://www.fairinsulationtechnology.com/our-portfolio/" class="view rew3 l "><span class="glyphicon glyphicon-link" aria-hidden="true"></span>See All</a>
        </div>

    </div>
</div>


<div class="clearfix divider"></div>

<!-- //gallery -->



<!-- map -->
<div class="map ">
    <img src="<?php echo get_template_directory_uri();?>/images/map.jpg" alt="" class="img img-responsive  ">
    <div class="map-pos">
        <h3>ADDRESS</h3>
        <p><?php echo $fit['location'];?></p>
        
        <p>Call : <?php echo $fit['contact_no'];?></p>
        <p><a href="mailto:<?php echo $fit['email'];?>"><?php echo $fit['email'];?></a></p>
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
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact"]');?>





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
