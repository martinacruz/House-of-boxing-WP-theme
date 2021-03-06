<?php
get_header();
pageBanner(array(
    'title' => 'All Events',
    'photo' => get_the_post_thumbnail()
));
?>




        <div class="event-container">
            <div class="event-content">
                <h1>Upcoming:</h1>
                <div class="event-info">
                    <?php 
                    while(have_posts()) {
                        the_post(); ?>

                        <div class="event">
                        <div class="date-container">
                            <span><?php 
                                $eventDate = new DateTime(get_field('event_date'));
                                echo $eventDate -> format('M');
                            ?></span>
                            <br>
                            <span><?php echo $eventDate -> format('d') .', '. $eventDate -> format('Y') ?></span>
                        </div>
                        <div class="event-info-text">
                            <a href=" <?php the_permalink(); ?>"><h4> <?php the_title(); ?> </h4></a>
                            <p> <?php echo wp_trim_words(get_the_content(), 30) ?> </p>
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