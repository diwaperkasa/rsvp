<?php 
    $postId = get_post()->ID;
    $slug = get_post_field( 'post_name', get_post() );
    $categories = get_the_category($postId);

    if ($categories) {
        $category = $categories[0];
        $path = $category->slug;

        wp_enqueue_script('project-detail', get_stylesheet_directory_uri() . '/assets/js/project-detail.js', [], false, true);

        return get_layout("{$path}/{$slug}.php");
    }
?>