<?php

function pageBanner($args = NULL) {
    //php logic
        if (!$args['title']) {
            $args['title'] = get_the_title();
        }

        if (!$args['photo']) {
            if (get_field('page_banner_image') AND !is_archive() AND !is_home() ) {
                $args['photo'] = get_field('page_banner_image')['sizes']['pageBanner'];
            } 
            else {
                $args['photo'] = get_theme_file_uri('/assets/imgs/female-boxer-SI.jpg');
            }
        } ?>

    <div class="wrapper">
        <div class="photo-banner" style="background-image:URL('<?php echo $args['photo'] ?>');">
            <h1 class="banner-title"><?php echo $args['title']?></h1>
        </div>

<?php }

    function hob_files() {
        wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css2?family=Akshar:wght@300;400;600&display=swap');
        wp_enqueue_style('hob_main_style', get_theme_file_uri('/css/style.css'));
        wp_enqueue_style('hob_page_style', get_theme_file_uri('/css/pages/page-style.css'));
        wp_enqueue_style('hob_archive_style', get_theme_file_uri('/css/archives/archive-styles.css'));
    }

    add_action('wp_enqueue_scripts', 'hob_files');

    function hob_features() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('coachHeadshot', 250, 250, true);
        add_image_size('coachProfile', 460, 690, true);
        add_image_size('pageBanner', 1500, 450, true);
    }

    add_action('after_setup_theme', 'hob_features');

    function hob_adjust_queries($query) {
        
        if (!is_admin() AND is_post_type_archive('event') AND $query -> is_main_query()) {
            $today = date('Ymd');
            $query -> set('meta_key', 'event_date');
            $query -> set('orderby', 'meta_value_num');
            $query -> set('order', 'ASC');
            $query -> set('meta_query', array(
                array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                )
            ));
        }
    }

    add_action('pre_get_posts', 'hob_adjust_queries');