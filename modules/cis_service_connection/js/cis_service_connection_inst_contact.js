(function ($) {
  $(document).ready(function(){
    $('.thumbnav_controller img.cis_service_connection_inst_contact').click(function(){
      var text = '';
      var title = $(this).attr('alt');
      if ($('#block-cis-service-connection-instructor-contact').length > 0) {
        text += $('#block-cis-service-connection-instructor-contact .content').html();
      }
      Drupal.thumbnav.modal(title, text);
    });
  });
})(jQuery);