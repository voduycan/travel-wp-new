<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

  <footer>
    
    <div class="links py-5 pd-l-r-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 d-none d-md-block" style="padding-right: 0;">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo.svg" class="footer-logo mb-4"/>
                </div>
                <div class="col-sm-4 col-lg-3 d-none d-md-block">
                    <ul class="footer-list">
                        <li><?php the_field('mail1', 'options'); ?></li>
                        <li><?php the_field('mail2', 'options'); ?></li>
                        <li><?php the_field('phone', 'options'); ?></li>
                        <li><?php the_field('phone-aus', 'options'); ?></li>
                        <li><?php the_field('phone-usa', 'options'); ?></li>
                    </ul>
                </div>

                <div class="col-5 col-md-2">
                    <ul class="footer-list">
                	<?php 
						$menuLocations = get_nav_menu_locations(); 
						$menuID = $menuLocations['footer-nav']; 
						$primaryNav = wp_get_nav_menu_items($menuID); 
		               	foreach ( $primaryNav as $navItem ) {
						echo '<li> 
		                        <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> 
		                    </li>';
		             }?>
	         
                    </ul>
                </div>

                <div class=" col-7 col-md-4">
                    <div class="row">
	                 	<div class="col-12 col-md-6">
		                    <div class="media text-right d-none d-md-flex">
		                        <div class="media-body mr-4">
		                            <?php the_field('address', 'options'); ?>
		                        </div>
		                        <img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/location.svg" style="width:24px; height: auto;"/>
		                    </div>

		                    <div class="text-left text-md-right mt-2 mt-md-0">
		                        <a target="_blank" href="<?php the_field('link-twitter', 'options'); ?>" class="social-icon mr-2"><img src="<?php the_field('twitter', 'options'); ?>" class="mr-b-2 social-icon"/></a>
		                        <a target="_blank" href="<?php the_field('link-instagram', 'options'); ?>" class="social-icon mr-2"><img src="<?php the_field('instagram', 'options'); ?>" class="mr-b-2 social-icon"/></a>
		                        <a target="_blank" href="<?php the_field('link-linkedin', 'options'); ?>" class="social-icon mr-2"><img src="<?php the_field('linkedin', 'options'); ?>" class="mr-b-2 social-icon"/></a>
		                        <a target="_blank" href="<?php the_field('link-facebook', 'options'); ?>" class="social-icon"><img src="<?php the_field('facebook', 'options'); ?>" class="mr-b-2 social-icon"/></a>
		                    </div>
		                </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="bg-primary py-3 d-none d-mb-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-'options'">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo-icon-white.svg" class="footer-logo-icon"/>
                </div>
            </div>
        </div>
    </div>
</footer>    
    <script src='<?php bloginfo('template_url'); ?>/travel/js/libs/jquery.js'></script>
    <script src='<?php bloginfo('template_url'); ?>/travel/js/libs/popper.js'></script>
    <script src='<?php bloginfo('template_url'); ?>/travel/js/libs/bootstrap.js'></script>
    <script src="<?php bloginfo('template_url'); ?>/travel/js/libs/aos.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/travel/js/libs/bootstrap-datepicker.js"></script>
    
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
		
<?php wp_footer(); ?>

</body>
</html>
