
var cursor = document.querySelector('.cursor');
var cursorinner = document.querySelector('.cursor2');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});

document.addEventListener('mousedown', function(){
  cursor.classList.add('click');
  cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function(){
  cursor.classList.remove('click')
  cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
  item.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
  });
  item.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
  });
});

$('form#subscribed-form').submit(function(e) {
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: '/',
    data: {
      subscribed_email: $('#subscribed_email').val(),
    },
    beforeSend: function() {
      $("form#subscribed-form button[type='submit']").prop('disabled', true);
    },
    success: function() {
      $("form#subscribed-form button[type='submit']")
          .addClass('d-none');

      $("form#subscribed-form input#subscribed_email")
          .val("You're now subscribed. Thank you for joining R.S.V.P community!")
          .prop('readonly', true);
    },
    complete: function() {
      $("form#subscribed-form button[type='submit']").prop('disabled', false);
    }
  });
});