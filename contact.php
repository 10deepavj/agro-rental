<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.form-group input, .form-group textarea').on('focus', function() {
    $(this).siblings('label').addClass('active');
  });

  $('.form-group input, .form-group textarea').on('blur', function() {
    if ($(this).val().length === 0) {
      $(this).siblings('label').removeClass('active');
    }
  });
});
</script>
