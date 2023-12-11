$('.testi-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    items: 1,
    dots: true,
})

$('.work-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    lazyLoad: true,
    margin: 30,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
        },
        700: {
            items: 3
        }
    }
})

$('.service-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    lazyLoad: true,
    margin: 16,
    nav: true,
    dots: false,
    items: 1,
    autoHeight: true,
})