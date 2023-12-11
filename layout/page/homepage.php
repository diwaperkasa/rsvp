<?php
    // add custom script
    wp_enqueue_script('homepage', get_stylesheet_directory_uri() . '/assets/js/homepage.js', [], false, true);
?>

<section id="section-hero">
    <div>
        <div class="px-4h5">
            <img src="<?= get_stylesheet_directory_uri() . "/assets/img/Hero-1.jpg" ?>" class="img-hero" alt="...">
        </div>
        <div class="marquee">
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
        </div>
        <div class="d-flex justify-content-between px-4">
            <a class="fw-normal h5 fs-16pt" href="#" role="button">+ CONNECT</a>
            <a class="fw-normal h5 fs-16pt" href="#" role="button"><span class="dotdec h5 position-relative"></span> EXPLORE</a>
        </div>
    </div>
</section>

<section id="section-newera">
    <div class="container">
        <div class="text-center my-5 py-5">
            <h3 class="fw-normal my-3">WELCOME <span class="fst-italic">to</span> R.S.V.P</h3>
            <h1 class="rem7 fw-normal text-center text-break">A NEW ERA
                <span class="fst-italic">of</span> <br> COMMUNICATION
            </h1>
            <div class="row justify-content-center my-5">
                <div class="col-md-6">
                    <img src="<?= get_stylesheet_directory_uri() . "/assets/img/alina-bordunova1.png" ?>" class="img-fluid" alt="...">
                </div>
            </div>
            <h1 class="fw-normal text-center mb-5">
                We are a <span class="fst-italic">next-generation</span> communications <br>
                agency that brings together the worlds of <br>
                <span class="fst-italic">fashion, lifestyle,</span> and <span class="fst-italic">technology</span> for the
                <br>
                consumer of tomorrow.
            </h1>
        </div>
    </div>
</section>

<section id="section-about-us">
    <div class="container-fluid">
        <div class="row bg-tblack">
            <div class="col-md-6 px-0">
                <div class="justify-content-center">
                    <div class="text-white text-center py-5 my-5 px-5">
                        <p>ABOUT R.S.V.P</p>
                        <h1 class="display-4 mb-5">The <span class="fst-italic">Innovation</span> <br> Agency</h1>
                        <p class="h4 fw-normal mb-5 fs-16pt lh-160">With over 20 years of experience in different emerging markets, we
                            specialise in a variety of online and offline service in PR, social, media and digital space to
                            create impactful and engaging campaigns. Our communication strategies are innovative, based on
                            shifting trends and technologies, including AI, AR and VR to effectively communicate and connect
                            with diverse target audiences in meaningful ways.</p>
                        <a class="fw-normal h5 fst-italic text-decoration-underline" href="/about" role="button">Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 54 30" fill="none">
                                <path d="M0.394531 14.9975L53.6048 14.9976" stroke="#F2BE3F" stroke-width="3"></path>
                                <path d="M53.3119 15.3929C50.364 16.2454 45.2012 17.3076 41.5353 20.5209C38.4559 23.2202 37.6553 27.385 37.9149 28.889" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                                <path d="M53.3119 14.6066C50.364 13.7542 45.2012 12.6919 41.5353 9.47857C38.4559 6.77935 37.6553 2.61453 37.9149 1.11053" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6  px-0">
                <video autoplay muted loop class="video-cover">
                    <source src="<?= get_stylesheet_directory_uri() . '/assets/img/videobg.webm' ?>" type="video/webm">
                </video>
            </div>
        </div>
    </div>
</section>

