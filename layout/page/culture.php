<section id="section-culture" class="py-5">
    <div class="container-fluid p-3 p-md-5">
        <?= carbon_get_post_meta( get_post()->ID, 'page_title' ) ?>
        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0 border-0">
                    <div class="card-body p-0">
                        <p class="mb-2">01</p>
                        <img src="<?= wp_get_attachment_url(carbon_get_post_meta(get_post()->ID, 'img_1')) ?>" class="img-fluid w-100 culture-img" alt="...">
                        <?= carbon_get_post_meta( get_post()->ID, 'title_1' ) ?>
                        <?= carbon_get_post_meta( get_post()->ID, 'desc_1' ) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border border-top-0 border-bottom-0">
                <div class="py-md-5"></div>
                <div class="card rounded-0 border-0 mt-md-5">
                    <div class="card-body p-0">
                        <p class="mb-2">02</p>
                        <img src="<?= wp_get_attachment_url(carbon_get_post_meta(get_post()->ID, 'img_2')) ?>" class="img-fluid w-100 culture-img" alt="...">
                        <?= carbon_get_post_meta( get_post()->ID, 'title_2' ) ?>
                        <?= carbon_get_post_meta( get_post()->ID, 'desc_2' ) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-0 border-0">
                    <div class="card-body p-0">
                        <p class="mb-2">03</p>
                        <img src="<?= wp_get_attachment_url(carbon_get_post_meta(get_post()->ID, 'img_3')) ?>" class="img-fluid w-100 culture-img" alt="...">
                        <?= carbon_get_post_meta( get_post()->ID, 'title_3' ) ?>
                        <?= carbon_get_post_meta( get_post()->ID, 'desc_3' ) ?>
                    </div>
                </div>
            </div>
        </div>
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