<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 23-Jan-17
 * Time: 3:52 PM
 * Template Name: Contact Us
 */
get_header()
?>
<section id="section-03">
    <div class="container">
        <div class="col-md-4">
            <?php get_template_part('address'); ?>
        </div>
        <div class="col-md-8">
            <div class="contact-us">
                <h1><?= get_the_title(); ?></h1>
                <div class="well well-sm">
                    <div class="form-horizontal">
                        <?php echo do_shortcode('[contact-form-7 id="59" title="Contact"]') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="map-area">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content() ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
