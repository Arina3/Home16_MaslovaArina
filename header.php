<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Let`s_Rock
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans|Oswald:400,500" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
    <div class="site-branding">
        <div class="container-header">
            <nav id="site-navigation" class="main-navigation">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-nav-menu',
                    'container_class' => 'custom-menu-class',
                    'menu_id' => 'primary-menu',
                ));
                ?>
            </nav>
            <div class="logo-block">
                <a href="#" target="_self" class="logo-link">
                    <?php the_custom_logo(); ?>
                </a>
            </div>
            <nav class="socials-bar">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-socials-menu',
                    'container_class' => 'socials-menu-class',
                    'menu_id' => 'socials-menu',
                ));
                ?>
            </nav>
        </div>
</header>
<?php echo get_theme_mod('header_image') ?>

    <div id="content" class="site-content">


