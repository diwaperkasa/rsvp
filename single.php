<?php
    wp_enqueue_script('project-detail', get_stylesheet_directory_uri() . '/assets/js/project-detail.js', [], false, true);
    return get_layout("project_detail.php");
?>