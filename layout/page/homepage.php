<?php
    // add custom script
    wp_enqueue_script('homepage', get_stylesheet_directory_uri() . '/assets/js/homepage.js', [], false, true);
?>

<section id="section-hero">
    <div class="container-fluid">
        <div class="px-4">
            <img src="<?= get_stylesheet_directory_uri() . "/assets/img/Hero-1.jpg" ?>" class="img-hero" alt="...">
        </div>
        <div class="marquee">
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
            <p class="h1 mx-5">WE <span class="fst-italic">INNOVATE</span> YOUR <span class="fst-italic">STORY</span> </p>
        </div>
        <div class="d-flex justify-content-between px-4">
            <a class="fw-normal h5" href="#" role="button">+ CONNECT</a>
            <a class="fw-normal h5" href="#" role="button"><span class="dotdec h5 position-relative"></span> EXPLORE</a>
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
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="text-white text-center py-5 my-5 px-3">
                            <p>ABOUT R.S.V.P</p>
                            <h1 class="display-4 mb-5">The <span class="fst-italic">Innovation</span> <br> Agency</h1>
                            <p class="h4 fw-normal mb-5">With over 20 years of experience in different emerging markets, we
                                specialise in a variety of online and offline service in PR, social, media and digital space to
                                create impactful and engaging campaigns. Our communication strategies are innovative, based on
                                shifting trends and technologies, including AI, AR and VR to effectively communicate and connect
                                with diverse target audiences in meaningful ways.</p>
                            <a class="fw-normal h5 fst-italic text-decoration-underline" href="#" role="button">Learn More
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
            <div class="col-md-6  px-0">
                <video autoplay muted class="video-cover">
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
                <p>We are passionate about telling stories, and creating holistic campaigns that build connections and bring
                    about growth for the brands we work with. We strive to create and execute strategies that exceed our
                    clients’ expectations and are committed to providing exceptional service with a personal touch.</p>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <a href="#" class="btn-big-round"> <span>CONNECT <span>with</span> US</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-services" class="py-5">
    <div class="container-fluid p-3 p-md-5">
        <p class="text-center fs-5">OUR SERVICES</p>
        <h1 class="display-4 text-center mb-5">Our Creative <br> <span class="fst-italic">Solutions</span></h1>
        <div class="row align-items-center d-none d-md-flex">
            <div class="col">
                <div class="card rounded-0 border-0">
                    <div class="card-body p-0">
                        <p class="mb-0">01</p>
                        <img src=" <?= get_stylesheet_directory_uri() . "/assets/img/pr.png" ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0">PUBLIC <br> RELATIONS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0 border-0">
                    <div class="card-body p-0">
                        <p class="mb-0">02</p>
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/cc.png" ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0">CONTENT <br> CREATION</h5>
                    </div>
                </div>
            </div>
            <div class="col align-self-stretch">
                <div class="card rounded-0 border-0 h-75">
                    <div class="card-body p-0">
                        <p class="mb-0">03</p>
                        <video autoplay muted class="video-cover">
                            <source src="<?= get_stylesheet_directory_uri() . '/assets/img/Runway-Video.webm' ?>" type="video/webm">
                        </video>
                        <h5 class="card-title mt-3 mb-0">EVENT <br> MANAGEMENT</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0 border-0">
                    <div class="card-body p-0">
                        <p class="mb-0">04</p>
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/sm.png' ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0">SOCIAL MEDIA <br> MANAGEMENT</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-0 border-0">
                    <div class="card-body p-0">
                        <p class="mb-0">05</p>
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/img/in.png" ?>" class="img-fluid" alt="...">
                        <h5 class="card-title mt-3 mb-0">INNOVATION</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 d-block d-md-none">
            <div class="owl-carousel service-carousel owl-theme">
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">01</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/pr.png' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">PUBLIC <br> RELATIONS</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">02</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/cc.png' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">CONTENT <br> CREATION</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 h-75">
                        <div class="card-body p-0">
                            <p class="mb-0">03</p>
                            <video autoplay muted class="video-cover">
                                <source src="<?= get_stylesheet_directory_uri() . '/assets/img/Runway-Video.webm' ?>" type="video/webm">
                            </video>
                            <h5 class="card-title mt-3 mb-0">EVENT <br> MANAGEMENT</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">04</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/sm.png' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">SOCIAL MEDIA <br> MANAGEMENT</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <p class="mb-0">05</p>
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/img/in.png" ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">INNOVATION</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="fw-normal h5 fst-italic text-decoration-underline" href="#" role="button">Browse All Services
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
        <p class="text-center fs-5">OUR PROJECTS</p>
        <h1 class="display-4 text-center">Our Selected <br> <span class="fst-italic">Works</span></h1>
        <div class="mt-4">
            <div class="owl-carousel work-carousel owl-theme">
                <div class="item">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/BIRKENSTOCK.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">Birkenstock</h5>
                            <p class="card-text">2022—2023</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/YTL-Hotels.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">YTL Hotels</h5>
                            <p class="card-text">2022—2023</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/AMAFFI.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">AMAFFI Asia Boutique</h5>
                            <p class="card-text">2022</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/Brytehall.jpg' ?>" class="img-fluid" alt="...">
                            <h5 class="card-title mt-3 mb-0">Brytehall</h5>
                            <p class="card-text">2022</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0">
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
            <a class="fw-normal h5 fst-italic text-decoration-underline" href="#" role="button">Explore All Projects
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 54 30" fill="none">
                    <path d="M0.394531 14.9975L53.6048 14.9976" stroke="#F2BE3F" stroke-width="3"></path>
                    <path d="M53.3119 15.3929C50.364 16.2454 45.2012 17.3076 41.5353 20.5209C38.4559 23.2202 37.6553 27.385 37.9149 28.889" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                    <path d="M53.3119 14.6066C50.364 13.7542 45.2012 12.6919 41.5353 9.47857C38.4559 6.77935 37.6553 2.61453 37.9149 1.11053" stroke="#F2BE3F" stroke-width="3" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="section-culture" class="py-5">
    <div class="container-fluid p-md-4">
        <h1 class="h4 text-center fw-normal mb-5">A CULTURE <span class="fst-italic">to </span>CREATE <span class="fst-italic">and </span>ELEVATE</h1>
        <div class="row py-4 align-items-center">
            <div class="col-md-6">
                <h1 class="display-2 text-center">BUILDING <br> <span class="fst-italic">COMMUNITY </span></h1>
            </div>
            <div class="col-md-6">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/img/culture1.png' ?>" class="img-culture" alt="...">
            </div>
        </div>
        <div class="row py-4 align-items-center">
            <div class="col-md-6 order-2">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/img/culture2.png' ?>" class="img-culture" alt="...">
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <h1 class="display-2 text-center">INSPIRING <br> <span class="fst-italic">CREATIVITY </span></h1>
            </div>
        </div>
        <div class="row py-4 align-items-center">
            <div class="col-lg">
                <h1 class="display-2 text-center">FOSTERING <br> <span class="fst-italic">COLLABORATION </span></h1>
            </div>
            <div class="col-lg">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/img/culture3.png' ?>" class="img-culture" alt="...">
            </div>
        </div>
    </div>
