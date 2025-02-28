

<footer id="footer-background">
    <div id="footer-section" class="main-container">

<div class="footer-logo">
    <?php
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    } ?>
</div>

        <div class="footer-links">
            <div>
                <p>Sitemap</p>
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer_sitemap',
                    'container'      => false,
                    'menu_class'     => '', // falls du bisher keine spezielle Klasse hattest
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ) ); ?>
            </div>
            <div>
                <p>Legal</p>
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer_legal',
                    'container'      => false,
                    'menu_class'     => '', // hier ebenso
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ) ); ?>
            </div>
        </div>
    </div>

</footer>

<?php
wp_footer(); ?>

</body>


</html>