<?php
/**
 * page.php
 * Standard-Seiten-Template für Impressum, Datenschutz etc.
 */

get_header(); ?>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
