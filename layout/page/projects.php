<?php
    $args = [];
    $args = array(
        'posts_per_page' => -1,
        'orderby' => 'ID',
        'order' => 'ASC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => [
            [
                'field' => 'slug',
                'terms' => 'projects',
                'taxonomy' => 'category',
            ]
        ]
    );

    $result = new WP_Query($args);
    $postSize = $result->found_posts;
    $postPerRow = 3;
    $rowIndex = 0;
    $groupIndex = 0;
?>

<section id="section-projects" class="py-5">
    <div class="container-fluid p-3 p-md-5">
        <h1 class="display-4 text-center mb-5 lh-1">
            Curated <span class="fst-italic">Selection</span><br>
            of <span class="fst-italic">Projects</span>
        </h1>
        <?php foreach ($result->get_posts() as $key => $post): ?>
            <?php
                $thumbnail = carbon_get_post_meta($post->ID, 'project_thumbnail');
            ?>
            <?php if ($rowIndex == 0): ?>
                <div class="row align-items-center justify-content-center">
            <?php endif; ?>
            <div class="<?= ($groupIndex % 2 == 0) ? 
                (($postSize - (($groupIndex + 1) * $postPerRow) < $postPerRow) ?
                    ("col-md-" . (5 - ($postSize - $key)))
                    : ($rowIndex % 2 == 0 ? "col-md" : "col-md-5"))
                : ($rowIndex % 2 == 0 ? "col-md" : "col-md-3") ?>">
                <a href="<?= get_permalink($post) ?>">
                    <div class="card rounded-0  border-0">
                        <div class="card-body">
                            <p class="mb-0 dotdec position-relative ms-4"><?= $key + 1 ?></p>
                            <div class="img-list-container">
                                <img src="<?= wp_get_attachment_url($thumbnail ? $thumbnail[0] : 0) ?>" alt="...">
                            </div>
                            <h5 class="card-title mt-3 mb-0 fw-normal"><?= $post->post_title ?></h5>
                            <p class="card-text"><?= carbon_get_post_meta( $post->ID, 'project_year' ) ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php ++$rowIndex; ?>
            <?php if ($rowIndex == $postPerRow): ?>
                </div>
            <?php endif; ?>
            <?php
                if ($rowIndex == $postPerRow) {
                    ++$groupIndex;
                }

                $rowIndex = $rowIndex == 3 ? 0 : $rowIndex;
            ?>
        <?php endforeach; ?>
        <div class="text-center mt-5">
            <a class="fw-normal h5 fst-italic text-decoration-underline" href="/services" role="button">Browse All Services</a>
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