<section id="section-ability" class="py-5 bg-tgrey">
    <div class="container p-5">
        <h1 class="display-1">
            We take pride in our ability to identify opportunities — and provide innovative solutions that make a
            difference.
        </h1>
        <div class="row my-3 align-items-end">
            <div class="col-md-8">
                <p class="fs-16pt">
                    We are passionate about telling stories, and creating holistic campaigns that build connections and bring
                    about growth for the brands we work with. We strive to create and execute strategies that exceed our
                    clients’ expectations and are committed to providing exceptional service with a personal touch.
                </p>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <a href="/contact" class="btn-big-round"> <span>CONNECT <span>with</span> US</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-services" class="py-5">
    <div class="container-fluid p-3 p-md-5">
        <p class="text-center fs-16pt">OUR SERVICES</p>
        <h1 class="display-4 text-center mb-5 lh-1">Our Creative <br> <span class="fst-italic">Solutions</span></h1>
        <!-- Desktop View -->
        <div class="row align-items-center d-none d-md-flex">
            <div class="col">
                <div class="card rounded-0 border-0 px-md-2">
                    <div class="card-body p-0">
                        <p class="mb-0">01</p>
                        <img src=" <?= get_stylesheet_directory_uri() . "/assets/img/pr.png" ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0 fw-normal lh-1">PUBLIC <br> RELATIONS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0 border-0 px-md-2">
                    <div class="card-body p-0">
                        <p class="mb-0">02</p>
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/cc.png" ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0 fw-normal lh-1">CONTENT <br> CREATION</h5>
                    </div>
                </div>
            </div>
            <div class="col align-self-stretch">
                <div class="card rounded-0 border-0 px-md-2 h-80">
                    <div class="card-body p-0">
                        <p class="mb-0">03</p>
                        <video autoplay muted loop class="video-cover">
                            <source src="<?= get_stylesheet_directory_uri() . '/assets/img/Runway-Video.webm' ?>" type="video/webm">
                        </video>
                        <h5 class="card-title mt-3 mb-0 fw-normal lh-1">EVENT <br> MANAGEMENT</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0 border-0 px-md-2">
                    <div class="card-body p-0">
                        <p class="mb-0">04</p>
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/sm.png' ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0 fw-normal lh-1">SOCIAL MEDIA <br> MANAGEMENT</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0 border-0 px-md-2">
                    <div class="card-body p-0">
                        <p class="mb-0">05</p>
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/in.png" ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0 fw-normal lh-1">INNOVATION</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile View -->
        <div class="mt-4 d-block d-md-none">
            <div class="owl-carousel service-carousel owl-theme">
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">01</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/pr.png' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0 fw-normal lh-1">PUBLIC <br> RELATIONS</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">02</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/cc.png' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0 fw-normal lh-1">CONTENT <br> CREATION</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 h-75">
                        <div class="card-body p-0">
                            <p class="mb-0">03</p>
                            <video autoplay muted loop class="video-cover">
                                <source src="<?= get_stylesheet_directory_uri() . '/assets/img/Runway-Video.webm' ?>" type="video/webm">
                            </video>
                            <h5 class="card-title mt-3 mb-0 fw-normal lh-1">EVENT <br> MANAGEMENT</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">04</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/sm.png' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0 fw-normal lh-1">SOCIAL MEDIA <br> MANAGEMENT</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">05</p>
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/img/in.png" ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0 fw-normal lh-1">INNOVATION</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="fw-normal h5 fst-italic text-decoration-underline" href="/services" role="button">Browse All Services
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 54 30" fill="none">
                    <path d="M0.394531 14.9975L53.6048 14.9976" stroke="#F2BE3F" stroke-width="3"></path>
                    <path d="M53.3119 15.3929C50.364 16.2454 45.2012 17.3076 41.5353 20.5209C38.4559 23.2202 37.6553 27.385 37.9149 28.889" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                    <path d="M53.3119 14.6066C50.364 13.7542 45.2012 12.6919 41.5353 9.47857C38.4559 6.77935 37.6553 2.61453 37.9149 1.11053" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="section-projects" class="py-5 bg-tgrey">
    <div class="container-fluid">
        <p class="text-center fs-5 fs-16pt">OUR PROJECTS</p>
        <h1 class="display-4 text-center lh-1">Our Selected <br> <span class="fst-italic">Works</span></h1>
        <div class="mt-4">
            <div class="owl-carousel work-carousel owl-theme">
                <div class="item">
                    <div class="card rounded-0 px-md-2">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/BIRKENSTOCK.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">Birkenstock</h5>
                            <p class="card-text">2022—2023</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 px-md-2">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/YTL-Hotels.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">YTL Hotels</h5>
                            <p class="card-text">2022—2023</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 px-md-2">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/AMAFFI.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">AMAFFI Asia Boutique</h5>
                            <p class="card-text">2022</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 px-md-2">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/Brytehall.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">Brytehall</h5>
                            <p class="card-text">2022</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 px-md-2">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/Clique-La-Prairie.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">Clinique La Prairie</h5>
                            <p class="card-text">2023</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/VIVA-1.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">VIVA Studio Launch</h5>
                            <p class="card-text">2022—Present</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/Vogue.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">VOGUE Launch</h5>
                            <p class="card-text">2020</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/Zegna.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">ZEGNA 232 1.0 Dinner</h5>
                            <p class="card-text">2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <a class="fw-normal h5 fst-italic text-decoration-underline" href="/projects" role="button">
                Explore All
            </a>
        </div>
    </div>
