<?php
get_header();

while(have_posts()) {
    the_post(); 
    pageBanner();
    ?>
        <div class="content-container">
            <div class="page-content">
                <h1><?php the_title(); ?></h1>
                <div class="page-info">
                    <div class="page-text">
                        <?php the_content(); ?>
                    </div>
                    <!-- photo -->
                </div>
            </div>
        </div>
        
    </div>


<?php }

get_footer();
?>