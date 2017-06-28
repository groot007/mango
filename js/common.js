// import("../libs/jquery/dist/jquery.min.js");
// import("../libs/slick/slick.min.js");
// notimport("../libs/niceSelect/jquery.nice-select.min.js");
// import("../libs/waypoint/jquery.waypoints.min.js");
// import("../libs/masked-input.min.js");
// import("../libs/scrollToId/jquery.malihu.PageScroll2id.js");
// import("../libs/magnific-popup/js/jquery.magnific-popup.min.js");
// notimport("../libs/countdown/jquery.countdown.min.js");
// import("../libs/clipboard.min.js");
// import("../libs/matchHeight.js");
// imp2ort("../libs/jquery.parallax.min.js");

$(function() {
//  hide input, textarea placeholder  ==================
 $('input,textarea').focus(function(){
   $(this).data('placeholder',$(this).attr('placeholder'))
   $(this).attr('placeholder','');
 });
 $('input,textarea').blur(function(){
   $(this).attr('placeholder',$(this).data('placeholder'));
 });
// end  ==================

$(".phone").mask("+7(999) 999-99-99"); // mask for phone number

// $(window).parallaxmouse({
//   elms: [
//       // {el: $('#layer-1'), rate: 0.8},
//       {el: $('#layer-1'), rate: 0.1},
//       {el: $('#layer-2'), rate: 0.8},
//   ]
// });

var currentX = '';
var currentY = '';
var movementConstant = .015;
$(document).on("mousemove",".game" ,function(e) {
  var wrap = $(this).find("#wrapper");
  if(currentX == '') currentX = e.pageX;
  var xdiff = e.pageX - currentX;
  currentX = e.pageX;
   if(currentY == '') currentY = e.pageY;
  var ydiff = e.pageY - currentY;
  currentY = e.pageY;
  // console.log(1);
  var newX;
 wrap.find('div.layer1, div.layer2').each(function(i, el) {
     var movement,movementy,newY;
    if ($(el).hasClass("layer2")){
       movement = (i + 1) * (xdiff * (movementConstant+0.01));
    movementy = (i + 1) * (ydiff * movementConstant);
       newX = $(el).position().left + movement;
    newY = $(el).position().top + movementy;
      $(el).css('left', newX + 'px');
      $(el).css('top', newY + 'px');
    }

    else if(!$(el).hasClass("layer1 centavra")){
         movement = (i + 1) * (xdiff * movementConstant);
      movementy = (i + 1) * (ydiff * movementConstant);
         newX = $(el).position().left + movement;
      newY = $(el).position().top + movementy;
        $(el).css('left', newX + 'px');
      $(el).css('top', newY + 'px');
    }

  });
      wrap.find('.layer1.centavra').css("background-position-x", newX/10 + 20 + "%")
     wrap.find('.layer3').css("background-position-x", newX/15 + 20 + "%")
});



$(document).on("click", ".table .row .show-details", function(e){
  e.preventDefault();
  var $this = $(this);

  $this.closest(".row")
    .next()
    .slideToggle();
  // if(showEl.hasClass("hidden")){
  //    table.find(".details").addClass("hidden");
  //   showEl.removeClass("hidden");
  // }else{
  //    table.find(".details").addClass("hidden");
  // }
})


// menu
    $(".resp-mnu").on("click", function(e) {
      var menu = $(".top-menu nav");
        if (menu.hasClass("visible")) {
            menu.removeClass("visible");
        } else {
            menu.addClass("visible");
        }

    });


    $(document).on("click touchend", function(e) {
        var target = $(e.target);
        var fa = $(".resp-mnu");
        var menu = $(".top-menu nav");
        if (target.closest(".resp-mnu").length || target.closest("nav").length) return;
        if (menu.hasClass("visible")) {
            menu.removeClass("visible");
        }
    });


    var topHead = $(".top-menu");
    var headerHeightD = $("header").height();

    $(window).scroll(function() {

        var st = $(this).scrollTop();
        var offsetT = headerHeightD;
        if (st >= offsetT) {
            topHead.addClass("fixed");
        } else if (st <= offsetT) {
            topHead.removeClass("fixed");
        }
    });


// end



// email to buffer

var clipboard = new Clipboard('.email');
  // После того как происходит загрузка флеш файла
    clipboard.on("success", function(client, args) {
      console.log(client.trigger);
      $(client.trigger).next().animate({
        opacity : 1
      }, 100, function(){
        setTimeout(function(){
             $(client.trigger).next().animate({
            opacity : 0
          }, 1000);
        },1000);

      });
    });
    clipboard.on('error', function(e) {
      console.error('Не удалось скопировать email');
  });
// end

// pulse Animation  ==================
	// $('.pulse, .btn').each(function() {
 //    var $this = $(this);

 //    var ink, d, x, y;

 //    setInterval(function() {
 //      if($this.find(".ink").length === 0){
 //        $this.prepend("<span class='ink'></span>");
 //      }

 //      ink = $this.find(".ink");
 //      ink.removeClass("animate");

 //      if(!ink.height() && !ink.width()){
 //        d = Math.max($this.outerWidth(), $this.outerHeight());
 //        ink.css({height: d, width: d});
 //      }

 //      x = Math.round(Math.random()*ink.width() - ink.width()/2);
 //      y = Math.round(Math.random()*ink.height() - ink.height()/2);
 //                // y = 0;
 //                // x = e.pageX - $this.offset().left - ink.width()/2;
 //                // y = e.pageY - $this.offset().top - ink.height()/2;

 //                ink.css({top: y+'px', left: x+'px'}).addClass("animate");
 //              }, 3000)
 //  });
// end  ==================

// popup with form
$('.popup').each(function(i, el){
  $(el).magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#name',
    closeBtnInside: true,
    // modal: true,
      // When elemened is focused, some mobile browsers in some cases zoom in
      // It looks not nice, so we disable it:
      callbacks: {
        beforeOpen: function() {
          if($(window).width() < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });
});

$(document).on("click", ".mfp-close", function(e){
  $.magnificPopup.close();
})
// end


// scroll-to-id
$("a.to-id").mPageScroll2id({
    offset: 0,
    scrollEasing: "easeInOutQuint",
    pageEndSmoothScroll: true,
    highlightClass: "highlighted",
  });
//end

// gallery license
$(".photos .gallery").magnificPopup({
  type: 'image',
  delegate: 'a',
  closeOnContentClick: true,
  closeBtnInside: false,
  fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    image: {
      verticalFit: true
    },
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
        duration: 300,
         // don't foget to change the duration also in CSS
      }
    });
// end

// toutube popup
  $('.video-btn').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
      closeBtnInside: true,
    fixedContentPos: false
  });
