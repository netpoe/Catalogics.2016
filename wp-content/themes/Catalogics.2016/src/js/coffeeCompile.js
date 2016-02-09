(function() {
  $(document).ready(function() {
    var $applyScene, $sectionScroll, $sectionScrollContent, $sectionScrollController, $sectionScrollList, cleanupSpecialCharacters, scrollDownRef;
    $sectionScroll = $('body #section-scroll');
    $sectionScrollList = $('body #section-scroll ul');
    $sectionScrollContent = $('[data-section-scroll]');
    cleanupSpecialCharacters = function(str) {
      str = str.replace(/[ÀÁÂÃÄÅ]/g, 'A');
      str = str.replace(/[àáâãäå]/g, 'a');
      str = str.replace(/[ÈÉÊË]/g, 'E');
      str = str.replace(/[é]/g, 'e');
      str = str.replace(/[Í]/g, 'I');
      str = str.replace(/[í]/g, 'i');
      str = str.replace(/[Ú]/g, 'U');
      str = str.replace(/[ú]/g, 'u');
      str = str.replace(/[Ó]/g, 'O');
      str = str.replace(/[ó]/g, 'o');
      return str.replace(/[^a-z0-9]/gi, '');
    };
    $sectionScrollController = new ScrollMagic.Controller();
    scrollDownRef = [];
    $.each($sectionScrollContent, function(index, item) {
      var $sectionScrollScene, idGen, scrollRef, sectionData, sectionList, triggerRef;
      triggerRef = '.section-scroll-' + index;
      sectionData = $(item).data('section-scroll');
      idGen = sectionData.toString().toLowerCase();
      idGen = cleanupSpecialCharacters(idGen);
      idGen = idGen.split(' ').join('-');
      scrollRef = '.scroll-ref-' + index;
      $(item).addClass('section-scroll-' + index);
      $(item).attr('id', idGen);
      scrollDownRef.push(idGen);
      sectionList = '<li><a href="#' + idGen + '"' + 'class="animated bounceInRight ad-' + (index * 2) + ' scroll-ref-' + index + ' atm-scroll-item">' + sectionData + '</a></li>';
      $sectionScrollList.append(sectionList);
      $sectionScrollScene = new ScrollMagic.Scene({
        triggerHook: 'onLeave',
        triggerElement: triggerRef,
        duration: $(item).height()
      }).setClassToggle(scrollRef, 'active').addTo($sectionScrollController);
    });
    $sectionScrollList.find('li:first-child a').addClass('active');
    scrollDownRef.shift();
    $.each($sectionScrollContent, function(index, item) {
      var idRef, scrollDownAnchor;
      idRef = scrollDownRef.shift();
      scrollDownAnchor = '<a class="scroll-down scroll-down-sq size lg"' + 'href="#' + idRef + '"' + 'rel="nofollow">' + 'down' + '</a>';
      if (idRef !== void 0) {
        $(item).append(scrollDownAnchor);
      }
    });
    $applyScene = new ScrollMagic.Scene({
      triggerHook: 'onEnter',
      triggerElement: '.section-scroll-3'
    }).addTo($sectionScrollController);
    $applyScene.on('enter', function(e) {
      $('.btn-apply').addClass('bounceInRight');
    });
  });

}).call(this);
