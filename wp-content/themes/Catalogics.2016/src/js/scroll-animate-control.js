(function() {
  $(document).ready(function() {
    var $sectionScrollContent, $sectionScrollController;
    $sectionScrollContent = $('.services-block');
    $sectionScrollController = new ScrollMagic.Controller();

    $.each($sectionScrollContent, function(index, item) {
      var $sectionScrollScene, triggerRef;
      triggerRef = '.section-scroll-' + index;
      $(item).addClass('section-scroll-' + index);
      $sectionScrollScene = new ScrollMagic.Scene({
        triggerHook: 'onLeave',
        triggerElement: triggerRef,
        duration: $(item).height(),
      }).setClassToggle(triggerRef, 'animate').addTo($sectionScrollController);
      // $sectionScrollScene.addIndicators({zindex: 1000, suffix: index}); 
    });
  });

}).call(this);