// end


$(document).on("click", ".games-atmosph .popup", function(e){
 var slideInd = +$(this).data("toslide");
 $(".pop-slider").slick("setPosition");
 $(".pop-slider").slick("slickGoTo", slideInd);
})



// all EQUIPMENT slider
$(".slider-videos, .reviews-slider, .pop-slider").slick({
    arrows: true,
    infinite: true,
    swipe: false,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    waitForAnimate: false,
    adaptiveHeight: true,
      dots: false,
     responsive: [{
      breakpoint: 576,
      settings: {
        draggable: true,
        swipe: true,
        arrows: false,
        adaptiveHeight: true,
      }
    }]
  });


// tabs to move slider equipment items
$(document).on("click", ".about .tabs a", function(e) {
  e.preventDefault();
  var target = $(e.target);
  target.closest(".tabs").find(".tab").removeClass("active");
  target.closest(".tab").addClass("active");
  var tabIndex = +target.data("totab");
  var content = target.closest("section").find(".tab-content");
      content.find(".tab-cont").addClass("hidden");
      content.find("[data-target=" + tabIndex + "]").removeClass("hidden");
});

// end




  // $(".games-list li").matchHeight({ property: 'min-height' });


// FORM SUBMIT

    $('form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var data = {};
          form.find("*").addClass("hidden-s");
          form.find(".success").removeClass("hidden-s");
    });

// end


});
