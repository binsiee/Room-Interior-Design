<!doctype html>

<html <?php
language_attributes(); ?> class="no-js">

<head>

    <meta charset="<?php
    bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();

    ?>
</head>

<body <?php  body_class();  ?>>

<a href="#content" class="screen-reader-text"><?php
    _e('Zum Inhalt springen', 'interior-design-translation'); ?></a>

<header>

<nav class="container">
    <div  id="header-logo">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
    </div>


    <!-- Label für Burger-Button (geschlossen) -->
    <button class="menu-toggle" aria-label="Open menu">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Button für X-Button (offen) -->
    <button class="menu-close" aria-label="Close menu">
        ✕
    </button>

    <div class="mobile-menu-wrapper">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',           // In functions.php registriert
            'container'      => false,                // Kein zusätzliches Container-Element
            'menu_class'     => 'navigation nav-menu',  // Klassen, die bereits verwendet werden
            'depth'          => 2,                    // Zwei Ebenen (Hauptmenü und Dropdown)
            'fallback_cb'    => false,
            'walker'         => new My_Dropdown_Walker() // Unser individueller Walker
        ]);
        ?>
    </div>

</nav>
</header>