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

<nav class="container" id="header-logo">
    <div>
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
    </div>

        <!-- Versteckte Checkbox -->
    <input type="checkbox" id="menu-toggle" class="menu-toggle-checkbox">

        <!-- Label für Burger-Button (geschlossen) -->
    <label for="menu-toggle" class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
        <span class="screen-reader-text"><?php _e('Navigation öffnen/schließen', 'interior-design-translation'); ?></span>
    </label>

    <?php

    wp_nav_menu([
        'theme_location' => 'primary',  // wurde in der functions.php festgelegt "register_nav_menus()"
        'container' => false,           // true würde eine <div> um die <ul> des wp_nav_menu() erzeugen
        'menu_class' => 'nav-menu',     // Klassenname der ul: <ul class="nav-menu">
        'menu_id' => 'nav-main',        // ID der ul: <ul id="nav-main">
        'depth' => 2,                   // Anzahl der Menüebenen die ausgegeben werden
        'fallback_cb' => false          // wenn im WordPress kein Menü als "Footer Navigation" zugewiesen wurde (Checkbox), wird keine Navigation ausgegeben. Default wäre die Ausgebe der WordPress Funktion "wp_page_menu()" (https://developer.wordpress.org/reference/functions/wp_page_menu/)
        //'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s<li><a href="#">DE</a><a href="#">EN</a></li></ul>',
    ]);
    ?>

</nav>