$('.testi-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    items: 1,
    dots: true,
})

const workCarousel = $('.work-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    lazyLoad: true,
    nav: false,
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
});

$('.prev-button').click(function () {
    console.log('prev');
    workCarousel.trigger('prev.owl.carousel');
});

$('.next-button').click(function () {
    console.log('next');
    workCarousel.trigger('next.owl.carousel');
});

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