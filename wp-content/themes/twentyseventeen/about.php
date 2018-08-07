<?php
/**
 * Template Name: about
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
 <?php  get_header(); ?>
<div class="page-about">
    <section class="hero-banner bg-primary text-light" style="height: 968px;">
    <div class="container text-center">
        <h1 class="text-light  pt-5 pb-4">
            <strong><?php the_field('about-us', $post->ID); ?></strong>
        </h1>
        <p class="px-2 px-md-5">
        <?php the_field('about-us-text', $post->ID); ?>
        </p>
        <a href="#" id="scroll-down"><img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/angle-arrow-down.svg" /></a>
        
    </div>
    <div class="divider">
        <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-3.jpg" />
    </div>
</section>    <section class="our-team py-3" id="our-team">
    <div class="container">
        <h1 class="section-title text-center">
            <strong> <?php the_field('mt-title', $post->ID); ?></strong>
        </h1>

    	<?php if( have_rows('team', $post->ID) ): ?>
        <div class="row mt-5">
			<?php while( have_rows('team', $post->ID) ): the_row(); 

				// vars
				$avatar = get_sub_field('team-avatar');
				$name = get_sub_field('team-name');
				$work = get_sub_field('team-work');
				$mail = get_sub_field('team-mail');
				?>
                <?php if( $avatar || $name || $work || $mail ): ?>
    	            <div class="col-6 col-md-4">
    	                <div  class="card card-team d-flex align-items-center text-center my-3">
                            <?php if( $avatar ): ?>
        	                    <div class="avatar">
        	                        <img class="video-thumbnail-placeholder" src="<?php echo $avatar; ?>" alt="Travelward team">
        	                    </div>
                            <?php endif; ?>
                            
    	                    <div class="card-body">
    	                        <h5 class="card-title"><strong><?php echo $name; ?></strong></h5>
    	                        <h6><?php echo $work; ?></h6>
    	                        <small>
                                    <a href="<?php echo "mailto:" .$mail; ?>"> 
                                        <?php echo $mail; ?> 
                                    </a>
                                </small>
    	                    </div>
    	                </div>
    	            </div>
                <?php endif; ?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>	
    </div>
</section>
    <section class="stats mt-5 py-3">
    <div class="container">
        <h1 class="section-title text-center">
            <strong><?php the_field('bn-title', $post->ID); ?></strong>
        </h1>
        <div class="row justify-content-center mt-5">
            <div class="col-6 col-md-4 mb-5">
                <div class="statistic text-center">
                    <div class="number">
                        <img class="video-thumbnail-placeholder" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/globe.svg" alt="Travelward number"/>
                        <?php the_field('abn-100', $post->ID); ?>
                        <span class="superscript"><?php the_field('100-sup', $post->ID); ?></span>
                    </div>
                    <div class="text text-black-50 px-0 px-lg-5"><?php the_field('100-text', $post->ID); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-5">
                <div class="statistic text-center">
                    <div class="number">
                        <?php the_field('abn-19', $post->ID); ?>
                        <span class="superscript"><?php the_field('19-sup', $post->ID); ?></span>
                    </div>
                    <div class="text text-black-50 px-0 px-lg-5"><?php the_field('19-text', $post->ID); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-5">
                <div class="statistic text-center">
                    <div class="number">
                        <img class="video-thumbnail-placeholder" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/agent.svg" alt="Travelward number"/>
                            <?php the_field('abn-300', $post->ID); ?>
                        <span class="superscript"><?php the_field('300-sup', $post->ID); ?></span>
                    </div>
                    <div class="text text-black-50 px-0 px-lg-5"><?php the_field('300-text', $post->ID); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-5">
                <div class="statistic text-center">
                    <div class="number">
                        <img class="video-thumbnail-placeholder" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/service.svg" alt="Travelward number"/>
                        <?php the_field('abn-98', $post->ID); ?>
                        <span class="superscript"><?php the_field('98-sup', $post->ID); ?></span>
                    </div>
                    <div class="text text-black-50 px-0 px-lg-5"><?php the_field('98-text', $post->ID); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-5">
                <div class="statistic text-center">
                    <div class="number">
                        <?php the_field('abn-650k', $post->ID); ?>
                        <span class="superscript"><?php the_field('650k-sup', $post->ID); ?></span>
                    </div>
                    <div class="text text-black-50 px-0 px-lg-5"><?php the_field('650k-text', $post->ID); ?></div>
                </div>
            </div>
            <div class="col-6 col-md-4 mb-5">
                <div class="statistic text-center">
                    <div class="number">
                        <?php the_field('abn-02', $post->ID); ?>
                        <span class="superscript"><?php the_field('02-sup', $post->ID); ?></span>
                    </div>
                    <div class="text text-black-50 px-0 px-lg-5"><?php the_field('02-text', $post->ID); ?></div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<div class="divider">
    <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-2.svg" />
</div>    
<section class="why-use mt-5 mt-lg-4 pb-5">
    <div class="container">
        <h1 class="section-title text-center mb-4">
            <strong><?php the_field('why-title', $post->ID); ?></strong>
        </h1>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="media media-why mb-4 mb-md-0 mt-4">
                    <img class="mr-4" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/why-search.svg" alt="Why use Travelward">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('search-title', $post->ID); ?></strong></h5>
                        <p>
                           <?php the_field('search-text', $post->ID); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="media media-why mb-4 mb-md-0 mt-4">
                    <img class="mr-4" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/why-voucher.svg" alt="Why use Travelward">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('vouchers-title', $post->ID); ?></strong></h5>
                        <p>
                            <?php the_field('vouchers-text', $post->ID); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="media media-why mb-4 mb-md-0 mt-4">
                    <img class="mr-4" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/why-customer.svg" alt="Why use Travelward">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('service-title', $post->ID); ?></strong></h5>
                        <p>
                            <?php the_field('service-text', $post->ID); ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="media media-why mb-4 mb-md-0 mt-4">
                    <img class="mr-4" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/why-free.svg" alt="Why use Travelward">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('free-title', $post->ID); ?></strong></h5>
                        <p>
                            <?php the_field('free-text', $post->ID); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="media media-why mb-4 mb-md-0 mt-4">
                    <img class="mr-4" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/why-commission.svg" alt="Why use Travelward">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('increased-title', $post->ID); ?></strong></h5>
                        <p>
                            <?php the_field('increased-text', $post->ID); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="media media-why mb-4 mb-md-0 mt-4">
                    <img class="mr-4" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/why-ease.svg" alt="Why use Travelward">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('ease-title', $post->ID); ?></strong></h5>
                        <p>
                            <?php the_field('ease-text', $post->ID); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="divider">
    <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-2.svg" />
</div>    <section class="assistant mt-5 mt-lg-4 pb-3">
    <div class="container">
        <?php the_field('ab-call', $post->ID); ?>
    </div>
</section>    
<section class="partner pt-3">
    <div class="container">

    	<?php if( have_rows('a-logo', $post->ID) ): ?>
        <div class="row justify-content-center">
        	<?php while( have_rows('a-logo', $post->ID) ): the_row(); 

				// vars
				$image = get_sub_field('a-image', $post->ID);
				?>
				<?php if( $image ): ?>
		            <div class="col-4 col-md-2">
		                <div class="partner-icon mb-4">
		                    <img src="<?php echo $image; ?>" alt="TravelWard Partners">
		                </div>
		            </div>
	            <?php endif; ?>
            <?php endwhile; ?>
        </div>
    	<?php endif; ?>
    </div>
</section>
</div>
 <?php  get_footer(); ?>
 <script>
    $(document).ready(function (){
        $("#scroll-down").click(function() {
            $('html, body').animate({
                scrollTop: $("#our-team").offset().top
            }, 1000);
        });

        $('.hero-banner').height( $(window).height() - $('.navbar').height());
    });
</script>