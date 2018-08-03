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
        <a href="#" id="scroll-down"><img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/arrow-down.png" /></a>
        
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
    <section class="stats mt-5 py-3">
    <div class="container">
        <h1 class="section-title text-center">
            <strong><?php the_field('bn-title', $post->ID); ?></strong>
        </h1>

        <?php if( have_rows('numbers') ): ?>
        <div class="row justify-content-center mt-5">
        	<?php while( have_rows('numbers') ): the_row(); 

				// vars
				$logo = get_sub_field('bn-logo');
				$number = get_sub_field('bn-number');
				$sup = get_sub_field('bn-sup');
				$text = get_sub_field('bn-text');

				?>
                <?php if($logo || $number || $sup || $text): ?>
	            <div class="col-6 col-md-4 mb-5">
	                <div class="statistic text-center">
	                    <div class="number">
	                    	<?php if( $logo ): ?>
	                        <img class="video-thumbnail-placeholder" src="<?php echo $logo; ?>" alt="Travelward number"/>
	                        <?php endif; ?>
	                        <?php echo $number; ?>
	                        <span class="superscript"><?php echo $sup; ?></span>
	                    </div>
	                    <div class="text text-black-50 px-0 px-lg-5"><?php echo $text; ?></div>
	                </div>
	            </div>
                <?php endif; ?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
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

        <?php if( have_rows('why-reapeater') ): ?>
        <div class="row">
        	<?php while( have_rows('why-reapeater') ): the_row(); 

				// vars
	    		$logo = get_sub_field('why-logo');
				$title = get_sub_field('why-title2');
				$text = get_sub_field('why-text');

				?>
                <?php if($logo || $title || $text): ?>
    	            <div class="col-12 col-lg-6">
    	                <div class="media media-why mb-4 mb-md-0 mt-4">
    	                    <img class="mr-3" src="<?php echo $logo; ?>" alt="Why use Travelward">
    	                    <div class="media-body">
    	                        <h5 class="mt-0 mb-1"><strong><?php echo $title; ?></strong></h5>
    	                        <p>
    	                            <?php echo $text; ?>
    	                        </p>
    	                    </div>
    	                </div>
    	            </div>
                <?php endif; ?> 
        	<?php endwhile; ?>  
    	</div>
        <?php endif; ?>	  
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