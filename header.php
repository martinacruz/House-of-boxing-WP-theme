<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>House of Boxing</title>
</head>
<body <?php body_class(); ?>>
    <nav class="navbar">
        <div class="logo">
        <a href="<?php echo site_url(); ?>" class="logo-link">
            <img src="<?php echo get_theme_file_uri("screenshot.png") ?>" alt="House of boxing logo">
        </a>    
        </div>
        <div class="nav-links-container">
            <ul class="nav-links">
                <li class="nav-link"><a href="<?php echo site_url('/about-us'); ?>">About</a></li>
                <li class="nav-link"><a href="<?php echo site_url('/classes'); ?>">Classes</a></li>
                <li class="nav-link"><a href="<?php echo site_url('/memberships'); ?>">Membership</a></li>
                <li class="nav-link"><a href="<?php echo site_url('/coaches'); ?>">Coaches</a></li>
                <li class="nav-link"><a href="<?php echo site_url('/events'); ?>">Events</a></li>
                <li class="nav-link"><a class="btn-link" href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
