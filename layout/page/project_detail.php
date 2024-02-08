<?php
    $prevPost = rsvp_get_prev_post();
    $nextPost = rsvp_get_next_post();
    $thumbnail = carbon_get_post_meta(get_the_ID(), 'project_thumbnail');
?>

<section id="project-detail">
    <div class="item h-100">
        <div class="row g-0 h-100">
            <div class="col-md-6 p-4 p-md-0 ">
                <div class="w-100 h-100 project-imgbg" style="background: url('<?= wp_get_attachment_url($thumbnail ? $thumbnail[0] : 0) ?>') no-repeat center; background-size: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-between h-100 px-4">
                    <div class="p-2 px-md-5 text-center">
                        <h1 class="display-6 mb-2"><?= carbon_get_post_meta( get_the_ID(), 'project_title' ) ?: get_post()->post_title ?></h1>
                        <?php if ($subtitle = carbon_get_post_meta( get_the_ID(), 'project_subtitle' )): ?>
                            <h6 class="fw-normal mb-4"><?= $subtitle ?></h6>
                        <?php endif; ?>
                        <div class="owl-carousel project-carousel owl-theme ">
                            <?php foreach (carbon_get_post_meta( get_the_ID(), 'project_photo' ) as $mediaId): ?>
                                <?php $fileInfo = pathinfo(get_attached_file($mediaId)); ?>
                                <div class="item project-slide overflow-hidden mx-1">
                                    <?php if (in_array($fileInfo['extension'], ['mp4', 'webm', 'ogg'])): ?>
                                        <video autoplay="" muted="" loop="" class="video-cover">
                                            <source class="img-fluid" src="<?= wp_get_attachment_url($mediaId) ?>" type="video/<?= $fileInfo['extension'] ?>">
                                        </video>
                                    <?php else: ?>
                                        <img class="img-fluid" src="<?= wp_get_attachment_url($mediaId) ?>" alt="<?= wp_get_attachment_url($mediaId) ?>">
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="fs-6 elipsisp my-4 overflow-auto">
                            <?= carbon_get_post_meta( get_the_ID(), 'project_desc' ) ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between m-2">
                        <div class="text-start">
                            <p class="mb-0">Client</p>
                            <h5 class="fw-normal"><?= get_post()->post_title ?></h5>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">YEAR</p>
                            <h5 class="fw-normal"><?= carbon_get_post_meta( get_the_ID(), 'project_year' ) ?></h5>
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