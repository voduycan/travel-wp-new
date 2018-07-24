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

<?php wp_head(); ?>
<link href="<?php bloginfo('template_url'); ?>/travel/css/app.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/travel/css/vendor.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

 <nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">
            <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo.svg" class="d-none d-lg-block"/>
            <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo-icon.svg" class="d-block d-lg-none"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            

            <ul class="navbar-nav">
            
            <?php 
                 $menuLocations = get_nav_menu_locations(); 
                 $menuID = $menuLocations['main-nav']; 
                 $primaryNav = wp_get_nav_menu_items($menuID); 
               foreach ( $primaryNav as $navItem ) {
                  echo '<li class="nav-item"> 
                            <a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> 
                        </li>';
             }?>
             <!--
                <li class="nav-item active">
                    <a class="nav-link" href="/"><?php the_field('home', 21); ?>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/about"><?php the_field('about', 21); ?></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php the_field('how-to', 21); ?></a>
                </li>

                <li class="nav-item d-md-none d-xl-block  ">
                    <a class="nav-link" href="/faq"><?php the_field('faqs', 21); ?></a>
                </li>

                <li class="nav-item d-md-none d-xl-block  ">
                    <a class="nav-link" href="/contact"><?php the_field('contact-us', 21); ?></a>
                </li>

                <li class="nav-item dropdown  d-none d-md-block d-xl-none px-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php the_field('more', 21); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right px-4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-block d-xl-none p-3" href="#/faq"><?php the_field('faqs', 21); ?></a>
                        <a class="dropdown-item d-block d-xl-none p-3" href="/contact"><?php the_field('contact-us', 21); ?></a>
                    </div>
                </li>

-->             <?php 
                    if( have_rows('phone-outline', 21) ):
                        while ( have_rows('phone-outline', 21) ) : the_row(); 
                            $phone_logo = get_sub_field('phone-logo');
                            $phone_number = get_sub_field('phone-number');
                        endwhile;
                    endif;
                ?>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#"><img src="<?php echo $phone_logo; ?>"/>
                           <?php echo $phone_number; ?>
                    </a>
                </li>
            </ul>
            <div class="my-2 my-lg-0 ml-3 d-none d-md-block">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown signed-in-dropdown">
                        <div class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <?php 
                                if( have_rows('user-name', 21) ):
                                    while ( have_rows('user-name', 21) ) : the_row(); 
                                        $user_name = get_sub_field('user-name');
                                        $avatar = get_sub_field('avatar');
                                    endwhile;
                                endif;
                            ?>
                            <span class="text-black"> <?php echo $user_name; ?></span>
                            <img src="<?php echo $avatar; ?>" width="32" height="32" />
                        </div>
                        <?php if( have_rows('setting', 21) ): ?>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                               <?php while ( have_rows('setting', 21) ) : the_row(); 
                                    $logo = get_sub_field('logo'); 
                                    $text = get_sub_field('text');
                                ?>
                                 <a class="dropdown-item" href="#">
                                    <div class="icon">
                                        <img src="<?php echo $logo; ?>" />
                                    </div>
                                    <?php echo $text; ?>
                                 </a>
                                <?php  endwhile; ?>
                            </div>
                        <?php  endif; ?>
                        
                    </li>
                </ul>

            </div>
        </div>
        </dvi>
</nav> 

	