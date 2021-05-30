<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" >
        <meta name="viewport" content="width=device-width, intial-scale=1" >
        <?php wp_head(); ?>
    </head>
        <body <?php body_class(); 
        $contactPage = is_page('contact') ? true : false;   
        ?>>
            <div class="nav <?php echo $contactPage ? "nav-contact" : "nav-white" ?>">
                <div class="nav__logo">
                    <a href="<?php echo site_url() ?>">
                        <img src="<?php echo
                            $contactPage ? 
                            get_theme_file_uri('/images/logos/meeko-logo-white.png') 
                            : get_theme_file_uri('/images/logos/meeko-logo-navy.png')
                                ?>" />                
                    </a>
                </div>
                <nav class="nav__menu">
                    <?php wp_nav_menu(array('theme_location' => 'headerMenu', 'menu_class' => 'primary-menu')); ?>
                </nav>
                <div class="nav__search">
                    <!-- <i class="fas fa-search"></i> -->
                </div>
            </div>

