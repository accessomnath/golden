<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 23-Jan-17
 * Time: 1:15 PM
 */
get_header(); ?>

    <section id="section-03">
        <div class="container">
            <div class="Charities-page">
                <h1><?php echo get_the_title(); ?></h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

<?php
get_footer(); ?>