<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 24-Jan-17
 * Time: 4:57 PM
 */
get_header();
?>
    <section id="section-03">
        <div class="container">
            <div class="col-md-12">
                <div class="Bottle-exchange">
                    <div class="row">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="col-md-4">
                                <div class="img-area">
                                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
                                </div>
                                <div class="img-area">
                                    <img src="<?php echo get_field('s_images1') ?>" class="img-responsive"/>
                                </div>
                                <div class="img-area">
                                    <img src="<?php echo get_field('s_2') ?>" class="img-responsive"/>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                                <p><span>By ph: <?php echo get_post_meta($post->ID, 'phone', true) ?></span></p>
                                <p><span>By E-Mail : <?php echo get_post_meta($post->ID, 'email', true) ?></span></p>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>