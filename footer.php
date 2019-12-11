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
                    <h4 class="footer__title">
                        CONTACT US
                    </h4>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <div class="mail">
                                <div class="mail__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="mail">
                                </div>
                                <a href="mailto:demo@demo.com" class="mail__text">
                                    demo@demo.com
                                </a>
                            </div>
                        </li>
                        <li class="footer__item">
                            <address class="address">
                                <div class="address__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/addr.png" alt="address">
                                </div>
                                <div class="address__text">
                                    Belgia Brussell
                                </div>
                            </address>
                        </li>
                        <li class="footer__item">
                            <div class="phone">
                                <div class="phone__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="phone">
                                </div>
                                <a href="tel:0123456 7890" class="phone__text">
                                    0123456 7890
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="footer__box">
                    <h4 class="footer__title">
                        SOCIAL MEDIA
                    </h4>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <div class="social">
                                <div class="social__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.png" alt="youtube">
                                </div>
                                <a href="#" class="social__text">
                                    youtube
                                </a>
                            </div>
                        </li>
                        <li class="footer__item">
                            <div class="social">
                                <div class="social__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="instagram">
                                </div>
                                <a href="#" class="social__text">
                                    instagram
                                </a>
                            </div>
                        </li>
                        <li class="footer__item">
                            <div class="social">
                                <div class="social__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="facebook">
                                </div>
                                <a href="#" class="social__text">
                                    facebook
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="footer__box">
                    <h4 class="footer__title">
                        PRODUCT  
                    </h4>
                    <ul class="footer__list  footerMenu">
                        <li>
                            <a href="#">
                                Drones                   
                            </a>
                        </li>
                        <li>
                            <a href="#"> 
                                Home serurity                   
                            </a>
                        </li>
                        <li>
                            <a href="#">   
                                Smart Hone                  
                            </a>
                        </li>
                        <li>
                            <a href="#">  
                                Headphones                   
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer__box">
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