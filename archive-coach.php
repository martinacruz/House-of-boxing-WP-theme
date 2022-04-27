<?php
get_header(); ?>



    <div class="wrapper">
        <div class="photo-banner" style="background-image:URL('<?php echo get_theme_file_uri('/assets/imgs/female-boxer-SI.jpg') ?>');">
            <h1 class="banner-title">Coaches</h1>
        </div>

<div class="trainers-container">
            <div class="trainers-content">
                <h1>Meet Your New Family</h1>
                <div class="trainers">

                <?php
                    while(have_posts()){
                        the_post(); ?>
                        <div class="trainer-info">
                            <div class="trainer-photo">
                                <!-- coaches photo -->
                            </div>
                            <div class="trainer-bio">
                                <!-- coaches name -->
                                <a href=" <?php the_permalink(); ?>"><h2> <?php the_title(); ?> </h2></a>
                                <!-- coaches bio -->
                                <p> <?php the_content(); ?> </p>
                            </div>
                        </div>

                    
                <?php }
                ?>
            
            </div>
            <div class="trainer-btn btn">
                <a href="#" class="btn-link">Other Trainers</a>
            </div>
        </div>

<?php
get_footer();
?>