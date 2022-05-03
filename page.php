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
                </div>
                <?php
                if(is_page(array('about-us', 'memberships'))) { ?>
                    <a class="btn-link" href="<?php echo site_url('/classes'); ?>">See Classes</a>
                <?php } else if (is_page('classes')) { ?>
                    <a class="btn-link" href="<?php echo site_url('/memberships'); ?>">See Memberships</a>
                <?php }
                ?>
            </div>
        </div>
        
    </div>


<?php }

get_footer();
?>