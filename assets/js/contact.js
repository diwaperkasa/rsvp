$('form#contact-form').submit(function(e) {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: '/contact',
        data: {
            contact_name: $('#contact_name').val(),
            contact_email: $('#contact_email').val(),
            contact_message: $('#contact_message').val(),
        },
        beforeSend: function() {
            $("form#contact-form button[type='submit']").prop('disabled', true);
        },
        success: function() {
            $('form#contact-form').addClass('d-none');
            $('#section-contactus #contact-desc').addClass('d-none');
            $('#section-contactus #success-message').removeClass('d-none');
        },
        complete: function() {
            $("form#contact-form button[type='submit']").prop('disabled', true);
        }
    });
});