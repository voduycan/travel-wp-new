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
    
    <div class="links py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 d-none d-md-block">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo.svg" class="footer-logo mb-4"/>
                </div>
                <div class="col-sm-3 d-none d-md-block">
                    <ul class="footer-list">
                        <li><?php the_field('mail1', 21); ?></li>
                        <li><?php the_field('mail2', 21); ?></li>
                        <li><?php the_field('phone', 21); ?></li>
                        <li><?php the_field('phone-aus', 21); ?></li>
                        <li><?php the_field('phone-usa', 21); ?></li>
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

                <div class="col-7 col-md-2">
                    <ul class="footer-list">
                    	<?php
                        	$menuLocations = get_nav_menu_locations();
                        	$menuID = $menuLocations['sup-nav'];
                        	$primaryNav = wp_get_nav_menu_items($menuID); 
                        	foreach ( $primaryNav as $navItem) {
                        		echo '<li> 
                        				<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
                        		</li>';
                        	}
                        ?>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <div class="media text-right mb-4 d-none d-md-flex">
                        <div class="media-body mr-4">
                            <?php the_field('address', 21); ?>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/location.svg" style="width:24px; height: auto;"/>
                    </div>

                    <div class="text-left text-md-right mt-2 mt-md-0">
                        <a href="#" class="social-icon mr-2"><img src="<?php echo the_field('twitter', 21); ?>" class="social-icon"/></a>
                        <a href="#" class="social-icon mr-2"><img src="<?php echo the_field('instagram', 21); ?>" class="social-icon"/></a>
                        <a href="#" class="social-icon mr-2"><img src="<?php echo the_field('linkedin', 21); ?>" class="social-icon"/></a>
                        <a href="#" class="social-icon"><img src="<?php echo the_field('facebook', 21); ?>" class="social-icon"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary py-3 d-none d-mb-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-21">
                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo-icon-white.svg" class="footer-logo-icon"/>
                </div>
            </div>
        </div>
    </div>
</footer>    <div class="modal fade sign-up-modal" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
        <form class="sign-up">
          <div class="form-row">
            <div class="form-group col-md-6">
              <select class="custom-select mr-sm-2" id="prefix">
                <option selected>Prefix</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="agency" placeholder="Travel Agency">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="first_name" placeholder="First name">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="last_name" placeholder="Last name">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="phone" placeholder="Phone">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <select class="custom-select mr-sm-2" id="country">
                <option selected>Country</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <select class="custom-select mr-sm-2" id="city">
                <option selected>City</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-21 text-center">
              <button class="btn btn-primary btn-lg">SUBMIT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>        
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
