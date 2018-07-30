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
    <a class="navbar-brand" href="travelwards/home">
            <img src="<?php the_field('main-logo', 'options'); ?>" class="d-none d-lg-block"/>
            <img src="<?php the_field('sup-logo', 'options'); ?>" class="d-block d-lg-none"/>
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
    
            


                <li class="nav-item dropdown  d-none d-md-block d-xl-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php the_field('more', 'options'); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right px-4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-block d-xl-none p-3" href="travelwards/faq"><?php the_field('faqs', 'options'); ?></a>
                        <a class="dropdown-item d-block d-xl-none p-3" href="travelwards/contact"><?php the_field('contact-us', 'options'); ?></a>
                    </div>
                </li>

                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#"><img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/phone-outline.svg" class="mr-1"/>
                           <?php the_field('p-number', 'options'); ?>
                    </a>
                </li>
            </ul>

             <?php if (is_user_logged_in()): ?>
            <div class="my-2 my-lg-0 ml-3 d-none d-md-block">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown signed-in-dropdown">
                        <div class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <?php 
                                if( have_rows('user-name', 'options') ):
                                    while ( have_rows('user-name', 'options') ) : the_row(); 
                                        $user_name = get_sub_field('user-name');
                                        $avatar = get_sub_field('avatar');
                                    endwhile;
                                endif;
                            ?>
                            <span class="text-black"><?php the_field('user', 'options'); ?></span>
                            <img src="<?php the_field('user-avatar', 'options'); ?>" width="32" height="32" />
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/manage.svg" />
                                </div>
                                <?php the_field('set-manage', 'options'); ?>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/account.svg" />
                                </div>
                                <?php the_field('set-account', 'options'); ?>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/support.svg" />
                                </div>
                                 <?php the_field('set-customer', 'options'); ?>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/staff.svg" />
                                </div>
                                <?php the_field('set-staff', 'options'); ?>
                            </a>

                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/log-out.svg" />
                                </div>
                                <?php the_field('set-log-out', 'options'); ?>
                            </a>
                        </div>
                    </li>
                </ul>

            </div>
            <?php endif; ?>

            <?php if (!is_user_logged_in()): ?>
            <div class="my-2 my-lg-0 ml-3 d-none d-md-block">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown sign-in-dropdown">
                        <div class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <button class="btn btn-sm btn-outline-secondary btn-rounded sign-in-button" data-toggle="aside" data-target="#right-aside">SIGN IN</button>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <form class="py-4 px-3">
                                <div class="form-group">
                                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-sm btn-outline-secondary btn-rounded">Sign In</button>
                                <button type="button" class="btn btn-sm btn-link ml-3"  data-toggle="modal" data-target="#signUpModal">Sign Up</button>
                            </form>
                        </div>
                    </li>
                </ul>
                
            </div>

            <?php endif; ?>



        </div>
    </div>
</nav> 

	