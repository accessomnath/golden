<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 24-Jan-17
 * Time: 12:20 PM
 * Template Name: Home
 */

get_header();
?>
<section id="section-03">
    <div class="container">
        <div class="col-md-4">
            <?php get_template_part('address'); ?>
        </div>
        <div class="col-md-8">
            <div class="right-content">
                <div class="col-md-12">
                    <h1> About Us </h1>
                    <?php $the_query = new WP_Query(array('pagename' => 'home')) ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                </div>
            </div>
            <div id="service-section">
                <div class="grid">
                    <?PHP
                    /**
                     * Custom Slug Name homepost
                     */
                    global $post;
                    $args = array(
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'homepost',
                        'post_status' => 'publish'
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        ?>
                        <figure class="effect-apollo">
                            <img src="<?PHP echo $url ?>" class="img-responsive"/>
                            <figcaption>
                                <h2><?PHP the_title(); ?></h2>
                                <?php the_content(); ?>
                            </figcaption>
                        </figure>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
