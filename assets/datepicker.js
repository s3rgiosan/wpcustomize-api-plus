/* globals document jQuery */
(function($) {
  $(document).ready(function() {
    $('.wpcustomize-api-plus-control .datepicker').each(function() {
      var opts = $(this).data('datepicker-opts');
      $(this).datepicker(opts);
    });
  });
})(jQuery);
