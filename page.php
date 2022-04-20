<?php
get_header();

while(have_posts()) {
    the_post(); ?>
        <div class="photo-divider-1">
            <h1><?php the_title();?></h1>
        </div>


<?php }



get_footer();
?>