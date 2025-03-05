<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php
            // Zeigt den im Gutenberg-Editor erstellten Inhalt an
            the_content();
            ?>

            <?php
            $args = [
                'post_type'      => 'testimonial',
                'posts_per_page' => 1,
                'orderby'        => 'rand',
            ];
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) : ?>
                <section id="feedback" class="post-section-margin main-container">
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

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
