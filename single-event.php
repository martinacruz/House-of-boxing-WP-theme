<?php
get_header();

while(have_posts()) {
    the_post(); ?>
    <div class="wrapper">
        <div class="photo-banner" style="background-image:URL('<?php echo get_theme_file_uri('/assets/imgs/female-boxer-SI.jpg') ?>');">
            <h1 class="banner-title">Event: <?php the_title();?></h1>
        </div>
        <div class="content-container">
            <div class="page-content">
                <h1><?php the_title(); ?></h1>
                <div class="page-info">
                    <div class="page-text">
                        <?php the_content(); ?>
                    </div>
                    <!-- photo -->
                    <img src="<?php echo get_theme_file_uri('./assets/imgs/3rd-female-training.jpg')?>" alt="">
                </div>
            </div>
        </div>
        
    </div>


<?php }

get_footer();
?>