</section>

<section id="section-culture" class="py-5">
    <div class="container-fluid p-md-4">
        <h1 class="h4 text-center fw-normal mb-5 fs-16pt">A CULTURE <span class="fst-italic">to </span>CREATE <span class="fst-italic">and </span>ELEVATE</h1>
        <div class="row py-4 align-items-center">
            <div class="col-md-8">
                <h1 class="display-1 text-center">BUILDING <br> <span class="fst-italic">COMMUNITY </span></h1>
            </div>
            <div class="col-md-4">
                <div class="text-center text-md-start">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/img/culture1.png' ?>" class="img-culture" alt="...">
                </div>
            </div>
        </div>
        <div class="row py-4 align-items-center">
            <div class="col-md-4 order-2">
                <div class="text-center text-md-end">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/img/culture2.png' ?>" class="img-culture" alt="...">
                </div>
            </div>
            <div class="col-md-8 order-1 order-md-2">
                <h1 class="display-1 text-center">INSPIRING <br> <span class="fst-italic">CREATIVITY </span></h1>
            </div>
        </div>
        <div class="row py-4 align-items-center">
            <div class="col-md-8">
                <h1 class="display-1 text-center">FOSTERING <br> <span class="fst-italic">COLLABORATION </span></h1>
            </div>
            <div class="col-md-4">
                <div class="text-center text-md-start">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/img/culture3.png' ?>" class="img-culture" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-team">
    <div class="container-fluid">
        <div class="row bg-tblack">
            <div class="col-md-6  px-0">
                <img src="http://rsvp-v2-local.co/wp-content/themes/rsvp/assets/img/architectural-details-1.png" class="img-fluid h-100" alt="...">
            </div>
            <div class="col-md-6 p-lg-5">
                <div class="justify-content-center px-lg-5">
                    <div class="text-white text-center py-5 my-5 px-lg-4">
                        <p class="fs-5 fs-16pt mb-lg-4">OUR TEAM</p>
                        <h1 class="display-4 mb-5 lh-1">Meet <br> <span class="fst-italic">The Team</span></h1>
                        <p class="h4 fw-normal mb-5 fs-16pt lh-160">Our team consists of talented and dynamic professionals, who are
                            well-versed in the ever-changing landscape of the communications industry to provide excellent
                            service that suits the needs of our clients.</p>
                        <a class="fw-normal h5 fst-italic text-decoration-underline" href="/contact" role="button">Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 54 30" fill="none">
                                <path d="M0.394531 14.9975L53.6048 14.9976" stroke="#F2BE3F" stroke-width="3"></path>
                                <path d="M53.3119 15.3929C50.364 16.2454 45.2012 17.3076 41.5353 20.5209C38.4559 23.2202 37.6553 27.385 37.9149 28.889" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                                <path d="M53.3119 14.6066C50.364 13.7542 45.2012 12.6919 41.5353 9.47857C38.4559 6.77935 37.6553 2.61453 37.9149 1.11053" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Disable testimonial section -->
<!--
<section id="section-testi">
    <div class="container-fluid">
        <div class="owl-carousel testi-carousel owl-theme p-md-5">
            <div class="item">
                <div class="d-flex flex-column align-items-center mb-4">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/img/coma.png' ?>" width="50" alt="...">
                    <h1 class="display-4 text-center my-3">It was an absolute pleasure to work with the team at R.S.V.P for
                        our launch in Singapore.</h1>
                    <p class="text-center">They provided invaluable insight and advice which improved our communications
                        strategy and enabled us to reach many more people than we had originally anticipated. Their
                        professionalism, responsiveness and creativity was truly impressive.</p>
                    <h4 class="fst-italic">Anna Chin, Amaffi</h4>
                </div>
            </div>
            <div class="item">
                <div class="d-flex flex-column align-items-center mb-4">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/img/coma.png' ?>" width="50" alt="...">
                    <h1 class="display-4 text-center my-3">It was an absolute pleasure to work with the team at R.S.V.P for
                        our launch in Singapore.</h1>
                    <p class="text-center">They provided invaluable insight and advice which improved our communications
                        strategy and enabled us to reach many more people than we had originally anticipated. Their
                        professionalism, responsiveness and creativity was truly impressive.</p>
                    <h4 class="fst-italic">Anna Chin, Amaffi 2</h4>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<?php include __DIR__ . '/../component/contact_us.php' ?>