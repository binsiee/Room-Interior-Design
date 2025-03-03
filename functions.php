<?php


/*
 * In der functions.php werden über Actions, Filter & Hooks sämtliche WordPress Funktionen de-/aktiviert bzw. angepasst
 * https://developer.wordpress.org/themes/basics/theme-functions/
 * https://kinsta.com/de/blog/wordpress-hooks/
 *
 * Offizielle Doku zu WordPress Themes: https://developer.wordpress.org/themes/
 * Offizielle Doku zum Gutenberg Editor: https://developer.wordpress.org/block-editor/
 *
 * Auch eigene PHP-Funktionen, die man in den Teplates verwenden möchte, können in die functions.php geschrieben werden
 */


/* ---- Theme Setups ----
* Dieser Hook wird bei jedem Laden der Seite aufgerufen, nachdem das Theme initialisiert wurde. Es wird im Allgemeinen verwendet, um grundlegende Setup-, Registrierungs- und Initiierungsaktionen für ein Theme auszuführen.
* https://developer.wordpress.org/reference/hooks/after_setup_theme/
*/
add_action('after_setup_theme', function () {
/* Pfad zur Sprachdatei
* load_textdomain() gibt den Namen der Übersetzungsdatei (beliebiger Name) und den Pfad an, wo diese zu finden ist.
* https://developer.wordpress.org/reference/functions/load_textdomain/
* get_template_directory() liefert den absoluten Server-Pfad zum Theme-Verzeichnis (ZB: "/var/www/html/wp-content/themes/webdev-theme") https://developer.wordpress.org/reference/functions/get_template_directory/
*
* Sämtliche Texte die wir in unserer functions.php oder in Templates schreiben und im Frontend oder Backend angezeigt werden, sollten über die Textdomain übersetzbar sein!
* die Ausgabe im PHP wird in der Funktion als echo "_e('Zu übersetzender Text','TEXTDOMAIN')" oder return "__('Zu übersetzender Text','TEXTDOMAIN')" eingebunden
* https://developer.wordpress.org/reference/functions/_e/
* ACHTUNG: das angegebene Verzeichnis muss existieren (kann auch nachträglich erstellt werden)
*/
load_theme_textdomain(
    'interior-design-translation',
    get_template_directory() . '/assets/languages'
    );


/*
 * add_theme_support() registriert die Themenunterstützung für bestimmte WordPress-Funktionen
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */

// Title Tag in <head> : <title>...</title>
add_theme_support('title-tag');


// Aktivierung von Beitragsbildern
//add_theme_support('post-thumbnails'); // Bei Beiträgen und Seiten
add_theme_support(
    'post-thumbnails',
    ['post', 'project']
    ); // nur bei Beiträgen und Projekten


// Eigene Bildgrößen im Theme definieren bzw. registrieren (https://developer.wordpress.org/reference/functions/add_image_size/)
add_image_size(
    'team',
    270,
    270,
    ['center', 'top']
    ); // crop = true (mittig zugeschnitten)


/* -- Customizer --
 * Custom Logo über Customizer zu ändern
 * https://developer.wordpress.org/themes/functionality/custom-logo/
 */
add_theme_support('custom-logo', [
    'height' => 120,
    'width' => 200,

    /* Bei SVG (können nicht beschnitten werden) MUSS beides true sein */
    'flex-height' => true,
    'flex-width' => true,
]);


// WordPress HTML5-Markup
add_theme_support('html5', [
    'search-form',
    'gallery',
    'caption',
    'style',
    'script',
    'comment-list',
    'comment-form',
]);


/*
* register_nav_menus() registriert Navigations Menüs (ohne diese Funktion gibt es im Admin-Menü: "Design > Menüs" nicht zur Aswahl
* im array werden die "Positionen im Theme" definiert
* https://developer.wordpress.org/reference/functions/register_nav_menus/
*/
register_nav_menus([
    'primary' => __('Haupt Navigation', 'interior-design-translation'),
    'footer_sitemap' => __('Footer Sitemap Navigation', 'interior-design-translation'),
    'footer_legal' => __('Footer Legal Navigation', 'interior-design-translation'),
]);


// Theme für Gutenberg optimiert - Lade default Block styles
add_theme_support('wp-block-styles');

// Custom CSS für Gutenberg (Backend)
add_theme_support('editor-styles');
add_editor_style('assets/css/fonts.css');
add_editor_style('assets/css/icons.css.css');
add_editor_style('assets/css/style-editor.css');

// Responsive Embeds (ZB. YouTube Videos, Iframes) erlauben
add_theme_support('responsive-embeds');

});


