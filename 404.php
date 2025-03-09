<?php get_header();
/*
 * 404 Fehlerseite – Inhalte sind grundsätzlich nicht über das WordPress Backend änderbar
 * */
?>
    <main class="main-container content-block">
        <h1><?php _e('Oops, du bist falsch abgebogen', 'interior-design-translation') ?></h1>
        <a class="btn" href="<?php echo home_url(); ?>"><?php _e('Zur Startseite', 'interior-design-translation') ?></a>
    </main>
<?php get_footer(); ?>