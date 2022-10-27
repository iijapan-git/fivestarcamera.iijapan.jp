(function($){
// $(function() {
//     var $button = $('#btn-gnav');
//     var $menu = $('.gnav ul');
//     var menuHeight = $menu.height();
//     $('#btn-gnav').on('click', function(e) {
//         e.preventDefault();
//         $menu.slideToggle();
//         $(this).toggleClass("open");
//         if ($(this).hasClass('open')) {
//             $(this).find("span").text("Close");
//         } else {
//             $(this).find("span").text("Menu");
//         }
//     });
//     $(window).resize(function() {
//         var w = $(window).width();
//         if (w > 320 && $menu.is(':hidden')) {
//             $menu.removeAttr('style');
//         }
//     });
// });

/* spnav */
    $(function() {
        var $gnav = $("#gnav");

        // function isPc() {
        //     return ($gnav.css('white-space') == 'normal');
        // }

        // function isSp() {
        //     return ($gnav.css('white-space') == 'nowrap');
        // }

        $("#spnav").click(function() {
            if ($gnav.hasClass('open')) {
                $gnav.removeClass('open');
                $gnav.slideUp(400);
            } else {
                $gnav.addClass('open');
                $gnav.slideDown(400);
            }
        });

        // PC表示のときgnavを表示する
        // $(window).resize(function(e) {
        //     if (isPc()) {
        //         $gnav.show();
        //         $gnav.find(".gnav-item ul").hide();
        //     }
        // });
    });

    $(document).ready(function() {
        var slider = $('#top-slider ul').bxSlider({
            auto: true,
            pager: true,
            speed: 1000,
            pause:  5000,
            minSlides: 1,
            maxSlides: 3,
            onSlideAfter: function () { slider.startAuto(); },
            onSliderLoad: function(){
                var w = 0;
                $("#top-slider ul > li").each(function(){
                    w += $(this).outerWidth(true);
                }).parent().css("width", w);
            },
        });

        function scrollToElement(target, topoffset) {
            var speed = 800;
            var destination = jQuery(target).offset().top - topoffset;
            jQuery('html:not(:animated),body:not(:animated)').animate({
                scrollTop: destination
            }, speed, function() {
                window.location.hash = target;
            });
            return false;
        }
        $(".gototop").click(function() {
            scrollToElement(".header", 0);
        });
        window.fbAsyncInit = function() {
            FB.init({
                appId: '444677842360161',
                xfbml: true,
                version: 'v2.3'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    });
  
  //scriptタグ削除
  $(function(){
    $(".methods noscript").remove();
  });
  
})(jQuery);