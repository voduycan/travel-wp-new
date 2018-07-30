<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
 <?php  get_header(); ?>

<div class="page-home">
    <section class="hero-banner bg-primary text-light">
    <div class="container">
        <h1 class="text-light text-center py-5 mb-5">
            <strong><?php the_field('panel-title', $post->ID); ?></strong>
        </h1>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center" data-aos="fade-up">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/building.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong><?php the_field('image1-text', $post->ID); ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/rate.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong><?php the_field('image2-text', $post->ID); ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/price.svg" alt="Wholesalers">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong><?php the_field('image3-text', $post->ID); ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-6 d-block d-md-none">
                <a href="#" class="btn btn-secondary btn-rounded btn-block btn-lg">SIGN UP TODAY</a>
            </div>
        </div>
    </div>
    <div class="divider">
        <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-1.jpg" />
    </div>
</section>    <section class="contact mt-5 mt-lg-4">
    <div class="container content-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/location.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('c-location', $post->ID); ?></strong></h5>
                        <small><?php the_field('c-location-text', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/customer-service.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('c-email', $post->ID); ?></strong></h5>
                        <small><?php the_field('c-email-text', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/phone.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('c-call', $post->ID); ?></strong></h5>
                        <small><?php the_field('c-call-text', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                <button class="btn btn-lg btn-outline-primary btn-rounded mt-4 mt-lg-2 contact-button"><?php the_field('contact-btn', $post->ID); ?></button>
            </div>
        </div>
    </div>
</section>    <section class="partner pt-5">
    <div class="container">
        <h4 class="text-uppercase text-center my-5 text-trusted-by">
            <?php the_field('trusted-title', $post->ID) ?>
        </h4>

        <?php if( have_rows('logo', 424) ): ?>
        <div class="row justify-content-center">
            <?php while( have_rows('logo', 424) ): the_row(); 

                $image = get_sub_field('image', 424);

            ?>
            <div class="col-4 col-md-2">

                <div class="partner-icon mb-4">

                    <img src="<?php echo $image; ?>" />

                </div>

            </div>

            <?php endwhile; ?>

        </div>

        <?php endif; ?>

    </div>
</section>    
<section class="own-price full-width-feature my-3 py-5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="hero-image d-none d-md-block">
                <img src="<?php the_field('macbook', $post->ID); ?>" data-aos="fade-right"/>
            </div>
            
            <div class="col-12 col-md-6">
                <h3><strong><?php the_field('own-title', $post->ID); ?></strong></h3>
                <p class="my-5">
                    <strong><?php the_field('own-strong', $post->ID); ?></strong> <?php the_field('own-normal', $post->ID); ?>
                </p>
                <div class="d-md-none">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/macbook.png"/>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <div class="card card-feature d-flex align-items-start" data-aos="fade-up">
                            <img class="card-img-top" src="<?php the_field('own-chart1', $post->ID); ?>" alt="Wholesalers">
                            <div class="card-body">
                                <h5 class="card-title mt-4"><strong><?php the_field('own-chart1-text', $post->ID); ?> </strong></h5>
                                <span class="badge badge-pill badge-secondary">&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-feature d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
                            <img class="card-img-top" src="<?php the_field('own-chart2', $post->ID); ?>" alt="Wholesalers">
                            <div class="card-body">
                                <h5 class="card-title mt-4"><strong><?php the_field('own-chart2-text', $post->ID); ?></strong></h5>
                                <span class="badge badge-pill badge-primary">&nbsp;</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-feature d-flex align-items-start" data-aos="fade-up" data-aos-delay="400">
                            <img class="card-img-top" src="<?php the_field('own-chart3', $post->ID); ?>" alt="Wholesalers">
                            <div class="card-body">
                                <h5 class="card-title mt-4"><strong><?php the_field('own-chart3-text', $post->ID); ?></strong></h5>
                                <span class="badge badge-pill badge-primary">&nbsp;</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <section class="stats  my-3 py-3">
    <div class="container">

    <?php if( have_rows('statictis') ): ?>

        <div class="row justify-content-center">

            <?php while( have_rows('statictis') ): the_row(); 

                // vars
                $s_number = get_sub_field('s-number');
                $s_sup = get_sub_field('s-sup');
                $s_name = get_sub_field('s-name');

            ?>
                <div class="col-6 col-md-3 border-right mb-4 my-statictis">
                    <div class="statistic text-center">
                        <div class="number"><?php echo $s_number; ?><span class="superscript"><?php echo $s_sup; ?></span></div>
                        <div class="text text-black-50"><?php echo $s_name; ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    </div>
</section>    <section class="too-good full-width-feature mt-3 pt-5">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <h3><strong><?php the_field('t-title', $post->ID); ?></strong></h3>
                <p class="my-5">
                    <?php the_field('t-text', $post->ID); ?>
                </p>
                <div class="pt-0 pt-lg-5 d-none d-md-block">
                    <a href="#" class="btn btn-secondary btn-rounded mr-0 mr-md-4"><?php the_field('t-find', $post->ID); ?></a>
                    <a href="#" class="btn btn-outline-primary btn-rounded mt-4 mt-lg-0"><?php the_field('t-call', $post->ID); ?></a>
                </div>
            </div>
            <div class="hero-image d-none d-md-block">
                <img src="<?php the_field('t-image', $post->ID); ?>" class=" mt-5 ml-5" data-aos="fade-left"/>
            </div>
            <div class="col-12 d-md-none">
                <img src="<?php the_field('t-image-mobile', $post->ID); ?>"/>
            </div>
            <div class="col-12 d-md-none justify-content-center text-center">
                <a href="#" class="btn btn-lg btn-secondary btn-rounded"><?php the_field('t-find', $post->ID); ?></a>
            </div>
        </div>
    </div>
</section>
<div class="divider">
    <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-2.svg" />
</div>    <section class="how-it-works">
    <div class="container">
        <h1 class="section-title text-center">
            <strong><?php the_field('h-title', $post->ID); ?></strong>
        </h1>
        <p class="section-description text-center">
            <?php the_field('h-text', $post->ID); ?>
        </p>
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center my-2 my-md-5" data-aos="fade-up">
                    <img class="card-img-top" src="<?php the_field('h-card1-img', $post->ID); ?>" alt="Wholesalers">
                    <div class="card-body">
                        <h4 class="card-title text-center"><strong><?php the_field('h-card1-title', $post->ID); ?></strong></h4>
                        <p class="text-center"><?php the_field('h-card1-text', $post->ID); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center my-2 my-md-5" data-aos="fade-up" data-aos-delay="500">
                    <img class="card-img-top" src="<?php the_field('h-card2-img', $post->ID); ?>" alt="Wholesalers">
                    <div class="card-body">
                        <h4 class="card-title text-center"><strong><?php the_field('h-card2-title', $post->ID); ?></strong></h4>
                        <p class="text-center"><?php the_field('h-card2-text', $post->ID); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-feature d-flex align-items-center my-2 my-md-5" data-aos="fade-up" data-aos-delay="1000">
                    <img class="card-img-top" src="<?php the_field('h-card3-img', $post->ID); ?>" alt="Wholesalers">
                    <div class="card-body">
                        <h4 class="card-title text-center"><strong><?php the_field('h-card3-title', $post->ID); ?></strong></h4>
                        <p class="text-center"><?php the_field('h-card3-text', $post->ID); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <section class="trust-you">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <div class="p-5 bg-light text-center">
                <img class="trust-you-image" src="<?php bloginfo('template_url'); ?>/travel/assets/trust-you.svg" alt="Trust You">
                <p><?php the_field('trust', $post->ID); ?></p>
                </div>
            </div> 
        </div>
    </div>
</section>
    <section class="how-to-use py-5">
    <div class="container">
        <h1 class="section-title text-center">
            <strong><?php the_field('use-title', $post->ID); ?></strong>
        </h1>
        <p class="section-description text-center">
        <?php the_field('use-text', $post->ID); ?>
        </p>
        <div class="row">
            <div class="col-sm-12 col-md-4 mr-0-auto">
                <a href="#" class="card card-video d-flex align-items-center my-5">
                    <div class="video">
                        <img class="video-thumbnail-placeholder" src="<?php the_field('video1-img', $post->ID); ?>" alt="Video">
                        <button class="play-button"><img src="<?php bloginfo('template_url'); ?>/travel/assets/play-button.svg" alt="Play"></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php the_field('video1', $post->ID); ?></h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 d-none d-md-block">
                <a href="#" class="card card-video d-flex align-items-center my-5">
                    <div class="video">
                        <img class="video-thumbnail-placeholder" src="<?php the_field('video2-img', $post->ID); ?>" alt="Video">
                        <button class="play-button"><img src="<?php bloginfo('template_url'); ?>/travel/assets/play-button.svg" alt="Play"></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php the_field('video2', $post->ID); ?></h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 d-none d-md-block">
                <a href="#" class="card card-video d-flex align-items-center my-5">
                    <div class="video">
                        <img class="video-thumbnail-placeholder" src="<?php the_field('video3-img', $post->ID); ?>" alt="Video">
                        <button class="play-button"><img src="<?php bloginfo('template_url'); ?>/travel/assets/play-button.svg" alt="Play"></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php the_field('video3', $post->ID); ?></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="#" class="btn btn-primary btn-rounded browse-video"><?php the_field('browse-video', $post->ID); ?></a>
        </div>
    </div>
    <div class="divider">
        <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-2.svg" />
    </div>
</section>
    <section class="partner pt-5">
    <div class="container">
        <h1 class="section-title text-center mb-5">
            <strong><?php the_field('from-title', $post->ID); ?></strong>
        </h1>

         <?php if( have_rows('logo', 424) ): ?>
        <div class="row justify-content-center">
            <?php while( have_rows('logo', 424) ): the_row(); 

                $image = get_sub_field('image', 424);

            ?>
            <div class="col-4 col-md-2">

                <div class="partner-icon mb-4">

                    <img src="<?php echo $image; ?>" />

                </div>

            </div>

            <?php endwhile; ?>

        </div>

        <?php endif; ?>

        
        <h5 class="text-black-50 text-center mb-5">
            <strong><?php the_field('from-text', $post->ID); ?> </strong>
        </h5>
    </div>
</section>    <div class="request-call py-3 d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex align-items-center justify-content-center">
                <h4 class="m-0 mr-2 p-0"><?php the_field('question', $post->ID); ?></h4>
                <a href="#" class="btn btn-outline-primary btn-rounded"><?php the_field('request', $post->ID); ?></a>
            </div>
        </div>
    </div>
</div></div>

 <?php  get_footer(); ?>