<?php
    // add custom script
    wp_enqueue_script('homepage', get_stylesheet_directory_uri() . '/assets/js/service.js', [], "1.1", true);
    $services = rsvp_get_services();
?>

<section id="section-culture" class="py-5">
    <div class="container p-3 p-md-5">
        <h1 class="display-4 text-center mb-5 lh-1">
            Our <span class="fst-italic">Services</span><br/>
            and <span class="fst-italic">Solutions</span>
        </h1>
        <?php foreach ($services->get_posts() as $key => $post): ?>
            <div class="row align-items-center py-5 <?= $key < $services->found_posts - 1 ? "border-bottom" : null ?>">
                <div class="col-md-6 <?= $key % 2 == 0 ? null : "order-md-2" ?>">
                    <div>
                        <h1 class="display-5 fw-normal my-3 position-relative lh-1">
                            <?= carbon_get_post_meta( $post->ID, 'title' ) ?>
                            <span class="numbering-dec"><?= carbon_get_post_meta( $post->ID, 'position' ) ?></span>
                        </h1>
                        <div>
                            <?= carbon_get_post_meta( $post->ID, 'description' ) ?>
                        </div>
                        <?php if ($additionalDesc = carbon_get_post_meta( $post->ID, 'additional_description' )): ?>
                            <div class="collapse" id="collapse-service-<?= $key ?>">
                                <?= $additionalDesc ?>
                            </div>
                            <div class="mb-3 text-center text-md-start">
                                <a data-toggle="#collapse-service-<?= $key ?>" class="collapse-toggle-service" href="javascript:void(0)">
                                    <span class="text">View More</span>
                                    <span class="arrow">
                                        <svg id="i-chevron-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 4 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M30 12 L16 24 2 12" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 <?= $key % 2 == 0 ? null : "order-md-1 text-md-start" ?>">
                    <div class="text-center <?= $key % 2 == 0 ? "text-md-end" : "text-md-start" ?>">
                        <?php
                            $mediaId = carbon_get_post_meta($post->ID, 'thumbnail');
                            $fileInfo = pathinfo(get_attached_file($mediaId));
                        ?>
                        <?php if (in_array($fileInfo['extension'], ['mp4', 'webm', 'ogg'])): ?>
                            <video autoplay="" muted="" loop="" playsinline="" class="video-cover odd">
                                <source src="<?= wp_get_attachment_url($mediaId) ?>" type="video/<?= $fileInfo['extension'] ?>">
                            </video>
                        <?php else: ?>
                            <img src="<?= wp_get_attachment_url($mediaId) ?>" class="img-fluid w-75 <?= carbon_get_post_meta( $post->ID, 'thumbnail_style' ) ?>" alt="...">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="text-center mt-5">
            <a class="fw-normal h5 fst-italic text-decoration-underline" href="/contact" role="button">Contact Us</a>
            <span class="ms-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 54 30" fill="none">
                    <path d="M0.394531 14.9975L53.6048 14.9976" stroke="#F2BE3F" stroke-width="3"></path>
                    <path d="M53.3119 15.3929C50.364 16.2454 45.2012 17.3076 41.5353 20.5209C38.4559 23.2202 37.6553 27.385 37.9149 28.889" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                    <path d="M53.3119 14.6066C50.364 13.7542 45.2012 12.6919 41.5353 9.47857C38.4559 6.77935 37.6553 2.61453 37.9149 1.11053" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                </svg>
            </span>
        </div>
    </div>
    <div class="marquee mt-5">
        <p class="h1 mx-5"><a href="/contact">WORK WITH US</a></p>
        <p class="h1 mx-5"><a href="/contact">WORK WITH US</a></p>
        <p class="h1 mx-5"><a href="/contact">WORK WITH US</a></p>
        <p class="h1 mx-5"><a href="/contact">WORK WITH US</a></p>
        <p class="h1 mx-5"><a href="/contact">WORK WITH US</a></p>
    </div>
</section>