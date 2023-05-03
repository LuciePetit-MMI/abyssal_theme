<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
	  <meta charset=" <?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">


	  <?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

        <header class="header">
            <?php 
                if ( has_custom_logo() ) :
                $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) );
            ?>
                    <a class="header__logo" href="/crd/ <?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Logo du Conservatoire">
                        <img src="<?php echo $logo[0]; ?>" class="style-svg"/>
                    </a>
            <?php endif; ?>
            <nav class="menu">
                <?php
                    wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'menu_class'     => 'menu-list',
                    'depth'          => 1
                    ) );
                ?>
            </nav>
        </header>

		<main>
