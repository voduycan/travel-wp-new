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
    <section class="hero-banner bg-primary text-light my-banner">
    <div class="container text-center">
        <?php the_field('ct-editor', $post->ID); ?>
        <div class="row text-center justify-content-center">
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
            <div class="col-12 col-md-4">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-2" src="<?php the_field('cc-location', $post->ID); ?>" alt="Location">
                    <div class="media-body">
                      <?php the_field('c-location-text', $post->ID); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-2" src="<?php the_field('cc-email', $post->ID); ?>" alt="email">
                    <div class="media-body">
                      <?php the_field('c-email-text', $post->ID); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="media media-contact mb-4 mb-md-0">
                    <img class="mr-2" src="<?php the_field('cc-call', $post->ID); ?>" alt="call">
                    <div class="media-body">
                      <?php the_field('c-call-text', $post->ID); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <section class="our-team py-3" id="our-team">
    <div class="container">
        <h1 class="section-title text-center">
            <strong> <?php the_field('cm-title', $post->ID); ?></strong>
        </h1>

    	<?php if( have_rows('cm-team', $post->ID) ): ?>
        <div class="row mt-5">
			<?php while( have_rows('cm-team', $post->ID) ): the_row(); 

				// vars
				$avatar = get_sub_field('cm-avatar');
				$name = get_sub_field('cm-name');
				$work = get_sub_field('cm-work');
				$mail = get_sub_field('cm-mail');
				?>
                <?php if( $avatar || $name || $work || $mail ): ?>
    	            <div class="col-6 col-md-4">
    	                <a href="#" class="card card-team d-flex align-items-center text-center my-3">
                            <?php if( $avatar ): ?>
                                <div class="avatar">
        	                        <img class="video-thumbnail-placeholder" src="<?php echo $avatar; ?>" alt="Travelward team">
        	                    </div>
                            <?php endif; ?> 
    	                    <div class="card-body">
    	                        <h5 class="card-title"><strong><?php echo $name; ?></strong></h5>
    	                        <h6><?php echo $work; ?></h6>
    	                        <small><?php echo $mail; ?></small>
    	                    </div>
    	                </a>
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
                scrollTop: $("#contact").offset().top
            }, 1000);
        });
        $('.hero-banner').height( $(window).height() - $('.navbar').height() - 250);
    });
</script>