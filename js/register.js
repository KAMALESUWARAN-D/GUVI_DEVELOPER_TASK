const registerPassword = document.querySelector('form.active #password');
const registerConfirmPassword = document.querySelector('form.active #confirm-pass');

registerPassword.addEventListener('input', function () {
	registerConfirmPassword.pattern = `${this.value}`;
})

$('#register').submit(function(event) {
  
  event.preventDefault();
  var formData = $(this).serialize();
  $.ajax({
    url: 'register.php',
    data: formData,
    type: 'POST',
    success: function(response) {
        console.log(response);
    },
    error: function(xhr, status, error) {
        console.error(error);
    }
  });
});


