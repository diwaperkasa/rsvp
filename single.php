<?php
    $post = get_post();
    $categories = get_the_category($post->ID);
    $slugs = [];

    foreach ($categories as $categorie) {
        $slugs[] = $categorie->slug;
    }

    if (in_array('projects', $slugs)) {
        wp_enqueue_script('project-detail', get_stylesheet_directory_uri() . '/assets/js/project-detail.js', [], false, true);
        return get_layout("project_detail.php");
    }

    if (in_array('news', $slugs)) {
        return get_layout("news/article.php");
    }
?>