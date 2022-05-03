<?php
get_header();


while(have_posts()) {
    the_post(); 
    pageBanner();
    ?>
        <div class="content-container">
            <div class="page-content single">
                <img src="<?php $coachPic = get_field('profile_image'); echo $coachPic['sizes']['coachProfile'] ?>" alt="">
                <div class="page-info">
                    <div class="page-text">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php }

get_footer();
?>