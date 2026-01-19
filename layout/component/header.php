<?php
$current_slug = get_post_field( 'post_name', get_queried_object_id() );
$header_menus = get_wp_menu_tree('header');
$half = ceil(count($header_menus) / 2);
$left_menus = array_slice($header_menus, 0, $half);
$right_menus = array_slice($header_menus, $half);
?>

<!-- Pop up Menu -->
<div class="offcanvas offcanvas-end w-100 PopupMenu" tabindex="-1" id="PopupMenu" aria-labelledby="PopupMenuLabel">
    <div class="offcanvas-header w-100 justify-content-between">
        <div class="d-flex align-items-center d-none d-md-block">
            <?php foreach ($left_menus as $menu) : ?>
                <a href="<?= $menu['url'] ?>" class="p-2 text-uppercase"><span><?= $menu['title'] ?></span></a>
            <?php endforeach ?>
        </div>
        <div>
            <div class="text-center align-items-center">
                <!-- <span class="fs-16pt">R.S.V.P</span> -->
                <img class="img-logo" height="24px" src="<?= get_stylesheet_directory_uri() . "/assets/img/R.S.V.P Logo.png" ?>" />
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="d-none d-md-block">
                <?php foreach ($right_menus as $menu) : ?>
                    <a href="<?= $menu['url'] ?>" class="p-2 text-uppercase"><span><?= $menu['title'] ?></span></a>
                <?php endforeach ?>
            </div>
            <button type="button" class="btn text-white bg-transparent rounded-0  ms-auto ms-md-0" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg id="i-close" class="d-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M2 30 L30 2 M30 30 L2 2" />
                </svg>
            </button>
        </div>
    </div>
    <div class="offcanvas-body pt-sm-3">
        <nav class="nav w-100 h-100 align-items-center">
            <?php
            $off_canvas_menus = get_wp_menu_tree('offset');
            ?>
            <ul class="list-unstyled w-100">
                <?php foreach ($off_canvas_menus as $index => $menu) : ?>
                    <li>
                        <div class="row g-1 align-items-end">
                            <div class="<?= ($index % 2 === 0) ? 'col-4' : 'col-5' ?> text-end">
                                <p class="mb-2 fw-normal fs-10pt"><?= sprintf('%02d', $index + 1) ?></p>
                            </div>
                            <div class="<?= ($index % 2 === 0) ? 'col-8' : 'col-7' ?>">
                                <a class="display-1 lh-1" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>
    </div>
</div>
<!-- End Pop up Menu -->
<div class="d-block px-3 py-2 text-center text-bold bg-tblack">
    <a href="mailto:<?= carbon_get_theme_option('rsvp_email') ?>">
        <p class="text-white h6 fw-normal">Join the <span class="h6 fw-normal fst-italic">R.S.V.P Community</span></p>
    </a>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand navbar-toggler border-0" href="/">
                <!-- <span class="logo">R.S.V.P</span> -->
                <img height="24px" src="<?= get_stylesheet_directory_uri() . "/assets/img/R.S.V.P Logo.png" ?>" />
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" href="#PopupMenu" role="button" aria-controls="PopupMenuLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 16" fill="none">
                    <line y1="1.75" x2="50" y2="1.75" stroke="#151515" stroke-width="2.5"></line>
                    <line x1="16.6641" y1="13.75" x2="49.9974" y2="13.75" stroke="#151515" stroke-width="2.5"></line>
                </svg>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($left_menus as $menu) : ?>
                        <li class="nav-item">
                            <a class="nav-link pb-0 px-0 mx-2 <?= $current_slug === sanitize_title($menu['title']) ? "active" : null ?>" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <a class="navbar-brand m-0 p-0" href="/">
                    <!-- <span class="logo">R.S.V.P</span> -->
                    <img height="20px" src="<?= get_stylesheet_directory_uri() . "/assets/img/R.S.V.P Logo.png" ?>" />
                </a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php foreach ($right_menus as $menu) : ?>
                        <li class="nav-item">
                            <a class="nav-link pb-0 px-0 mx-2 <?= $current_slug === sanitize_title($menu['title']) ? "active" : null ?>" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach ?>
                    <li>
                        <a class="btn" type="button" data-bs-toggle="offcanvas" href="#PopupMenu" role="button" aria-controls="PopupMenuLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 16" fill="none">
                                <line y1="1.75" x2="50" y2="1.75" stroke="#151515" stroke-width="2.5"></line>
                                <line x1="16.6641" y1="13.75" x2="49.9974" y2="13.75" stroke="#151515" stroke-width="2.5"></line>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>