/**
* Provide the HTML to create the modal dialog.
*/
(function ($) {
  Drupal.behaviors.cisShortcodeHighlight = {
    attach: function(context) {
      $('input.cis_shortcodes_embed').focus(function() { $(this).select() });
      $('input.cis_shortcodes_embed').mouseup(function(e){
        e.preventDefault();
      });
    }
  };
  $('.cis_shortcodes_embed').click(function(e) {
    this.select();
  });
  Drupal.theme.prototype.cis_filter_modal = function () {
    var html = '<div id="ctools-modal" class="popups-box close-reveal-modal">';
    html += '  <div class="ctools-modal-content ctools-modal-cis-filter-modal-content">';
    html += '    <span class="popups-close"><a class="close close-reveal-modal" aria-label="Close" href="#">' + Drupal.CTools.Modal.currentSettings.closeImage + '</a></span>';
    html += '    <div><div id="modal-content" class="expand reveal-modal-open modal-content popups-body"></div></div>';
    html += '  </div>';
    html += '</div>';
    return html;
  }
  // ability to disable background scrolling on modal open
  Drupal.behaviors.cisfilterModalReveal = {
  attach: function (context, settings) {
    $('.close-reveal-modal').on("click", function () {
      $("body").removeClass("scroll-disabled");
    });
    $('#cis-modal-cancel').on("click", function () {
      $('.close-reveal-modal').click();
    });
  }
  };
  // bind these events only once
  $(document).ready(function(){
    $('.ctools-modal-cis-filter-modal.disable-scroll').on("click", function () {
      $("body").addClass("scroll-disabled");
    });
    // @todo need to disable escape closing colorbox or both events firing
    // if colorbox open, can't close ctools modal
    // if colorbox closed, can close ctools modal this way
    // maybe use unbind event
    // Bind a keypress on escape for closing the modalContent
    $(document).bind('keydown', function(event) {
      if (event.keyCode == 27) {
        $("body").removeClass("scroll-disabled")
        return false;
      }
    });
  });
})(jQuery);