/* ---- CSS & JS in <head> bzw. vor dem </body> einfügen [ wp_head() , wp_footer() ] ----
 * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * der "Handle" muss eindeutig sein
 * Liste aller Scripten, die WordPress bereits inkludiert hat: https://developer.wordpress.org/reference/functions/wp_enqueue_script/#default-scripts-and-js-libraries-included-and-registered-by-wordpress
 */
$theme_version = wp_get_theme()->get('Version');
$version       = is_string($theme_version) ? $theme_version : false;

add_action('wp_enqueue_scripts', function () use ($version) {
    // CSS (style.css) im Head einfügen
    wp_enqueue_style(
        'font-style',
        get_template_directory_uri() . '/assets/css/fonts.css',
        [],
        $version
    );
    wp_enqueue_style(
        'icons-style',
        get_template_directory_uri() . '/assets/css/icons.css',
        [],
        $version
    );
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/style.css',
        [],
        $version
    );

    // JS im Footer einfügen
    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/assets/js/scripts.js',
        [],
        $version,
        true
    );

    // Splidejs styles und Scripts nur registrieren nicht einbinden
    wp_register_style(
        'splide-style',
        get_template_directory_uri() . '/assets/css/splide.min.css'
    );
    wp_register_script(
        'splide-script',
        get_template_directory_uri() . '/assets/js/splide.min.js',
        [],
        $version,
        true
    );
    wp_register_script(
        'slider-script',
        get_template_directory_uri() . '/assets/js/slider.js',
        ['splide-script'],
        $version,
        true
    );
});


/*
 * Editor JS für den Gutenberg Editor
 * https://developer.wordpress.org/reference/hooks/enqueue_block_editor_assets/
 */
add_action('enqueue_block_editor_assets', function () use ($version) {
    wp_enqueue_script(
        'editor-script',
        get_template_directory_uri() . '/assets/js/editor.js',
        [
            'wp-blocks',
            'wp-dom',
        ],
        $version,
        true
    );
});


/*
 * Zusätzlichen Mimes (Dokumenttypen) für den Upload erlauben (SVG-Logo Upload)
 * https://developer.wordpress.org/reference/hooks/upload_mimes/
 */
add_filter('upload_mimes', function ($mimes = []) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;
});


// 2. Customizer Einstellungen für die Startseite
function interior_design_customize_register( $wp_customize ) {

    /* ===============================
       HERO Bereich
    =============================== */
    $wp_customize->add_section( 'hero_section', array(
        'title'    => __( 'Hero Bereich', 'interior-design-translation' ),
        'priority' => 30,
    ) );

    // Hintergrundbild
    $wp_customize->add_setting( 'hero_bg_image', array(
        'default'   => get_template_directory_uri() . '/img/jason-wang-NxAwryAbtIw-unsplash.jpg',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_bg_image', array(
        'label'    => __( 'Hintergrundbild', 'interior-design-translation' ),
        'section'  => 'hero_section',
        'settings' => 'hero_bg_image',
    ) ) );

    // Titel
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => 'Interior Design Studio',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'   => __( 'Hero Titel', 'interior-design-translation' ),
        'section' => 'hero_section',
        'type'    => 'text',
    ) );

    // Untertitel
    $wp_customize->add_setting( 'hero_subheader', array(
        'default'           => 'Entdecken Sie zeitlose Eleganz bei Interior - Ihr Studio für <br> exklusives Möbeldesign',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'hero_subheader', array(
        'label'   => __( 'Hero Untertitel', 'interior-design-translation' ),
        'section' => 'hero_section',
        'type'    => 'textarea',
    ) );

    // Button Text
    $wp_customize->add_setting( 'hero_button_text', array(
        'default'           => 'Jetzt kontaktieren',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_button_text', array(
        'label'   => __( 'Button Text', 'interior-design-translation' ),
        'section' => 'hero_section',
        'type'    => 'text',
    ) );

    // Button Link
    $wp_customize->add_setting( 'hero_button_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'hero_button_link', array(
        'label'   => __( 'Button Link', 'interior-design-translation' ),
        'section' => 'hero_section',
        'type'    => 'url',
    ) );
}





/*Footer-Functions*/ ?>

<?php

function add_icon_to_footer_menu( $title, $item, $args, $depth ) {
// Prüfe, ob es sich um eines der Footer-Menüs handelt
if ( 'footer_sitemap' === $args->theme_location || 'footer_legal' === $args->theme_location ) {
$icon = '<span class="icon-arrow-4"></span>';
// Icon vor dem Titel einfügen (alternativ kannst du es auch dahinter setzen)
$title = $icon . $title;
}
return $title;
}
add_filter( 'nav_menu_item_title', 'add_icon_to_footer_menu', 10, 4 );

?>