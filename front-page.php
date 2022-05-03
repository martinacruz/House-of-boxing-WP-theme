<?php 
get_header(); ?>


    <div class="wrapper">
        <div class="banner-container">
            <video style="width: 100%;" autoplay loop muted>
                <source src='<?php echo get_theme_file_uri('/assets/sample.mp4') ?>'  type='video/mp4'> 
            </video>
            <div class="banner-arrow">
                <p><i class="arrow down"></i></p>
            </div>
        </div>

        <div class="welcome-container">
            <div class="welcome-content">
                <h1>Welcome To The House</h1>
                <div class="welcome-info">
                    <p>House of Boxing welcomes all level of athletes!</p>
                    <p>House of Boxing has become the premier boxing gym in San Diego. Our facility is committed to providing a positive and knowledgeable instructional environment for our members to achieve their personal goals in boxing and strength & condition.  We offer numerous weekly boxing and fitness classes for kids, teens, adults and women.</p>
                    <p>The House of Boxing Training Center is more than just a place where you lace up some gloves, jump on boxes or hit a bag; it’s a place where you become a member of our family, the House of Boxing Family.  Whether you’re a professional boxing prospect, looking to shed some extra pounds or just want to learn the “Sweet Science,” the House of Boxing is the place for you.</p>
                    <p>Come and make the House of Boxing your Home…</p>
                </div>
            </div>
        </div>

        <div class="photo-divider photo-1">
        </div>

        <div class="trainers-container">
            <div class="trainers-content">
                <h1>Meet Your New Trainers</h1>
                <div class="trainers">

                <?php
                    $homepageCoaches = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'coach'
                    ));

                    while($homepageCoaches -> have_posts()){
                        $homepageCoaches -> the_post(); ?>
                        <div class="trainer-info">
                            <div class="trainer-photo">
                                <!-- coaches photo -->
                                <a href=" <?php the_permalink() ?> "><img src="<?php the_post_thumbnail_url('coachHeadshot'); ?>" alt=""></a>
                            </div>
                            <div class="trainer-bio">
                                <!-- coaches name -->
                                <a href=" <?php the_permalink(); ?>"><h2> <?php the_title(); ?> </h2></a>
                                <!-- coaches bio -->
                                <p> <?php if(has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 18);
                                } ?> </p>
                            </div>
                        </div>

                    
                <?php }
                ?>
            
            </div>
            <div class="trainer-btn btn">
                <a href="<?php echo get_post_type_archive_link('coach'); ?>" class="btn-link">Other Trainers</a>
            </div>
        </div>
        <hr style='' width='50%'>
        </div>
        <div class="class-container">
            <div class="class-content">
                <h1>Classes: </h1>
                <div class="class-info">
                    <div class="class-info-text">
                        <p>This is where it all begins! Get the basics down in Beginner Boxing 1, 2, and 3, then ramp up your workout in an energized group setting. FYI - <strong>your first Beginner Boxing class is 50% off!</strong> Our 60-minute “Class”-level classes offer a range of cardio drills, boxing technique, partner and mitt work, bodyweight exercises, strength and conditioning, and more - you’ll never get bored. Here are the different classes we offer: <br>

                        <strong>“Beginner Boxing”:</strong> Start learning the fundamentals like stance, punch numbers, and how to move. No equipment required. <br>

                        <strong>“Old School Boxing”:</strong> Classic heavy bag boxing, mat-based strength drills, and old-school grit! A great class for refining your boxing technique. Gloves and wraps required. <br>

                        <strong>“Tough Love”:</strong> Part boxing, part cardio, part strength & conditioning, and a heavy dose of Tough Love! This class will get you working up a sweat, both mental and physical. Gloves and wraps required. <br>

                        <strong>“Circuit & Strength”:</strong> Our popular non-boxing class, you’ll get a tough session of full-body conditioning through a blend of power, strength, core, and cardio. Join our movement specialist Fabiana for a workout unlike any other! No equipment required.</p>
                    </div>
                    <img class="class-info-img" src="<?php echo get_theme_file_uri('/assets/imgs/3rd-female-training.jpg') ?>" alt="">
                </div>
                <a href="#" class="btn-link">More Classes</a>
            </div>
        </div>

        <div class="photo-divider photo-2">
        </div>

        <div class="event-container">
            <div class="event-content">
                <h1>Upcoming Events</h1>
                <div class="event-info">
                    <?php 
                    $today = date('Ymd');
                    $homepageEvents = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'event',
                        'orderby' => 'meta_value_num',
                        'meta_key' => 'event_date',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'event_date',
                                'compare' => '>=',
                                'value' => $today,
                                'type' => 'numeric'
                            )
                        )
                    ));

                    while($homepageEvents -> have_posts()) {
                        $homepageEvents -> the_post(); ?>

                        <div class="event">
                        <div class="date-container">
                            <span> <?php 
                                $eventDate = new DateTime(get_field('event_date'));
                                echo $eventDate -> format('M');
                            ?> </span>
                            <br>
                            <span> <?php echo $eventDate -> format('d') .', '. $eventDate -> format('Y') ?> </span>
                        </div>
                        <div class="event-info-text">
                            <a href=" <?php the_permalink(); ?>"><h4> <?php the_title(); ?> </h4></a>
                            <p> <?php if(has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 18);
                                } ?> </p>
                        </div>
                    </div>
                    
                    <?php }
                    ?>

                </div>
                <a href=" <?php echo get_post_type_archive_link('event'); ?> " class="btn-link">More Events</a>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
