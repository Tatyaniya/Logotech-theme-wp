<?php 
/**
 * Template name: Главная
 */
 get_header();
?>

<section class="hero">
    <div class="container hero__container">
        <div class="hero__content">
            <div class="offer">
                <h1 class="offer__title">
                    <?php echo $logotech_options['offer']; ?>
                </h1>
                <div class="offer__subtitle">
                    <?php echo $logotech_options['offerdesc']; ?>
                </div>
                <a href="#popular" class="offer__link links">
                    <?php echo $logotech_options['textlink']; ?>
                </a>
            </div>
            <div class="slider slick-slider">

                <?php $slider = $logotech_options['home_header_slider'];
                
                        foreach ($slider as $slide) { ?>

                            <div class="slider__item">
                                <img src="<?php echo $slide['image']; ?>" alt="slide">
                                <div class="slider__cost">
                                    <?php echo $slide['description']; ?>
                                </div>
                            </div>

                    <?php } ?>

            </div>
        </div>
        <div class="excellence hero__excellence">
            <ul class="excellence__list">
                <li class="excellence__item">
                    <div class="excellence__content">
                        <div class="excellence__icon">
                            <img src="img/exc-icon1.png" alt="icon">
                        </div>
                        <div class="excellence__text">
                            Sale up to 50%
                        </div>
                    </div>
                </li>
                <li class="excellence__item">
                    <div class="excellence__content">
                        <div class="excellence__icon">
                            <img src="img/exc-icon2.png" alt="icon">
                        </div>
                        <div class="excellence__text">
                            Fast Delivery
                        </div>
                    </div>
                </li>
                <li class="excellence__item">
                    <div class="excellence__content">
                        <div class="excellence__icon">
                            <img src="img/exc-icon3.png" alt="icon">
                        </div>
                        <div class="excellence__text">
                            High quality
                        </div>
                    </div>
                </li>
                <li class="excellence__item">
                    <div class="excellence__content">
                        <div class="excellence__icon">
                            <img src="img/exc-icon4.png" alt="icon">
                        </div>
                        <div class="excellence__text">
                            Customer support 
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sale">
    <div class="container sale__container">
        <div class="sale__content">
            <a href="#" class="sale__link">
                <img src="img/y.jpg" alt="Sale">
            </a>
            <a href="#" class="sale__link">
                <img src="img/k.jpg" alt="Sale">
            </a>
        </div>
    </div>
