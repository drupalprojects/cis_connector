(function ($) {
  $(document).ready(function(){
    $('.thumbnav_controller img.cis_service_connection_section_context').click(function(){
      var text = '';
      var title = $(this).attr('alt');
      if ($('#block-cis-service-connection-section-context-changer').length > 0) {
        text += $('#block-cis-service-connection-section-context-changer').html();
      }
      Drupal.thumbnav.modal(title, text);
    });
  });
})(jQuery);