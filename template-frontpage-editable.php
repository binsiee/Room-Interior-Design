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
                <h1 class="umbruch"><?php echo esc_html( get_theme_mod( 'hero_title', '' ) ); ?></h1>
                <p id="special-font-subheader">
                    <?php echo wp_kses_post( get_theme_mod( 'hero_subheader', '' ) ); ?>
                </p>
                <a href="<?php echo esc_url( get_theme_mod( 'hero_button_link', '#' ) ); ?>" class="herobutton">
                    <?php echo esc_html( get_theme_mod( 'hero_button_text', '' ) ); ?>
                </a>
            </div>
        </section>

        <!--Hauptblöcke-->

        <section class="content-block">
            <section class="main-container secondary-section">

                <div class="headline">
                    <h2>Hochwertige Wohnlösungen für ihr zuhause</h2>
                    <p>Bei Interior verstehen wir, dass jedes Zuhause einzigartig ist.
                        Deshalb bieten wir maßgeschneiderte Möbeldesignlösungen,
                        die genau auf Ihre Bedürfnisse und
                        Ihren persönlichen Stil zugeschnitten sind.</p>
                </div>

                <div>
                    <div class="image-overlay">
                        <img src="img/roberto-nickson-tleCJiDOri0-unsplash.jpg" alt="Esszimmer mit Meerblick" />
                    </div>
                </div>

            </section>
        </section>

        <section class="content-block secondary-section-two-bg-color">
            <section class="main-container secondary-section">

                <div class="image-two">
                    <div class="image-overlay">
                        <img src="img/r-architecture-TRCJ-87Yoh0-unsplash.jpg"
                             alt="Luxuriöse Küche">
                    </div>
                </div>

                <div>
                    <div class="headline">
                        <h2>Nachhaltigkeit und Qualität im Fokus</h2>
                        <p>Bei Interior verstehen wir, dass jedes Zuhause
                            einzigartig ist. Deshalb bieten wir
                            maßgeschneiderte Möbeldesignlösungen,
                            die genau auf Ihre Bedürfnisse und Ihren
                            persönlichen Stil zugeschnitten sind.</p>
                    </div>
                    <button class="secondary-button" href="#">
                        Jetzt kontaktieren
                    </button>

                </div>

            </section>
        </section>

        <section class="bulletpoints">

            <div class="bulletpoints-width">
                <div class="bulletpoints-header">
                    <span class="icon-icon-5"></span>
                    <h3>Natürlichkeit erleben</h3>
                </div>
                <p>Bei Interior verstehen wir, dass jedes Zuhause einzigartig ist. Deshalb bieten wir Möbeldesign- Lösungen.</p>
            </div>

            <div class="bulletpoints-width">
                <div class="bulletpoints-header">
                    <span class="icon-icon-4"></span>
                    <h3>Wärme genießen</h3>
                </div>
                <p>Genießen Sie die wohlige Wärme unserer Bodenbeläge unter Ihren Füßen.</p>
            </div>

            <div class="bulletpoints-width">
                <div class="bulletpoints-header">
                    <span class="icon-icon-6"></span>
                    <h3>Stilvoll Wohnen</h3>
                </div>
                <p>Bei Interior verstehen wir, dass jedes Zuhause einzigartig ist. Deshalb bieten wir Möbeldesign- Lösungen.</p>
            </div>

        </section>

        <section class="parallax-background image-overlay">
            <div class=" main-container parallax-outer-box">
                <div class="parallax-inner-box">
                    <div class="parallax-content">
                        <h2>Parallax</h2>
                        <ul>
                            <li>Jedes Möbelstück wird speziell nach Ihren Wünschen und Anforderungen gestaltet</li>
                            <li>Interior setzt auf die Verwendung von erstklassigen, langlebigen Materialien.</li>
                            <li>Erhalten Sie Zugang zu einzigartigen und innovativen Möbeldesigns.</li>
                            <li>Unser erfahrenes Team begleitet Sie von der ersten Idee bis zur Umsetzung.</li>
                            <li>Interior setzt auf die Verwendung von erstklassigen, langlebigen Materialien</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section id="feedback" class="section-margin main-container">
            <p id="feedback-headline">Kundenstimme</p>
            <blockquote>
                <p id="feedback-quote">„Bei Interior verstehen wir, dass jedes Zuhause einzigartig ist. Deshalb bieten wir maßgeschneiderte Möbeldesignlösungen.“</p>
                <cite id="feedback-name">Marta</cite>
            </blockquote>
        </section>

<?php endwhile; endif; ?>
    </main>





<?php get_footer(); ?>