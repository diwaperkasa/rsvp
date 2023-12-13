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
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
            margin: 10,
            stagePadding: 50,
        },
        700: {
            items: 3,
            margin: 30,
        }
    },
})

$('.service-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    lazyLoad: true,
    margin: 16,
    nav: false,
    dots: false,
    items: 1,
    autoHeight: true,
    stagePadding: 50,
})