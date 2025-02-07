<section id="section-about">
    <div class="container-fluid">
        <div class="px-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative">
                        <div class="text-about text-center">
                            <h1 class="display-1 lh-1">About</h1>
                            <h2 class="fs-14pt fw-normal fst-italic lh-1">Who We Are</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3">
                        <img src="<?= wp_get_attachment_url(carbon_get_post_meta(get_the_ID(), 'thumbnail')) ?>" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 offset-md-6">
                    <div class="p-3">
                        <div>
                            <?= carbon_get_post_meta( get_the_ID(), 'title' ) ?>
                        </div>
                        <div>
                            <?= carbon_get_post_meta( get_the_ID(), 'description' ) ?>
                        </div>
                        <div class="mb-5">
                            <a class="fw-normal h5 fst-italic text-decoration-underline" href="/services" role="button">View All Services</a>
                            <span class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 54 30" fill="none">
                                    <path d="M0.394531 14.9975L53.6048 14.9976" stroke="#F2BE3F" stroke-width="3"></path>
                                    <path d="M53.3119 15.3929C50.364 16.2454 45.2012 17.3076 41.5353 20.5209C38.4559 23.2202 37.6553 27.385 37.9149 28.889" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                                    <path d="M53.3119 14.6066C50.364 13.7542 45.2012 12.6919 41.5353 9.47857C38.4559 6.77935 37.6553 2.61453 37.9149 1.11053" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>