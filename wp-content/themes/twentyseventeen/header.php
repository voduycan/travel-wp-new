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
                <li class="nav-item d-lg-block">
                    <a class="nav-link" href="<?php if(get_field('header-call', 'options')){ echo "tel:"; the_field('header-call', 'options');} ?>">
                        <img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/phone-outline.svg" class="mr-1"/>
                           <?php the_field('p-number', 'options'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> 

	