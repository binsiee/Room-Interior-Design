<?php

/**
 * Template Name: Startseite
 */


get_header(); ?>

    <main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- HERO SECTION -->
        <section class="hero image-overlay" style="background-image: url('<?php echo esc_url( get_theme_mod( 'hero_bg_image', get_template_directory_uri() . '/img/jason-wang-NxAwryAbtIw-unsplash.jpg' ) ); ?>');">
            <div class="main-container above-level">
                <h1 class="umbruch"><?php echo esc_html( get_theme_mod( 'hero_title', 'Vorschautext' ) ); ?></h1>
                <p id="special-font-subheader">
                    <?php echo wp_kses_post( get_theme_mod( 'hero_subheader', 'Vorschautext' ) ); ?>
                </p>
                <a href="<?php echo esc_url( get_theme_mod( 'hero_button_link', '#' ) ); ?>" class="herobutton">
                    <?php echo esc_html( get_theme_mod( 'hero_button_text', 'Vorschautext' ) ); ?>
                </a>
            </div>
        </section>

        <!--Hauptblöcke-->

    <section class="content-block">
        <section class="main-container secondary-section">

            <div class="headline">
                <h2><?php echo esc_html( get_theme_mod( 'block1_headline', 'Vorschautext' ) ); ?></h2>
                <p><?php echo wp_kses_post( get_theme_mod( 'block1_text', 'Vorschautext' ) ); ?></p>
            </div>

            <div>
                <div class="image-overlay">
                    <img src="<?php echo esc_url( get_theme_mod( 'block1_image', get_template_directory_uri() . '/img/roberto-nickson-tleCJiDOri0-unsplash.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Esszimmer mit Meerblick', 'interior-design-translation' ); ?>" />
                </div>
            </div>

        </section>
    </section>

    <section class="content-block secondary-section-two-bg-color">
        <section class="main-container secondary-section">

            <div class="image-two">
                <div class="image-overlay">
                    <img src="<?php echo esc_url( get_theme_mod( 'block2_image', get_template_directory_uri() . '/img/r-architecture-TRCJ-87Yoh0-unsplash.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Luxuriöse Küche', 'interior-design-translation' ); ?>" />
                </div>
            </div>

            <div>
                <div class="headline">
                    <h2><?php echo esc_html( get_theme_mod( 'block2_headline', 'Vorschautext' ) ); ?></h2>
                    <p><?php echo wp_kses_post( get_theme_mod( 'block2_text', 'Vorschautext' ) ); ?></p>
                </div>
                <a href="<?php echo esc_url( get_theme_mod( 'block2_button_link', '#' ) ); ?>" class="secondary-button">
                    <?php echo esc_html( get_theme_mod( 'block2_button_text', 'Vorschautext' ) ); ?>
                </a>
            </div>

        </section>
    </section>


    <section class="bulletpoints main-container">

        <!-- BULLETPOINT 1 -->
        <div class="bulletpoints-width">
            <div class="bulletpoints-header">
                <span class="<?php echo esc_attr( get_theme_mod( 'bullet1_icon', 'icon-icon-5' ) ); ?>"></span>
                <h3><?php echo esc_html( get_theme_mod( 'bullet1_headline', 'Vorschautext' ) ); ?></h3>
            </div>
            <p><?php echo wp_kses_post( get_theme_mod( 'bullet1_text', 'Vorschautext' ) ); ?></p>
        </div>

        <!-- BULLETPOINT 2 -->
        <div class="bulletpoints-width">
            <div class="bulletpoints-header">
                <span class="<?php echo esc_attr( get_theme_mod( 'bullet2_icon', 'icon-icon-4' ) ); ?>"></span>
                <h3><?php echo esc_html( get_theme_mod( 'bullet2_headline', 'Vorschautext' ) ); ?></h3>
            </div>
            <p><?php echo wp_kses_post( get_theme_mod( 'bullet2_text', 'Vorschautext' ) ); ?></p>
        </div>

        <!-- BULLETPOINT 3 -->
        <div class="bulletpoints-width">
            <div class="bulletpoints-header">
                <span class="<?php echo esc_attr( get_theme_mod( 'bullet3_icon', 'icon-icon-6' ) ); ?>"></span>
                <h3><?php echo esc_html( get_theme_mod( 'bullet3_headline', 'Vorschautext' ) ); ?></h3>
            </div>
            <p><?php echo wp_kses_post( get_theme_mod( 'bullet3_text', 'Vorschautext' ) ); ?></p>
        </div>

    </section>

    <section class="parallax-background image-overlay"
             style="background-image: url('<?php echo esc_url( get_theme_mod( 'parallax_bg_image',
                 get_template_directory_uri() . '/img/nastuh-abootalebi-eHD8Y1Znfpk-unsplash.jpg' ) ); ?>');">

        <div class="main-container parallax-outer-box">
            <div class="parallax-inner-box">
                <div class="parallax-content">
                    <h2><?php echo esc_html( get_theme_mod( 'parallax_headline', 'Parallax' ) ); ?></h2>
                    <ul>
                        <li>
                            <span class="icon-check"></span>
                            <?php echo esc_html( get_theme_mod( 'parallax_list1', 'Listenpunkt 1' ) ); ?>
                        </li>
                        <li>
                            <span class="icon-check"></span>
                            <?php echo esc_html( get_theme_mod( 'parallax_list2', 'Listenpunkt 2' ) ); ?>
                        </li>
                        <li>
                            <span class="icon-check"></span>
                            <?php echo esc_html( get_theme_mod( 'parallax_list3', 'Listenpunkt 3' ) ); ?>
                        </li>
                        <li>
                            <span class="icon-check"></span>
                            <?php echo esc_html( get_theme_mod( 'parallax_list4', 'Listenpunkt 4' ) ); ?>
                        </li>
                        <li>
                            <span class="icon-check"></span>
                            <?php echo esc_html( get_theme_mod( 'parallax_list5', 'Listenpunkt 5' ) ); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


        <?php
        $args = [
            'post_type'      => 'testimonial',
            'posts_per_page' => 1,
            'orderby'        => 'rand',
        ];
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) : ?>
            <section id="feedback" class="section-margin main-container">
                <p id="feedback-headline"><?php _e( 'Kundenstimme', 'interior-design-translation' ); ?></p>

                <?php
                while ( $query->have_posts() ) :
                    $query->the_post(); ?>
                    <blockquote>
                        <p id="feedback-quote"><?php echo wp_kses_post( get_the_content() ); ?></p>
                        <cite id="feedback-name"><?php echo esc_html( get_the_title() ); ?></cite>
                    </blockquote>
                <?php endwhile; ?>

            </section>
        <?php
        endif;

        wp_reset_postdata();
        ?>

<?php endwhile; endif; ?>
    </main>





<?php get_footer(); ?>