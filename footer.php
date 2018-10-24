   <div class="copyrights">
            <p>&copy; 2017 Fair Insulation Technology. All rights reserved | Engineered by <a href="https://facebook.com/khm.mahmud.topu">Md. Mahmudul Huq</a></p>
        </div>
        <div class="backTop">
            <a id="backTop"><i class="fa fa-lg fa-caret-square-o-up "></i></a>
        </div>
        <!-- //Footer -->

        <!-- js-scripts -->

        <!-- js -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
        <!-- Necessary-JavaScript-File-For-Bootstrap -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
        <!-- Necessary-JavaScript-File-For-Bootstrap -->
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.backTop.min.js"></script>

        <!-- //js -->
        <!--Top Button-->
        <script>
            if ($('#backTop').length === 1) {

                $('#backTop').backTop({
                    'theme': 'custom'
                });

            }

        </script>
        <!--//Top Button-->
        <!-- Baneer-js -->
        <script src="<?php echo get_template_directory_uri();?>/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function() {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });

        </script>
        

        <!-- //Baneer-js -->
        
        <!-- start-smoth-scrolling -->

        <script type="text/javascript">
            $(document).scrollTop(0);
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });

        </script>
        <!-- start-smoth-scrolling -->

        <!-- smooth scrolling-bottom-to-top -->
        <!--
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
-->
        <!-- //smooth scrolling-bottom-to-top -->

        <!-- //js-scripts -->
        <!--TAB JS-->

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();

        </script>
        <!--//TAB-->
        <!--OWL JS CAll-->
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    items: 2,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 1500,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 1,
                            nav: false
                        },
                        1000: {
                            items: 2,
                            nav: false,
                            loop: true,
                            pagination: true,
                            paginationNumbers: false
                        }
                    },
                    nav: false,


                });
            });

        </script>
        <!--OWL JS CAll-->
        <!--Nav Collapse-->
        <script>
            $('.navbar-collapse a').click(function() {
                $(".navbar-collapse").collapse('hide');
            });

        </script>
        <!--Nav Collapse--->
        <!--According--->
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                }
            }

        </script>
        <!--According--->
    </div>
</body>

</html>
