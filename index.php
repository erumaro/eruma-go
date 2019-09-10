<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'eruma-go' ); ?></a>
        <header class="site-header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                <a class="navbar-brand" href="#">Eruma</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    =>  'menu-2',
                    'menu_id'           =>  'onepage-menu',
                    'menu_class'        =>  'navbar-nav mr-auto',
                    'container'         =>  'div',
                    'container_class'   =>  'collapse navbar-collapse',
                    'container_id'      =>  'navbarNav',
                ) );
                ?>
                </div>
            </nav>
        </header>
        <main id="content" class="site-content">
            <section id="intro" class="container">
                
            </section><!-- #intro -->
            <section id="projects" class="container">
                <?php
                    $project_args = array(
                        'post_type' => 'projects'
                    );
                    $project_query = new WP_Query( $project_args );

                    while( $project_query->have_posts() ) {
                        $project_query->the_post();
                        echo '<h2>' . get_the_title() . '</h2>';
                    }

                    wp_reset_postdata();
                ?>
            </section>
        </main>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar('footer'); ?>
            <div class="text-center mt-3 pb-3">
                &copy; <?php echo date("Y"); ?> Eruma
                <span class="sep"> | </span>
                <?php
                printf( esc_html__( 'Theme: %1$s by %2$s.', 'eruma-go' ), 'eruma-go', '<a href="https://github.com/erumaro">Tobias Årud</a>' );
                ?>
            </div><!-- .site-info -->
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>