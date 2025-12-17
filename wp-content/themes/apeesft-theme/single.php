<?php
/**
 * Template pour les articles individuels
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1); max-width: 900px; margin: 0 auto;">
                    <h1><?php the_title(); ?></h1>
                    <div style="color: #666; margin-bottom: 2rem;">
                        Publié le <?php echo get_the_date(); ?>
                    </div>
                    <?php the_content(); ?>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>

