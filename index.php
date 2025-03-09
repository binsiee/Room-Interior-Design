<?php get_header(); ?>

    <div class="main-container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('Keine Beiträge gefunden.', 'interior-design-translation'); ?></p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
<?php
