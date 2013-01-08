// JavaScript Document
(function ($) {
  $(document).ready(function(){
    $("#activation_code_form .mac_top").click(function(){
      $("#activation_code_form .mac_main, #activation_code_form .mac_bottom").slideToggle('fast');
    });
  });
})(jQuery);