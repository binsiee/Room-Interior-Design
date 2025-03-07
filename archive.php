<?php
/**
 * archive.php
 * Beispiel für ein zweispaltiges Layout in jedem Beitragseintrag
 */

get_header(); ?>

<!-- Hero Section bleibt unverändert, wie du es schon hast -->
<section class="post-hero image-overlay"
         style="background-image: url('<?php echo esc_url( get_theme_mod( 'hero_bg_image', get_template_directory_uri() . '/img/jason-wang-NxAwryAbtIw-unsplash.jpg' ) ); ?>');">
    <div class="main-container post-above-level">
        <h1 class="umbruch">
            <?php
            if ( is_category() ) {
                echo 'Kategorie: ' . single_cat_title( '', false );
            } elseif ( is_tag() ) {
                echo 'Schlagwort: ' . single_tag_title( '', false );
            } else {
                the_archive_title();
            }
            ?>
        </h1>
    </div>
</section>

<div class="post-content-block"><!-- Container für alle Beiträge -->

    <?php
    // Archivbeschreibung (optional)
    the_archive_description( '<p class="archive-description">', '</p>' );

    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); ?>

            <!-- Jeder Beitrag = <section> -->
            <section class="post-secondary-section main-container">
                <!-- Linke Spalte: Beitragsbild -->
                <div>
                    <?php
                    // Featured Image ausgeben, z. B. in "medium" oder "large"
                    // Du kannst optional eine Klasse hinzufügen
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large', ['class' => 'post-image'] );
                    }
                    ?>
                </div>

                <!-- Rechte Spalte: Titel und Datum -->
                <div>
                    <?php
                    // Beitragstitel mit Link zur Detailseite
                    the_title(
                        sprintf( '<h2 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),
                        '</a></h2>'
                    );
                    ?>
                    <time datetime="<?php the_time('Y-m-d'); ?>">
                        <?php the_time('d.m.Y'); ?>
                    </time>
                </div>
            </section>

        <?php endwhile; ?>

    <?php else : ?>
        <p class="main-container"><?php _e( 'Es wurden keine Beiträge gefunden.', 'interior-design-translation' ); ?></p>
    <?php endif; ?>

</div><!-- /.post-content-block -->

<?php get_footer(); ?>
