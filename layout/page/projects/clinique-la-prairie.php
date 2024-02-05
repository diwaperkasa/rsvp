<?php
    $prevPost = rsvp_get_prev_post();
    $nextPost = rsvp_get_next_post();
?>

<section id="project-detail">
    <div class="item h-100">
        <div class="row g-0 h-100">
            <div class="col-md-6 p-4 p-md-0 ">
                <div class="w-100 h-100 project-imgbg" style="background: url('<?= get_stylesheet_directory_uri() . "/assets/img/Clinique La Prairie_071A3050.jpeg" ?>') no-repeat center; background-size: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-between h-100 px-4">
                    <div class="p-2 px-md-5 text-center">
                        <h1 class="display-6 mb-1 lh-1">Clinique <br> La Prairie</h1>
                        <h6 class="fw-normal mb-4">Holistic Health Boutique Opening at Marina Bay Sands</h6>
                        <div class="owl-carousel project-carousel owl-theme ">
                            <div class="item project-slide">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/img/Clinique-La-Prairie-slide1.jpg" ?>" alt="...">
                            </div>
                            <div class="item project-slide">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/img/Clinique-La-Prairie-slide2.png" ?>" alt="...">
                            </div>
                            <div class="item project-slide">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/img/Clinique-La-Prairie-slide3.jpg" ?>" alt="...">
                            </div>
                            <div class="item project-slide">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/img/Clinique-La-Prairie-slide4.png" ?>" alt="...">
                            </div>
                            <div class="item project-slide">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/img/Clinique-La-Prairie-slide5.png" ?>" alt="...">
                            </div>
                        </div>
                        <p class="fs-6 elipsisp my-4 overflow-auto">We brought Clinique La Prairie’s longevity philosophy to life at the launch of the world’s first Holistic Health boutique at Marina Bay Sands. Our discerning guests dined high above the city at stylish CÉ LA VI, with CEO Simone Gibertoni and other brand leaders present. This was followed by an exquisite high-end media breakfast at the Four Seasons Hotel, for an invigorating morning of health and wellness.</p>
                    </div>
                    <div class="d-flex justify-content-between m-2">
                        <div class="text-start">
                            <p class="mb-0">Client</p>
                            <h5 class="fw-normal">Clinique La Prairie</h5>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">YEAR</p>
                            <h5 class="fw-normal">2023</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between m-2 mb-4">
                        <div class="text-start">
                            <a href="<?= get_permalink($prevPost) ?>">
                            <span class="fw-lighter">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 42" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M20 30 L8 16 20 2" />
                                </svg>
                                PREVIOUS
                            </span>
                            </a>
                        </div>
                        <div class="text-end">
                            <a href="<?= get_permalink($nextPost) ?>">
                            <span class="fw-lighter">
                                NEXT
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 42" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M12 30 L24 16 12 2" />
                                </svg>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>