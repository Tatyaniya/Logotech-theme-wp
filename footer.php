<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package logotech2
 */

global $logotech_options;

?>

    <section class="subscribe">
        <div class="container subscribe__container">
            <div class="subscribe__content">
                <h3 class="subscribe__title">
                    Sign Up For Newsletter
                </h3>
                <form action="#" class="subscribe__form">
                    <input type="text" class="subscribe__input" placeholder="Your email address">
                    <button class="subscribe__btt">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__content">
                <div class="footer__box">
                    <?php if($logotech_options['titlecontact']) { ?>
                        <h4 class="footer__title">
                            <?php echo $logotech_options['titlecontact']; ?>
                        </h4>
                    <?php } ?>
                    <ul class="footer__list">

                        <?php if($logotech_options['logomail']) { ?>
                            <li class="footer__item">
                                <div class="mail">
                                    <div class="mail__icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="mail">
                                    </div>
                                    <a href="mailto:<?php echo $logotech_options['logomail']; ?>" class="mail__text">
                                        <?php echo $logotech_options['logomail']; ?>
                                    </a>
                                </div>
                            </li>
                        <?php } ?>

                        <?php if($logotech_options['address']) { ?>
                            <li class="footer__item">
                                <address class="address">
                                    <div class="address__icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/addr.png" alt="address">
                                    </div>
                                    <div class="address__text">
                                        <?php echo $logotech_options['address']; ?>
                                    </div>
                                </address>
                            </li>
                        <?php } ?>

                        <?php if($logotech_options['phone']) { ?>
                            <li class="footer__item">
                                <div class="phone">
                                    <div class="phone__icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="phone">
                                    </div>
                                    <a href="tel:<?php echo $logotech_options['phone']; ?>" class="phone__text">
                                        <?php echo $logotech_options['phone']; ?>
                                    </a>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="footer__box">

                    <?php if($logotech_options['titlesocial']) { ?>
                        <h4 class="footer__title">
                            <?php echo $logotech_options['titlesocial']; ?>
                        </h4>
                    <?php } ?>
                    
                    <ul class="footer__list">
                        <li class="footer__item">
                            <div class="social">
                                <div class="social__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.png" alt="youtube">
                                </div>
                                <a href="#" class="social__text" target="_blank">
                                    youtube
                                </a>
                            </div>
                        </li>
                        <li class="footer__item">
                            <div class="social">
                                <div class="social__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="instagram">
                                </div>
                                <a href="#" class="social__text" target="_blank">
                                    instagram
                                </a>
                            </div>
                        </li>
                        <li class="footer__item">
                            <div class="social">
                                <div class="social__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="facebook">
                                </div>
                                <a href="#" class="social__text" target="_blank">
                                    facebook
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="footer__box">

                    <?php if($logotech_options['titleproduct']) { ?>
                        <h4 class="footer__title">
                            <?php echo $logotech_options['titleproduct']; ?>
                        </h4>
                    <?php } ?>

                    <ul class="footer__list  footerMenu">
                        <li>
                            <a href="<?php echo get_option("siteurl"); ?>/drones/">
                                <?php echo $logotech_options['drones']; ?>              
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_option("siteurl"); ?>/serurity/"> 
                                <?php echo $logotech_options['serurity']; ?>             
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_option("siteurl"); ?>/smartphone/">   
                                <?php echo $logotech_options['smarthpones']; ?>               
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_option("siteurl"); ?>/headphones/">  
                                <?php echo $logotech_options['headphones']; ?>                 
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer__box">

                    <?php if($logotech_options['titlecontact']) { ?>
                        <h4 class="footer__title">
                            <?php echo $logotech_options['titlecontact']; ?>
                        </h4>
                    <?php } ?>

                    <h4 class="footer__title">
                        PAYMENT
                    </h4>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <div class="footer__text">
                                Visa                                        
                            </div>
                        </li>
                        <li class="footer__item">
                            <div class="footer__text">
                                PayPal                                         
                            </div>
                        </li>
                        <li class="footer__item">
                            <div class="footer__text">  
                                Master                                         
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>