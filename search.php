<?php
get_header();
/*
 * Template für Such-Ergebnis-Seite
 */

/*
 * get_search_query() gibt den Wert des Query-String der WordPress Search-Query ( /?s= ) zurück.
 * https://developer.wordpress.org/reference/functions/get_search_query/
 */
$s_query = get_search_query();
?>
<main class="main-container content-block">
    <h1 class="is-style-headline"><?php _e('Suche', 'interior-design-translation'); ?></h1>
    <?php
    /*
     * get_search_form() gibt das WordPress Formular für die Suche zurück (HTML-Markup)
     * https://developer.wordpress.org/reference/functions/get_search_form/
     */
    echo get_search_form();
    ?>
    <?php if ($s_query) : ?>
        <h2><?php echo sprintf(__('Suchergebnis für "%s"', 'interior-design-translation'), $s_query); ?></h2>
        <p class="results"><?php
            /*
             * Die Funktion "_n()" übersetzt und ruft die Singular- oder Pluralform des Textes basierend auf der angegebenen Zahl (found_posts) ab.
             * https://developer.wordpress.org/reference/functions/_n/
             *
             * $wp_query->found_posts liefert die Anzahl der Beiträge, welche durch die WP_Query (globale Abfrage) gesamt gefunden wurden.
             */
            echo sprintf(
                _n(
                    'Es wurde %s Ergebnis gefunden.',
                    'Es wurden %s Ergebnisse gefunden.',
                    $wp_query->found_posts,
                    'interior-design-translation'
                ),
                $wp_query->found_posts
            );
            ?></p>
        <?php
        /* WordPress Standard-Schleife zur Ausgabe des Seiteninhalts und der Beiträge
         * https://developer.wordpress.org/themes/basics/the-loop/
         */
        if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
                <article class="post">
                    <?php
                    the_title(
                        sprintf(
                            '<h2 class="post-title"><a href="%s">',
                            get_permalink()
                        ),
                        '</a></h2>'
                    );
                    /*
                     * get_post_type() liefert den Post-Type-Key eines Beitrags als String
                     * https://developer.wordpress.org/reference/functions/get_post_type/
                     */
                    $p_type = get_post_type();
                    if ($p_type === 'page') {
                        echo 'SEITE';
                    } elseif ($p_type === 'post') {
                        echo 'BEITRAG';
                    } else {
                        echo 'ANDERER TYP';
                    }
                    ?>
                </article>
            <?php endwhile;
        endif;
        ?>
    <?php else :
        echo sprintf(
            '<h3>%s</h3>',
            __('Bitte gib einen Suchbegriff ein.', 'interior-design-translation')
        );
    endif; ?>
</main>
<?php
get_footer();
?>
