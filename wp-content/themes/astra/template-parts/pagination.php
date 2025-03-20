
<?php
/**
 * Template Name: pagination
 */
function load_more_posts() {
    $paged = $_POST['page'] + 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'paged' => $paged
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // แสดงเนื้อหาโพสต์
            get_template_part('template-parts/content', 'post');
        endwhile;
    endif;
    
    wp_die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

// ในไฟล์ JavaScript
jQuery(document).ready(function($) {
    var page = 1;
    var loading = false;
    
    $('#load-more').on('click', function() {
        if(!loading) {
            loading = true;
            var data = {
                'action': 'load_more_posts',
                'page': page
            };
            
            $.post(ajaxurl, data, function(response) {
                if(response) {
                    $('#posts-container').append(response);
                    page++;
                    loading = false;
                } else {
                    $('#load-more').hide();
                }
            });
        }
    });
});

?>
