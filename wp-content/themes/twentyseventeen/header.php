<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TravelWards</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php wp_head(); ?>

<link href="<?php bloginfo('template_url'); ?>/travel/css/app.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/travel/css/vendor.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>



 <nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid">
    <a class="navbar-brand" href="travelwards/home">
            <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo.svg" class="d-none d-lg-block"/>
            <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo-icon.svg" class="d-block d-lg-none"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            

            <ul class="navbar-nav" id="main_nav">
                <?php if (!is_user_logged_in()): ?>
                    <li class="nav-item">
                        <a class="nav-link d-block d-md-none my-3 text-secondary" href="#">SIGN IN</a>
                    </li>
                <?php endif; ?>
            <?php 
                 $menuLocations = get_nav_menu_locations(); 
                 $menuID = $menuLocations['main-nav']; 
                 $primaryNav = wp_get_nav_menu_items($menuID); 
                
                
                foreach ( $primaryNav as $navItem ) {
                    $sss = '';
                    if($navItem->object_id == $post->ID){
                        $sss .= "active";
                    }
                    
                    foreach ( $navItem->classes as $a ) {
                        $sss .= " ".$a;
                    }
                  echo '<li class="nav-item '.$sss.'"> 
                            <a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> 

                        </li>';
                     
                }
             ?>
    
            


                <!-- <li class="nav-item dropdown  d-none d-md-block d-xl-none px-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php the_field('more', 'options'); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right px-4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-block d-xl-none p-3" href="travelwards/faq"><?php the_field('faqs', 'options'); ?></a>
                        <a class="dropdown-item d-block d-xl-none p-3" href="travelwards/contact"><?php the_field('contact-us', 'options'); ?></a>
                    </div>
                </li> -->

                <li class="nav-item d-lg-block">
                    <a class="nav-link" href="<?php echo "tel:"; the_field('header-call', 'options'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/phone-outline.svg" class="mr-1"/>
                           <?php the_field('p-number', 'options'); ?>
                    </a>
                </li>
            </ul>


        </div>
    </div>
</nav> 

	