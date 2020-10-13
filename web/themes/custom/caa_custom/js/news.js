(function($, Drupal, drupalSettings) {

  Drupal.behaviors.ceaNewsRefresh = {
    initial: true,
    attach: function(context, settings) {
      // Attach action to Drupal Ajax Views event
      $(document).once('ceaNewsRefresh').ajaxSuccess(function (event, data) {

        $('#edit-taxonomy-vocabulary-2-target-id').on('change.ceaNewsRefresh', function(e) {
          Drupal.behaviors.ceaNewsRefresh.initial = false;
        });


        if (drupalSettings && drupalSettings.views && drupalSettings.views.ajaxViews) {

          var ajaxViews = drupalSettings.views.ajaxViews;
          Object.keys(ajaxViews || {}).forEach(function (i) {
            if (ajaxViews[i]['view_name'] == 'news_views' &&  ajaxViews[i]['view_display_id'] == 'page_1' && !Drupal.behaviors.ceaNewsRefresh.initial) {
              $([document.documentElement, document.body]).animate({
                  scrollTop: $('.view-id-news_views.view-display-id-page_1 > .view-content').offset().top
              }, 500);

            }
          });

        }
      });
    }

  };

})(jQuery, Drupal, drupalSettings);