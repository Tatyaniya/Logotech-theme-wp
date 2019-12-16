<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package logotech2
 */

get_header();
?>

	<div id="primary" class="content-area">
        <div class="container primary__container">	

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'logotech2' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="page-content__maybe"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'logotech2' ); ?></p>

                    <ul class="menu-not-found">
                        <li class="menu-not-found__item">
                            <a href="<?php echo get_option("siteurl"); ?>" class="menu-not-found__link">
                                <?php echo $logotech_options['tech']; ?> 
                            </a>
                        </li>
                        <li class="menu-not-found__item">
                            <a href="<?php echo get_option("siteurl"); ?>/drones/" class="menu-not-found__link">
                                <?php echo $logotech_options['drones']; ?>
                            </a>
                        </li>
                        <li class="menu-not-found__item">
                            <a href="<?php echo get_option("siteurl"); ?>/serurity/" class="menu-not-found__link">
                                <?php echo $logotech_options['serurity']; ?>
                            </a>
                        </li>
                        <li class="menu-not-found__item">
                            <a href="<?php echo get_option("siteurl"); ?>/smartphone/" class="menu-not-found__link">
                                <?php echo $logotech_options['smarthpones']; ?>
                            </a>
                        </li>
                        <li class="menu-not-found__item">
                            <a href="<?php echo get_option("siteurl"); ?>/headphones/" class="menu-not-found__link">
                                <?php echo $logotech_options['headphones']; ?>
                            </a>
                        </li>
                        <li class="menu-not-found__item">
                            <a href="<?php echo get_option("siteurl"); ?>/woman/" class="menu-not-found__link">
                                <?php echo $logotech_options['woman']; ?>
                            </a>
                        </li>
                        <li class="menu-not-found__item">
                            <a href="<?php echo get_option("siteurl"); ?>/man/" class="menu-not-found__link">
                                <?php echo $logotech_options['man']; ?> 
                            </a>
                        </li>
                    </ul>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