</section>
<section class="popular" id="popular">
    <div class="container popular__container">
        <div class="popular__content">
            <h2 class="popular__title">
                Popular categories
            </h2>
            <ul class="popular__list">
                <li class="popular__item">
                    <a href="#" class="popular__link links">
                        <div class="popular__img">
                            <img src="img/cat1.png" alt="photo">
                        </div>                            
                        <div class="popular__subtitle">
                            Drones
                        </div>
                        <div class="popular__text">
                            Lorem ipsum dolor sit<br> amet, consectetur<br> adipiscing elit, sed do<br>  aliqua.
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a href="#" class="popular__link links">
                        <div class="popular__img">
                            <img src="img/cat2.png" alt="photo">
                        </div>
                        <div class="popular__subtitle">
                            Home security
                        </div>
                        <div class="popular__text">
                            Lorem ipsum dolor sit<br> amet, consectetur<br>  tempor incididunt ut<br> labore et dolore magna<br> aliqua.
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a href="#" class="popular__link links">
                        <div class="popular__img">
                            <img src="img/cat3.png" alt="photo">
                        </div>
                        <div class="popular__subtitle">
                            Smart Phone 
                        </div>
                        <div class="popular__text">
                            Lorem ipsum dolor sit<br> amet, consectetur<br> adipiscing elit, sed do<br> eiusmod tempor<br> aliqua.
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a href="#" class="popular__link links">
                        <div class="popular__img">
                            <img src="img/cat4.png" alt="photo">
                        </div>
                        <div class="popular__subtitle">
                            Headphones
                        </div>
                        <div class="popular__text">
                            Lorem ipsum dolor sit<br> amet, consectetur<br> adipiscing elit, sed do<br> eiusmod tempor<br> incididunt utaliqua. 
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="bestseller">
    <div class="container bestseller__container">
        <div class="bestseller__content">
            <h2 class="bestseller__title">
                Bestseller
            </h2>
            <ul class="bestseller__list">
                <li class="bestseller__item">
                    <ul class="bestseller__stocks">
                        <li class="bestseller__best">
                            Bestseller
                        </li>
                        <li class="bestseller__stoc">
                            Save 15 % 
                        </li>
                        <!-- <li class="bestseller__nouv">
                            Nouveaute 
                        </li> -->
                    </ul>
                    <div class="bestseller__img">
                        <img src="img/best1.png" alt="photo">
                    </div>
                    <div class="bestseller__desc">
                        HETP Écouteur<br> Bluetooth sans Fil<br> Micro Oreillettes<br> Bluetooth Étanche<br> IPX
                    </div>
                    <div class="bestseller__rating">
                        <img src="img/4.png" alt="rating">
                    </div>
                    <div class="bestseller__down">
                        <div class="aveilable  bestseller__aveilable">
                            <div class="aveilable__icon">
                                <img src="img/ok.png" alt="ok">
                            </div>
                            <div class="aveilable__text">
                                Are aveilable
                            </div>
                        </div>
                        <div class="bestseller__old-cost">
                            £ 99,00
                        </div>
                        <div class="bestseller__cost">
                            £ 49,99 
                        </div>
                        <a href="#" class="bestseller__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="bestseller__item">
                    <ul class="bestseller__stocks">
                        <li class="bestseller__best">
                            Bestseller
                        </li>
                        <li class="bestseller__stoc">
                            Save 15 % 
                        </li>
                        <!-- <li class="bestseller__nouv">
                            Nouveaute 
                        </li> -->
                    </ul>
                    <div class="bestseller__img">
                        <img src="img/best2.png" alt="photo">
                    </div>
                    <div class="bestseller__desc">
                        HETP Écouteur<br> Bluetooth sans Fil<br> Micro Oreillettes<br> Bluetooth Étanche<br> IPX
                    </div>
                    <div class="bestseller__down">
                        <div class="bestseller__rating">
                            <img src="img/5.png" alt="rating">
                        </div>
                        <div class="aveilable  bestseller__aveilable">
                            <div class="aveilable__icon">
                                <img src="img/ok.png" alt="ok">
                            </div>
                            <div class="aveilable__text">
                                Are aveilable
                            </div>
                        </div>
                        <div class="bestseller__old-cost">
                            £ 55,00
                        </div>
                        <div class="bestseller__cost">
                            £ 35,99 
                        </div>
                        <a href="#" class="bestseller__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="bestseller__item">
                    <ul class="bestseller__stocks">
                        <li class="bestseller__best">
                            Bestseller
                        </li>
                        <li class="bestseller__stoc">
                            Save 15 % 
                        </li>
                        <!-- <li class="bestseller__nouv">
                            Nouveaute 
                        </li> -->
                    </ul>
                    <div class="bestseller__img">
                        <img src="img/best3.png" alt="photo">
                    </div>
                    <div class="bestseller__desc">
                        Caméscope K,<br> Caméra vidéo<br> numérique<br> Ultra-HD Ordro K<br> avec Microphone 
                    </div>
                    <div class="bestseller__down">
                        <div class="bestseller__rating">
                            <img src="img/5.png" alt="rating">
                        </div>
                        <div class="aveilable  bestseller__aveilable">
                            <div class="aveilable__icon">
                                <img src="img/ok.png" alt="ok">
                            </div>
                            <div class="aveilable__text">
                                Are aveilable
                            </div>
                        </div>
                        <div class="bestseller__old-cost">
                            £ 125,00
                        </div>
                        <div class="bestseller__cost">
                            £ 149,99 
                        </div>
                        <a href="#" class="bestseller__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="bestseller__item">
                    <ul class="bestseller__stocks">
                        <li class="bestseller__best">
                            Bestseller
                        </li>
                        <!-- <li class="bestseller__stoc">
                            Save 15 % 
                        </li> -->
                        <li class="bestseller__nouv">
                            Nouveaute 
                        </li>
                    </ul>
                    <div class="bestseller__img">
                        <img src="img/best4.png" alt="photo">
                    </div>
                    <div class="bestseller__desc">
                        Nouvel Echo Dot,<br> Enceinte connectée<br> avec horloge et<br> Alexa, Tissu sable
                    </div>
                    <div class="bestseller__rating">
                        <img src="img/4.png" alt="rating">
                    </div>
                    <div class="bestseller__down">
                        <div class="aveilable  bestseller__aveilable">
                            <div class="aveilable__icon">
                                <img src="img/ok.png" alt="ok">
                            </div>
                            <div class="aveilable__text">
                                Are aveilable
                            </div>
                        </div>
                        <div class="bestseller__old-cost">
                            £ 60,00
                        </div>
                        <div class="bestseller__cost">
                            £ 49,99 
                        </div>
                        <a href="#" class="bestseller__link links">
                            Learn more
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="dress">
    <div class="container dress__container">
        <div class="dress__content">
            <div class="woman">
                <div class="woman__desc">
                    <div class="woman__specification">
                        <div class="woman__subtitle">
                            Aujourd’hui vous<br> economisez jusqu’a 30%
                        </div>
                        <a href="#" class="woman__link links">
                            Shop woman
                        </a>
                    </div>
                    <div class="woman__img">
                        <img src="img/womans.png" alt="womans">
                    </div>
                </div>
                <ul class="product__list">
                    <li class="product__item">
                        <ul class="product__stocks">
                            <!-- <li class="product__best">
                                Bestseller
                            </li> -->
                            <li class="product__stoc">
                                Save 
                            </li>
                            <!-- <li class="product__nouv">
                                Nouveaute 
                            </li> -->
                        </ul>
                        <div class="product__img">
                            <img src="img/w1.png" alt="photo">
                        </div>
                        <div class="product__description">
                            Veste Hommes Blouson<br> Léger Militaire Veste
                        </div>
                        <div class="product__rating">
                            <img src="img/4.png" alt="rating">
                        </div>
                        <div class="product__down">
                            <div class="aveilable  product__aveilable">
                                <div class="aveilable__icon">
                                    <img src="img/ok.png" alt="ok">
                                </div>
                                <div class="aveilable__text">
                                    Are aveilable
                                </div>
                            </div>
                            <div class="product__old-cost">
                                £ 60,00
                            </div>
                            <div class="product__cost">
                                £ 49,99 
                            </div>
                            <a href="#" class="product__link links">
                                View deal
                            </a>
                        </div>
                    </li>
                    <li class="product__item">
                        <ul class="product__stocks">
                            <li class="product__best">
                                Bestseller
                            </li>
                            <!-- <li class="product__stoc">
                                Save 
                            </li> -->
                            <li class="product__nouv">
                                Nouveaute 
                            </li>
                        </ul>
                        <div class="product__img">
                            <img src="img/w2.png" alt="photo">
                        </div>
                        <div class="product__description">
                            Veste Hommes Blouson<br> Léger Militaire Veste
                        </div>
                        <div class="product__rating">
                            <img src="img/5.png" alt="rating">
                        </div>
                        <div class="product__down">
                            <div class="aveilable  product__aveilable">
                                <div class="aveilable__icon">
                                    <img src="img/ok.png" alt="ok">
                                </div>
                                <div class="aveilable__text">
                                    Are aveilable
                                </div>
                            </div>
                            <div class="product__old-cost">
                                £ 60,00
                            </div>
                            <div class="product__cost">
                                £ 49,99 
                            </div>
                            <a href="#" class="product__link links">
                                View deal
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="man">
                <div class="man__desc">
                    <div class="man__specification">
                        <div class="man__subtitle">
                            Aujourd’hui vous<br> economisez jusqu’a 20%
                        </div>
                        <a href="#" class="man__link links">
                            Shop man
                        </a>
                    </div>
                    <div class="man__img">
                        <img src="img/mans.png" alt="man">
                    </div>
                </div>
                <ul class="product__list">
                    <li class="product__item">
                        <ul class="product__stocks">
                            <!-- <li class="product__best">
                                Bestseller
                            </li> -->
                            <li class="product__stoc">
                                Save 
                            </li>
                            <!-- <li class="product__nouv">
                                Nouveaute 
                            </li> -->
                        </ul>
                        <div class="product__img">
                            <img src="img/m1.png" alt="photo">
                        </div>
                        <div class="product__description">
                            Veste Hommes Blouson<br> Léger Militaire Veste
                        </div>
                        <div class="product__rating">
                            <img src="img/5.png" alt="rating">
                        </div>
                        <div class="product__down">
                            <div class="aveilable  product__aveilable">
                                <div class="aveilable__icon">
                                    <img src="img/ok.png" alt="ok">
                                </div>
                                <div class="aveilable__text">
                                    Are aveilable
                                </div>
                            </div>
                            <div class="product__old-cost">
                                £ 60,00
                            </div>
                            <div class="product__cost">
                                £ 49,99 
                            </div>
                            <a href="#" class="product__link links">
                                View deal
                            </a>
                        </div>
                    </li>
                    <li class="product__item">
                        <ul class="product__stocks">
                            <li class="product__best">
                                Bestseller
                            </li>
                            <!-- <li class="product__stoc">
                                Save 
                            </li> -->
                            <li class="product__nouv">
                                Nouveaute 
                            </li>
                        </ul>
                        <div class="product__img">
                            <img src="img/m2.png" alt="photo">
                        </div>
                        <div class="product__description">
                            Veste Hommes Blouson<br> Léger Militaire Veste
                        </div>
                        <div class="product__rating">
                            <img src="img/5.png" alt="rating">
                        </div>
                        <div class="product__down">
                            <div class="aveilable  product__aveilable">
                                <div class="aveilable__icon">
                                    <img src="img/ok.png" alt="ok">
                                </div>
                                <div class="aveilable__text">
                                    Are aveilable
                                </div>
                            </div>
                            <div class="product__old-cost">
                                £ 60,00
                            </div>
                            <div class="product__cost">
                                £ 49,99 
                            </div>
                            <a href="#" class="product__link links">
                                View deal
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="new">
    <div class="container new__container">
        <div class="new__content">
            <h2 class="new__title">
                New product
            </h2>
            <ul class="product__list new-list">
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p1.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Caméra de<br> Surveillance WiFi<br> Exterieure, Netvue<br> Full HD 1080P Vidéo<br> Surveillance       
                    </div>
                    <div class="product__rating">
                        <img src="img/5.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <div class="product__old-cost">
                        £ 109,00
                    </div>
                    <div class="product__down">
                        <div class="product__cost">
                            £ 54,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p2.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Vidéoprojecteur,<br> ELEPHAS<br> Videoprojecteur<br> 4200 Lumens Mini<br> Projecteur Vidéo
                    </div>
                    <div class="product__rating">
                        <img src="img/5.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <!-- <div class="product__old-cost">
                        £ 60,00
                    </div> -->
                    <div class="product__down">
                        <div class="product__cost">
                            £ 129,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p3.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Caméra de<br> Surveillance WiFi<br> Exterieure, Netvue<br> Full HD 1080P Vidéo<br> Surveillance       
                    </div>
                    <div class="product__rating">
                        <img src="img/4.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <div class="product__old-cost">
                        £ 109,00
                    </div>
                    <div class="product__down">
                        <div class="product__cost">
                            £ 54,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p4.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Vidéoprojecteur,<br> ELEPHAS<br> Videoprojecteur<br> 4200 Lumens Mini<br> Projecteur Vidéo
                    </div>
                    <div class="product__rating">
                        <img src="img/3.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <!-- <div class="product__old-cost">
                        £ 60,00
                    </div> -->
                    <div class="product__down">
                        <div class="product__cost">
                            £ 129,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p1.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Caméra de<br> Surveillance WiFi<br> Exterieure, Netvue<br> Full HD 1080P Vidéo<br> Surveillance       
                    </div>
                    <div class="product__rating">
                        <img src="img/2.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <div class="product__old-cost">
                        £ 109,00
                    </div>
                    <div class="product__down">
                        <div class="product__cost">
                            £ 54,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p2.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Vidéoprojecteur,<br> ELEPHAS<br> Videoprojecteur<br> 4200 Lumens Mini<br> Projecteur Vidéo
                    </div>
                    <div class="product__rating">
                        <img src="img/1.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <!-- <div class="product__old-cost">
                        £ 60,00
                    </div> -->
                    <div class="product__down">
                        <div class="product__cost">
                            £ 129,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p3.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Caméra de<br> Surveillance WiFi<br> Exterieure, Netvue<br> Full HD 1080P Vidéo<br> Surveillance       
                    </div>
                    <div class="product__rating">
                        <img src="img/0.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <div class="product__old-cost">
                        £ 109,00
                    </div>
                    <div class="product__down">
                        <div class="product__cost">
                            £ 54,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
                <li class="product__item">
                    <div class="product__img">
                        <img src="img/p4.png" alt="photo">
                    </div>
                    <div class="product__description">
                        Vidéoprojecteur,<br> ELEPHAS<br> Videoprojecteur<br> 4200 Lumens Mini<br> Projecteur Vidéo
                    </div>
                    <div class="product__rating">
                        <img src="img/5.png" alt="rating">
                    </div>
                    <div class="aveilable  product__aveilable">
                        <div class="aveilable__icon">
                            <img src="img/ok.png" alt="ok">
                        </div>
                        <div class="aveilable__text">
                            Are aveilable
                        </div>
                    </div>
                    <div class="product__old-cost">
                        £ 60,00
                    </div>
                    <div class="product__down">
                        <div class="product__cost">
                            £ 129,99 
                        </div>
                        <a href="#" class="product__link links">
                            Learn more
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>




<?php get_footer();