$(document).ready(() => {
  $('form').on('submit', function (event) {
    event.preventDefault();
    const th = $(this);
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: th.serialize(),
      error: (jqXHR, exception) => {
        alert('Error!');
      },
    }).done(function () {
      alert('Thank you!');
      setTimeout(function () {
        th.trigger('reset');
      }, 1000);
    });
    return false;
  });
});
