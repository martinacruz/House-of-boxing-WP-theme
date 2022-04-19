<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('./css/style.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;600&display=swap" rel="stylesheet">
    <title>House of Boxing</title>
</head>
<body <?php body_class(); ?>>
    <nav class="navbar">
        <div class="logo">
        <a href="#" class="logo-link">
            <img src="<?php echo get_theme_file_uri("screenshot.png") ?>" alt="House of boxing logo">
        </a>    
        </div>
        <div class="nav-links-container">
            <ul class="nav-links">
                <li class="nav-link"><a href="#">About</a></li>
                <li class="nav-link"><a href="#">Classes</a></li>
                <li class="nav-link"><a href="#">Membership</a></li>
                <li class="nav-link"><a href="#">Coaches</a></li>
                <li class="nav-link"><a href="#">Events</a></li>
                <li class="nav-link"><a class="btn-link" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