</section>

<section id="section-team">
    <div class="container-fluid">
        <div class="row bg-tblack">
            <div class="col-md-6  px-0">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/img/architectural-details-1.png' ?>" class="img-fluid h-100" alt="...">
            </div>
            <div class="col-md-6 px-0">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="text-white text-center py-5 my-5 px-3">
                            <p class="fs-5">OUR TEAM </p>
                            <h1 class="display-4 mb-5">Meet <br> <span class="fst-italic">The Team</span></h1>
                            <p class="h4 fw-normal mb-5">Our team consists of talented and dynamic professionals, who are
                                well-versed in the ever-changing landscape of the communications industry to provide excellent
                                service that suits the needs of our clients.</p>
                            <a class="fw-normal h5 fst-italic text-decoration-underline" href="#" role="button">Learn More
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

<section id="section-contactus" class="py-5 bg-tgrey">
    <div class="container py-5">
        <h1 class="display-4 text-center">Start a <span class="fst-italic">Conversation</span> <br> With Us Today</h1>
        <p class="fw-normal h5 text-center mt-4"> <span class="text-decoration-underline"> By Email </span>/ <span class="text-decoration-underline">By Whatsapp</span></p>

        <div class="row my-5 justify-content-center">
            <div class="col-md-7">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <label for="inputMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="inputMessage" rows="5" placeholder="Write your enquiry here"></textarea>
                    </div>
                    <div class="col-12 text-center mt-5">
                        <a class="fw-normal h5 fst-italic text-decoration-underline" href="#" role="button">Submit Form</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="#" class="h2 me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
            </a>
            <a href="#" class="h2 me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
            </a>
            <a href="#" class="h2 me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4" />
                </svg>
            </a>
            <a href="#" class="h2 me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                </svg>
            </a>
        </div>
    </div>
</section>