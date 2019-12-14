<?php

get_header();

?>

<section class="new">
    <div class="container new__container">
        <div class="new__content">
            <h2 class="new__title">
                <?php echo $logotech_options['title4']; ?>
            </h2>
            <ul class="product__list new-list">

                <?php $serurity = new WP_Query( array(
                        'post_type' => 'serurity',
                        'posts_per_page'=> -1
                    ));
                    if ( $serurity->have_posts() ) :
                        while ( $serurity->have_posts() ) :  $serurity->the_post(); ?>

                            <li class="product__item">
                                <ul class="bestseller__stocks">

                                    <?php if(get_metadata('post', get_the_ID(),'logo_serurity_best',true)) { ?>
                                        <li class="bestseller__best">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_serurity_best',true); ?>
                                        </li>
                                    <?php } ?>
                                    <?php if(get_metadata('post', get_the_ID(),'logo_serurity_save',true)) { ?>
                                        <li class="bestseller__stoc">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_serurity_save',true); ?>
                                        </li>
                                    <?php } ?>
                                    <?php if(get_metadata('post', get_the_ID(),'logo_serurity_nouv',true)) { ?>
                                        <li class="bestseller__nouv">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_serurity_nouv',true); ?>
                                        </li>
                                    <?php } ?>

                                </ul>
                                <div class="product__img">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'card-thumb'); ?>
                                </div>
                                <div class="product__description">
                                    <?php the_title(); ?>   
                                </div>
                                <?php if(get_metadata('post', get_the_ID(),'logo_serurity_rate',true)) { ?>
                                    <div class="product__rating">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo get_metadata('post', get_the_ID(),'logo_serurity_rate',true); ?>.png" alt="rating">
                                    </div>
                                <?php } ?>
                                <?php if(get_metadata('post', get_the_ID(),'logo_serurity_avi',true)) { ?>
                                    <div class="aveilable  product__aveilable">
                                        <div class="aveilable__icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ok.png" alt="ok">
                                        </div>
                                        <div class="aveilable__text">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_serurity_avi',true); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product__old-cost">
                                    <?php if(get_metadata('post', get_the_ID(),'logo_serurity_old',true)) { ?>
                                        <?php echo get_metadata('post', get_the_ID(),'logo_serurity_old',true); ?>
                                    <?php } ?>
                                </div>
                                <div class="product__down">
                                    <?php if(get_metadata('post', get_the_ID(),'logo_serurity_new',true)) { ?>
                                        <div class="product__cost">
                                            <?php echo get_metadata('post', get_the_ID(),'logo_serurity_new',true); ?>
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