<?php

/*Footer-Functions*/
;?>

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

;?>
