<script>
// toggle password visibility
$('.toggle-password').on('click', function() {
  $(this).toggleClass('fa-eye fa-eye-slash');
  //$(this).toggleClass('fa-lock fa-unlock');
  let input = $($(this).attr('toggle'));
  if (input.attr('type') == 'password') {
    input.attr('type', 'text');
  }
  else {
    input.attr('type', 'password');
  }
});
</script>