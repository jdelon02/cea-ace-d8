(function ($, Drupal) {
  Drupal.behaviors.BOTCustomSearchPopup = {
    attach: function (context, settings) {
      $('#block-exposedformsearch-contentpage-1', context).once('BOTCustomSearchPopup').each(function () {
        $('#block-exposedformsearch-contentpage-1').append('<a class="close-btn" href="javascript:void(0)">Close</a>');
      });

      $('#block-exposedformsearch-contentpage-1').on('click.BOTCustomSearchPopupClose', '.close-btn', function(e){
        e.preventDefault();
        window.location.hash = '';
      });
    }
  };
})(jQuery, Drupal);
