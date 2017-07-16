<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 23-Jan-17
 * Time: 1:15 PM
 */

?>

<div class="clearfix"></div>
<section id="footer">
    <div class="container">
        <ul class="social">
            <li class="facebook"><a href="<?php echo ot_get_option('facebook') ?>" class="entypo-facebook"><i
                        class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="<?php echo ot_get_option('twitter') ?>" class="entypo-twitter"><i
                        class="fa fa-twitter"></i></a></li>
            <li class="dribbble"><a href="<?php echo ot_get_option('google_plus') ?>" class="entypo-dribbble"><i
                        class="fa fa-google"></i></a></li>
            <li class="behance"><a href="<?php echo ot_get_option('instagram') ?>" class="entypo-behance"><i
                        class="fa fa-instagram"></i></a></li>
            <li class="linked-in"><a href="<?php echo ot_get_option('youtube') ?>" class="entypo-linkedin"><i
                        class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
</section>
<div class="clearfix"></div>
<section id="last-footer">
    <div class="container">
        <div class="last-fooet-text">
            <p>© Copyright <a href="#">goldenpennyrecycling </a> 2017. All Rights Reserved</p>
            <p>Developed by - <a href="http://gowebbi.com/">gowebbi.com</a></p>
        </div>
    </div>
</section>rW)8B=rPBvQV
<div class="clearfix"></div>
<!--Scroll to top-->
<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
<!--Scroll to top end-->
</div>
<!--Required js -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap-dropdown-on-hover.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootsnav.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>


<!--Slider-->
<script>
    $('.responsive').slick({
        dots: true,
        infinite: false,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

</script>
<!--Slider End-->
<?php wp_footer(); ?>

</body>
</html>
