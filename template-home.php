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
                            <img src="<?php echo $logotech_options['excellenceimg1']['url']; ?>" alt="icon">
                        </div>
                        <div class="excellence__text">
                            <?php echo $logotech_options['excellencetext1']; ?>
                        </div>
                    </div>
                </li>
                <li class="excellence__item">
                    <div class="excellence__content">
                        <div class="excellence__icon">
                            <img src="<?php echo $logotech_options['excellenceimg2']['url']; ?>" alt="icon">
                        </div>
                        <div class="excellence__text">
                            <?php echo $logotech_options['excellencetext2']; ?>
                        </div>
                    </div>
                </li>
                <li class="excellence__item">
                    <div class="excellence__content">
                        <div class="excellence__icon">
                            <img src="<?php echo $logotech_options['excellenceimg3']['url']; ?>" alt="icon">
                        </div>
                        <div class="excellence__text">
                            <?php echo $logotech_options['excellencetext3']; ?>
                        </div>
                    </div>
                </li>
                <li class="excellence__item">
                    <div class="excellence__content">
                        <div class="excellence__icon">
                            <img src="<?php echo $logotech_options['excellenceimg4']['url']; ?>" alt="icon">
                        </div>
                        <div class="excellence__text">
                            <?php echo $logotech_options['excellencetext4']; ?>
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
                <?php echo $logotech_options['titlepop']; ?>
            </h2>
            <ul class="popular__list">
                <li class="popular__item">
                    <a href="<?php echo get_option("siteurl"); ?>/drones/" class="popular__link links">
                        <div class="popular__img">
                            <img src="<?php echo $logotech_options['popimg1']['url']; ?>" alt="photo">
                        </div>                            
                        <div class="popular__subtitle">
                            <?php echo $logotech_options['poptitle1']; ?>
                        </div>
                        <div class="popular__text">
                            <?php echo $logotech_options['poptext1']; ?>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a href="<?php echo get_option("siteurl"); ?>/serurity/" class="popular__link links">
                        <div class="popular__img">
                            <img src="<?php echo $logotech_options['popimg2']['url']; ?>" alt="photo">
                        </div>
                        <div class="popular__subtitle">
                            <?php echo $logotech_options['poptitle2']; ?>
                        </div>
                        <div class="popular__text">
                            <?php echo $logotech_options['poptext2']; ?>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a href="<?php echo get_option("siteurl"); ?>/smartphone/" class="popular__link links">
                        <div class="popular__img">
                            <img src="<?php echo $logotech_options['popimg3']['url']; ?>" alt="photo">
                        </div>
                        <div class="popular__subtitle">
                            <?php echo $logotech_options['poptitle3']; ?>
                        </div>
                        <div class="popular__text">
                            <?php echo $logotech_options['poptext3']; ?>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a href="<?php echo get_option("siteurl"); ?>/headphones/" class="popular__link links">
                        <div class="popular__img">
                            <img src="<?php echo $logotech_options['popimg4']['url']; ?>" alt="photo">
                        </div>
                        <div class="popular__subtitle">
                            <?php echo $logotech_options['poptitle4']; ?>
                        </div>
                        <div class="popular__text">
                            <?php echo $logotech_options['poptext4']; ?>
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
                <?php echo $logotech_options['title1']; ?>
            </h2>
            <ul class="bestseller__list">


                <?php $bestseller = new WP_Query( array(
                        'post_type' => 'bestseller',
                        'posts_per_page'=> -1
                    ));
                    if ( $bestseller->have_posts() ) :
                        while ( $bestseller->have_posts() ) :  $bestseller->the_post(); ?>

                            <li class="bestseller__item">
                                <ul class="bestseller__stocks">

                                    <?php if(get_metadata('post', get_the_ID(),'logo_best_best',true)) { ?>
                                        <li class="bestseller__best">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_best_best',true); ?>
                                        </li>
                                    <?php } ?>
                                    <?php if(get_metadata('post', get_the_ID(),'logo_best_save',true)) { ?>
                                        <li class="bestseller__stoc">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_best_save',true); ?>
                                        </li>
                                    <?php } ?>
                                    <?php if(get_metadata('post', get_the_ID(),'logo_best_nouv',true)) { ?>
                                        <li class="bestseller__nouv">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_best_nouv',true); ?>
                                        </li>
                                    <?php } ?>

                                </ul>
                                <div class="bestseller__img">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'card-thumb'); ?>
                                </div>
                                <div class="bestseller__desc">
                                    <?php the_title(); ?>
                                </div>
                                <?php if(get_metadata('post', get_the_ID(),'logo_best_rate',true)) { ?>
                                    <div class="bestseller__rating">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo get_metadata('post', get_the_ID(),'logo_best_rate',true); ?>.png" alt="rating">
                                    </div>
                                <?php } ?>
                                <div class="bestseller__down">
                                    <?php if(get_metadata('post', get_the_ID(),'logo_best_avi',true)) { ?>
                                        <div class="aveilable  bestseller__aveilable">
                                            <div class="aveilable__icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ok.png" alt="ok">
                                            </div>
                                            <div class="aveilable__text">
                                                <?php echo get_metadata('post', get_the_ID(),'logo_best_avi',true); ?>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if(get_metadata('post', get_the_ID(),'logo_best_old',true)) { ?>
                                        <div class="bestseller__old-cost">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_best_old',true); ?>
                                        </div>
                                    <?php } ?>

                                    <?php if(get_metadata('post', get_the_ID(),'logo_best_new',true)) { ?>
                                        <div class="bestseller__cost">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_best_new',true); ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <div class="bestseller__link">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </li>
                            
                        <?php endwhile;
                        
                        wp_reset_postdata();
                        
                    endif;
                ?>
            
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
                            <?php echo $logotech_options['forwoman']; ?>
                        </div>
                        <a href="<?php echo get_option("siteurl"); ?>/woman/" class="woman__link links">
                            <?php echo $logotech_options['forwomanlink']; ?>
                        </a>
                    </div>
                    <div class="woman__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/womans.png" alt="womans">
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
                            <?php echo $logotech_options['forman']; ?>
                        </div>
                        <a href="<?php echo get_option("siteurl"); ?>/man/" class="man__link links">
                            <?php echo $logotech_options['formanlink']; ?>
                        </a>
                    </div>
                    <div class="man__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mans.png" alt="man">
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
                <?php echo $logotech_options['title2']; ?>
            </h2>
            <ul class="product__list new-list">

                <?php $newproduct = new WP_Query( array(
                        'post_type' => 'newproduct',
                        'posts_per_page'=> -1
                    ));
                    if ( $newproduct->have_posts() ) :
                        while ( $newproduct->have_posts() ) :  $newproduct->the_post(); ?>

                            <li class="product__item">
                                <div class="product__img">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'card-thumb'); ?>
                                </div>
                                <div class="product__description">
                                    <?php the_title(); ?>   
                                </div>
                                <?php if(get_metadata('post', get_the_ID(),'logo_new_rate',true)) { ?>
                                    <div class="product__rating">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo get_metadata('post', get_the_ID(),'logo_new_rate',true); ?>.png" alt="rating">
                                    </div>
                                <?php } ?>
                                <?php if(get_metadata('post', get_the_ID(),'logo_new_avi',true)) { ?>
                                    <div class="aveilable  product__aveilable">
                                        <div class="aveilable__icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ok.png" alt="ok">
                                        </div>
                                        <div class="aveilable__text">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_new_avi',true); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product__old-cost">
                                    <?php if(get_metadata('post', get_the_ID(),'logo_new_old',true)) { ?>
                                        <?php echo get_metadata('post', get_the_ID(),'logo_new_old',true); ?>
                                    <?php } ?>
                                </div>
                                <div class="product__down">
                                    <?php if(get_metadata('post', get_the_ID(),'logo_new_new',true)) { ?>
                                        <div class="product__cost">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_new_new',true); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="product__link">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </li>
                            
                        <?php endwhile;
                        
                        wp_reset_postdata();
                        
                    endif;
                ?>
               
            </ul>
        </div>
    </div>
</section>

<?php get_footer();