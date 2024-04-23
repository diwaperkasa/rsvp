<?php
    // add custom script
    wp_enqueue_script('homepage', get_stylesheet_directory_uri() . '/assets/js/service.js', [], "1.0", true);
?>

<section id="section-culture" class="py-5">
    <div class="container p-3 p-md-5">
        <h1 class="display-4 text-center mb-5 lh-1">
            Our <span class="fst-italic">Services</span><br>
            and <span class="fst-italic">Solutions</span>
        </h1>
        <div class="row align-items-center py-5 border-bottom">
            <div class="col-md-6">
                <div>
                    <h1 class="display-5 fw-normal my-3 position-relative lh-1">PUBLIC <br>RELATIONS <span class="numbering-dec">01</span> </h1>
                    <p class="fs-14pt">
                        Strong relationships are everything, and we have grown a loyal
                        pool of media contacts for our communications strategies.
                        Through leveraging this vast network, we develop engaging
                        campaigns to share your stories in the best way possible.
                    </p>
                    <div class="collapse" id="collapse-service-1">
                        <p class="fs-14pt">
                            Services include: Press Office, Press Events, Day-to Day Media Relations Management, Press Tour Organisation, Showroom Management, Product Seeding.
                        </p>
                    </div>
                    <div class="mb-3 text-center text-md-start">
                        <a data-toggle="#collapse-service-1" class="collapse-toggle-service" href="javascript:void(0)">
                            <span class="text">View More</span>
                            <span class="arrow">
                                <svg id="i-chevron-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 4 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 12 L16 24 2 12" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center text-md-end">
                    <img src="<?= get_stylesheet_directory_uri() . "/assets/img/LISEZ-MOI.jpeg" ?>" class="img-fluid w-75 odd" alt="...">
                </div>
            </div>
        </div>
        <div class="row align-items-center py-5 border-bottom">
            <div class="col-md-6  order-2">
                <div class="text-center text-md-start">
                    <img src="<?= get_stylesheet_directory_uri() . "/assets/img/ser2.jpg" ?>" class="img-fluid w-75 even" alt="...">
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div>
                    <h1 class="display-5 fw-normal my-3 position-relative lh-1">CONTENT <br>CREATION <span class="numbering-dec">02</span></h1>
                    <p class="fs-14pt">
                        Our content creation services are insightful, original and
                        strategic to amplify our client’s voices. We focus on the
                        smallest of details and provide highly-tailored approaches
                        through editorial content that resonates with your audience
                        and digital production that elevates your brand.
                    </p>
                    <div class="collapse" id="collapse-service-2">
                        <p class="fs-14pt">
                            RSVP Agency offers dynamic content services to amplify your brand:
                        </p>
                        <ol class="fs-14pt" type="1">
                            <li>Content Planning: We deliver end-to-end content solutions, from writing and editing to photography and design.</li>
                            <li>Native Ads and Media Campaigns: Custom campaigns that blend seamlessly with user experiences.</li>
                            <li>Microsite Creation: Standalone web pages to highlight your specific marketing drives.</li>
                            <li>Podcast Production: Dive into podcasting for an engaging corporate presence with our comprehensive package - scripting, training, guest coordination, and studio recording.</li>
                        </ol>
                        <p class="fs-14pt">
                            Our podcast service stands out as an innovative tool for storytelling and corporate engagement.
                        </p>
                    </div>
                    <div class="mb-3 text-center text-md-start">
                        <a data-toggle="#collapse-service-2" class="collapse-toggle-service" href="javascript:void(0)">
                            <span class="text">View More</span>
                            <svg id="i-chevron-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 4 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M30 12 L16 24 2 12" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-5 border-bottom">
            <div class="col-md-6">
                <div>
                    <h1 class="display-5 fw-normal my-3 position-relative lh-1">EVENT <br>MANAGEMENT <span class="numbering-dec">03</span></h1>
                    <p class="fs-14pt">
                        Our event portfolio is diverse, from intimate presentations to large-scale openings
                        and product launches. With a strong network of event partners and key opinion leaders,
                        we brainstorm, design, conceptualise, fabricate, set up and dismantle – and secure celebrity attendance in the process.
                    </p>
                    <div class="collapse" id="collapse-service-3">
                        <p class="fs-14pt">
                            Event formats:
                        </p>
                        <ol class="fs-14pt" type="1">
                            <li>Media Presentation, Press Conferences, Press Trips</li>
                            <li>Gala Events, Show Entertainment , Roadshows, Festivals</li>
                            <li>Fashion Shows , Styling Events, Trunkshows</li>
                            <li>Conferences, Workshops, Masterclasses, Trainings</li>
                        </ol>
                    </div>
                    <div class="mb-3 text-center text-md-start">
                        <a data-toggle="#collapse-service-3" class="collapse-toggle-service" href="javascript:void(0)">
                            <span class="text">View More</span>
                            <span class="arrow">
                                <svg id="i-chevron-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 4 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 12 L16 24 2 12" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center text-md-end">
                    <video autoplay muted loop playsinline class="video-cover odd">
                        <source src="<?= get_stylesheet_directory_uri() . "/assets/img/Runway-Video.mp4" ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-5 border-bottom">
            <div class="col-md-6 order-2">
                <div class="text-center text-md-start">
                    <img src="<?= get_stylesheet_directory_uri() . "/assets/img/ser4.jpg" ?>" class="img-fluid w-75 even" alt="...">
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div>
                    <h1 class="display-5 fw-normal my-3 position-relative lh-1">SOCIAL MEDIA <br>MANAGEMENT <span class="numbering-dec">04</span></h1>
                    <p class="fs-14pt">
                        We enhance the visibility of the brands we work with within the digital sphere through creating vibrant and powerful social media campaigns to build a strong presence across different platforms.
                    </p>
                    <div class="collapse" id="collapse-service-4">
                        <ol class="fs-14pt" type="1">
                            <li>Content Creation: Crafting on-brand visual and textual content that resonates with your audiences</li>
                            <li>Engagement Strategies: Driving interactions through targeted posts and campaigns</li>
                            <li>Trend Monitoring: Keeping pace with the latest industry trends to maintain relevance</li>
                            <li>Influencer Collaborations: Partnering with influencers to expand reach</li>
                            <li>Analytics & Reporting: Measuring performance to refine and optimise strategy</li>
                        </ol>
                    </div>
                    <div class="mb-3 text-center text-md-start">
                        <a data-toggle="#collapse-service-4" class="collapse-toggle-service" href="javascript:void(0)">
                            <span class="text">View More</span>
                            <span class="arrow">
                                <svg id="i-chevron-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 4 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 12 L16 24 2 12" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-5">
            <div class="col-md-6">
                <div>
                    <h1 class="display-5 fw-normal my-3 position-relative lh-1">INNOVATION <span class="numbering-dec">05</span></h1>
                    <p class="fs-14pt mb-3">
                        We see a changing world of communication as new technologies continue to be developed to enable new ways of immersive engagement, interaction and storytelling. We apply AI, VR and AR to optimise processes and to create new experiences for your target audiences.
                    </p>
                    <p class="fs-14pt">
                        In a new decentralised virtual world, community-building is important for brands. The next generation of consumer appreciates transparency and new connectivity beyond existing physical spaces. With our international brand partners, we can offer a wide range of digital services including CGI campaigns, immersive product experinces, digitisation of products (NFC Tracing).
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center text-md-end">
                    <img src="<?= get_stylesheet_directory_uri() . "/assets/img/ser5.jpg" ?>" class="img-fluid w-75 even" alt="...">
                </div>
            </div>
        </div>


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