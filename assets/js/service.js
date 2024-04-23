$(".collapse-toggle-service").click(function () {
    const target = $(this).data('toggle');
    const status = $(target).collapse('toggle');
});

$('.collapse').on('show.bs.collapse', function () {
    const id = this.id;
    const button = $(`[data-toggle="#${id}"]`);
    const buttonText = button.find('.text');
    buttonText.html('Hide');
    const buttonArrow = button.find('.arrow');
    buttonArrow.html(`
        <svg id="i-chevron-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 4 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M30 20 L16 8 2 20" />
        </svg>
    `);
});

$('.collapse').on('hide.bs.collapse', function () {
    const id = this.id;
    const button = $(`[data-toggle="#${id}"]`);
    const buttonText = button.find('.text');
    buttonText.html('View More');
    const buttonArrow = button.find('.arrow');
    buttonArrow.html(`
        <svg id="i-chevron-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 4 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M30 12 L16 24 2 12" />
        </svg>
    `);
});