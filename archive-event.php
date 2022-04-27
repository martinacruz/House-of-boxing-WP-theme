<?php
get_header();
?>


    <div class="wrapper">
        <div class="photo-banner" style="background-image:URL('<?php echo get_theme_file_uri('/assets/imgs/female-boxer-SI.jpg') ?>');">
            <h1 class="banner-title">All Events</h1>
        </div>


        <div class="event-container">
            <div class="event-content">
                <h1>Upcoming Events</h1>
                <div class="event-info">
                    <?php 
                    while(have_posts()) {
                        the_post(); ?>

                        <div class="event">
                        <div class="date-container">
                            <span>May</span>
                            <br>
                            <span>22, 2022</span>
                        </div>
                        <div class="event-info-text">
                            <a href=" <?php the_permalink(); ?>"><h4> <?php the_title(); ?> </h4></a>
                            <p> <?php the_content(); ?> </p>
                        </div>
                    </div>
                    
                    <?php }
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>