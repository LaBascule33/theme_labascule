<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> >
<!-- HEADER -->

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!----------------------------------------------------------------------------------------------->
<!-- TOP-NAVBAR -->
<!------------------------------------->
<header id="header">
    <div id="topNavbar">
        <nav class="navbar container">
            <div class="container-fluid">

                <ul class="nav">
                    <li><a href="https://twitter.com/LBLaBascule/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/twitter.svg" alt=""></a></li>
                    <li class="ml-3"><a href="https://www.facebook.com/LBLaBascule/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/facebook.svg" alt=""></a></li>
                    <li class="ml-3"><a href="https://www.instagram.com/lblabascule/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/instagram.svg" alt=""></a></li>
                    <li class="ml-3"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/pictos/contact-bascule.svg" alt=""></a></li>
                </ul>

                <div class="justify-content-end">
                    <a class="pr-5 agenda" href="<?php echo esc_url(home_url('/agenda'));?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/agenda.svg" class="pr-3" alt="">
                        <span class="bf">Agenda</span>
                    </a>
                    <a class="pl-5" href="<?php echo esc_url(home_url('/chroniques'));?>">
                        <span class="bf">Nos chroniques</span>
                        <i class="ml-4 fas fa-arrow-right bf"></i>
                    </a>

                </div>
            </div>
        </nav>
    </div>


<!----------------------------------------------------------------------------------------------->
<!-- NAVBAR -->
<!------------------------------------->
    <div class="bgw container-fluid">
        <nav class="navbar container">
            <a href="<?php echo esc_url(home_url('/'));?>" class="navbar-brand">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-bascule.svg" alt="logo">
            </a>

            <a href="" class="btn btn-primary ml-3 mr-auto"><i class="fas fa-hand-paper"></i> Passer à l'action</a>

                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primaire',
                        'depth' => 1,
                        'container' => 'div',
                        'container_id' => 'navbarMenu',
                        'container_class' => 'navbar',
                        'menu_class' => 'nav',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ) ); 
                ?>
            <a href="" class="btn btn-danger r-100" tabindex="0" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Faites un don"> <i class="fas fa-heart"></i> </a>
        </nav>
    </div>

    </header>

<div id="pageContent">
