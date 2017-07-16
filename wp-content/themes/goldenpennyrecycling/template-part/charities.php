<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 24-Jan-17
 * Template Name: Charities
 * Time: 2:32 PM
 */
get_header() ?>

    <section id="section-03">
        <div class="container">
            <div class="Charities-page">
                <h1><?php echo get_the_title() ?></h1>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>


            </div>

            <div class="image-section">
                <div class="row">
                    <?php
                    /**
                     * Custom Slug Name photo
                     */
                    global $post;
                    $args = array(
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'photo',
                        'post_status' => 'publish'
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        ?>
                        <div class="col-md-3 col-sm-4 col-xs-6" ><img class="img-responsive" src="<?php echo $url; ?>" style="min-height: 179px;"/>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>

        </div>
    </section>
<?php get_footer(); ?>