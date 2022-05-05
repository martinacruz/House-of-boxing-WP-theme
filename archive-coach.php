<?php
get_header();

?>



    <div class="wrapper">
        <div class="photo-banner" style="background-image:URL('<?php echo get_theme_file_uri('/assets/imgs/female-boxer-SI.jpg') ?>');">
            <h1 class="banner-title">Coaches</h1>
        </div>

<div class="trainers-container">
            <div class="trainers-content">
                <h1>Meet Your New Family</h1>
                <div class="trainers-arch">

                <?php
                    while(have_posts()){
                        the_post(); ?>
                        <div class="trainer-info-arch">
                            <div class="trainer-photo-arch">
                                <!-- coaches photo -->
                                <a href=" <?php the_permalink() ?> "><img src="<?php the_post_thumbnail_url('coachHeadshot'); ?>" alt=""></a>
                            </div>
                            <div class="trainer-bio-arch">
                                <!-- coaches name -->
                                <a href=" <?php the_permalink(); ?>"><h2> <?php the_title(); ?> </h2></a>
                                <!-- coaches bio -->
                            </div>
                        </div>

                    
                <?php }
                ?>
            
            </div>
        </div>

<?php
get_footer();
?>