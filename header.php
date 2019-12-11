<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package logotech2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">

    <?php wp_head();
    global $logotech_options;
    // print_r($logotech_options);
?>
    
</head>

<body <?php body_class(); ?>>
    <div class="wrap">
        <header class="header">
            <div class="container header__container">
                <div class="header__content">
                    <a href="<?php echo get_option("siteurl"); ?>" class="logo">

                        <img src="<?php echo $logotech_options['logo']['url']; ?>">
                        
                    </a>
                    <div class="search">

                        <?php get_search_form(); ?>
                        <!-- <input type="text" class="search__input"> -->
                    </div>
                    <nav class="menu">
                        <div class="humburger">
                            <svg class="ham hamRotate ham7" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                                <path
                                    class="line top"
                                    d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013" />
                                <path
                                    class="line middle"
                                    d="m 70,50 h -40" />
                                <path
                                    class="line bottom"
                                    d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40" />
                            </svg>
                        </div>
                        <div class="menu__visible">
                            <ul class="menu__list">
                                <li class="menu__item">
                                    <a href="<?php echo get_option("siteurl"); ?>" class="menu__link">
                                        <?php echo $logotech_options['tech']; ?> 
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo get_option("siteurl"); ?>/drones/" class="menu__link">
                                        <?php echo $logotech_options['drones']; ?>
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo get_option("siteurl"); ?>/serurity/" class="menu__link">
                                        <?php echo $logotech_options['serurity']; ?>
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo get_option("siteurl"); ?>/smartphone/" class="menu__link">
                                        <?php echo $logotech_options['smarthpones']; ?>
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo get_option("siteurl"); ?>/headphones/" class="menu__link">
                                        <?php echo $logotech_options['headphones']; ?>
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo get_option("siteurl"); ?>/woman/" class="menu__link">
                                        <?php echo $logotech_options['woman']; ?>
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo get_option("siteurl"); ?>/man/" class="menu__link">
                                        <?php echo $logotech_options['man']; ?> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
