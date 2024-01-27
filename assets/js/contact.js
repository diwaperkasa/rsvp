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
        success: function() {
            
        },
    });
});