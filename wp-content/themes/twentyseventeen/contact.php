<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php  get_header(); ?>

<div class="page-about">
    <section class="hero-banner bg-primary text-light">
    <div class="container text-center">
        <h1 class="text-light mt-5 pt-5 pb-4">
            <strong><?php the_field('ctu-title', $post->ID); ?></strong>
        </h1>
        
        <div class="row text-center justify-content-center">
            <div class="col-12 pb-5">
                <a href="#" class="btn btn-outline-light btn-lg btn-customer-support"><?php the_field('ctu-btn', $post->ID); ?></a>
                <div class="mt-3"><small><?php the_field('ctu-or', $post->ID); ?></small></div>
                <h2><?php the_field('ctu-number', $post->ID); ?></h2>
                <div><small><?php the_field('ctu-time', $post->ID); ?></small></div>
            </div>
            <a href="#" id="scroll-down"><img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/arrow-down.png" /></a>
        </div>
    </div>
        
    </div>
    <div class="divider">
        <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-3.jpg" />
    </div>
</section>    <section class="contact my-5 mt-lg-4" id="contact">
    <div class="container content-center">
        <div class="row justify-content-around my-mr">
            <div class="col-12 col-md-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/location.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('c-location', $post->ID); ?></strong></h5>
                        <small><?php the_field('c-location-text', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/customer-service.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('c-email', $post->ID); ?></strong></h5>
                        <small><?php the_field('c-email-text', $post->ID); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/travel/assets/icons/phone.svg" alt="Location">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><strong><?php the_field('c-call', $post->ID); ?></strong></h5>
                        <small><?php the_field('c-call-text', $post->ID); ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <section class="our-team py-3" id="our-team">
    <div class="container">
        <h1 class="section-title text-center">
            <strong> <?php the_field('mt-title', 424); ?></strong>
        </h1>

    	<?php if( have_rows('team', 424) ): ?>
        <div class="row mt-5">
			<?php while( have_rows('team', 424) ): the_row(); 

				// vars
				$avatar = get_sub_field('team-avatar');
				$name = get_sub_field('team-name');
				$work = get_sub_field('team-work');
				$mail = get_sub_field('team-mail');
				?>
	            <div class="col-6 col-md-4">
	                <a href="#" class="card card-team d-flex align-items-center text-center my-3">
	                    <div class="avatar">
	                        <img class="video-thumbnail-placeholder" src="<?php echo $avatar; ?>" alt="Travelward team">
	                    </div>
	                    <div class="card-body">
	                        <h5 class="card-title"><strong><?php echo $name; ?></strong></h5>
	                        <h6><?php echo $work; ?></h6>
	                        <small><?php echo $mail; ?></small>
	                    </div>
	                </a>
	            </div>
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
                scrollTop: $("#contact").offset().top
            }, 1000);
        });
        $('.hero-banner').height( $(window).height() - $('.navbar').height() - 250);
    });
</script>