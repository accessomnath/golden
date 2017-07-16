<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 24-Jan-17
 * Time: 1:00 PM
 * Template Name: Bottle Exchange
 */
get_header() ?>


<section id="section-03">
    <div class="container">


        <div class="col-md-4">
            <?php get_template_part('address'); ?>
        </div>


        <div class="col-md-8">
            <div class="Bottle-exchange">
                <h1><?php echo get_the_title(); ?></h1>
                <?php
                /**
                 * Custom Slug Name bottlexchange
                 */
                global $post;
                $args = array(
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'bottle',
                    'post_status' => 'publish'
                );
                $i = 1;
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                $the_query->the_post();
                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                if ($i == 1) {
                    ?>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="img-area">
                                <img src="<?php echo $url; ?>" class="img-responsive"/>
                            </div>
                            <div class="img-area">
                                <img src="<?php echo get_field('1stimage') ?>" class="img-responsive"/>
                            </div>
                            <div class="img-area">
                                <img src="<?php echo get_field('2ndimage') ?>" class="img-responsive"/>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <a href="<?php the_permalink($post->ID) ?>"><h3><?php the_title(); ?></h3></a>
                            <?php the_content(); ?>
                            <p><span>By ph: <?php echo get_post_meta($post->ID, 'phone', true) ?></span></p>
                            <p><span>By E-Mail : <?php echo get_post_meta($post->ID, 'email', true) ?></span></p>
                        </div>
                    </div>
                <?php } else { ?>

                <div class="row mr-10">
                    <div class="col-md-5">
                        <div class="img-area">
                            <img src="<?php echo $url; ?>" class="img-responsive"/>
                        </div>
                        <div class="img-area">
                            <img src="<?php echo get_field('1stimage') ?>" class="img-responsive"/>
                        </div>
                        <div class="img-area">
                            <img src="<?php echo get_field('2ndimage') ?>" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                        <?php the_content(); ?>
                        <p><span>By ph: <?php echo get_post_meta($post->ID, 'phone', true) ?></span></p>
                        <p><span>By E-Mail : <?php echo get_post_meta($post->ID, 'email', true) ?></span></p>
                    </div>
                </div>
            </div>
            <?php } endwhile; ?>
        </div>
    </div>

</section>


<?php get_footer(); ?>
