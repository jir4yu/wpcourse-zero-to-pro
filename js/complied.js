"use strict";function popupWindow(o,e,i,n,t){const r=i.top.outerHeight/2+i.top.screenY-t/2,s=i.top.outerWidth/2+i.top.screenX-n/2;return i.open(o,e,`toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=${n}, height=${t}, top=${r}, left=${s}`)}jQuery(".slider-block").slick({infinite:!0,autoplay:!1,dots:!0}),jQuery(".mobile-slider-block").slick({infinite:!0,autoplay:!1,dots:!0}),jQuery(".menu-slider").slick({infinite:!0,autoplay:!1,dots:!1,arrows:!0,slidesToShow:3,prevArrow:'<a href="javascript:void(0)" class="menu-prev"></a>',nextArrow:'<a href="javascript:void(0)" class="menu-next"></a>',responsive:[{breakpoint:992,settings:{slidesToShow:2}},{breakpoint:576,settings:{slidesToShow:1}}]}),jQuery(".mobile-show-menu").on("click",(function(){jQuery(".mobile-menu-block").addClass("active"),jQuery("body").addClass("lock")})),jQuery(".mobile-close-menu, .mobile-backdrop").on("click",(function(o){jQuery(".mobile-menu-block").removeClass("active"),jQuery("body").removeClass("lock")})),jQuery(document).on("click",".social-facebook",(function(){popupWindow(`https://www.facebook.com/sharer.php?u=${window.location.href}`,"Share on Facebook",window,600,300)})),jQuery(document).on("click",".social-twitter",(function(){popupWindow(`https://twitter.com/intent/tweet?url=${window.location.href}`,"Share on Twitter",window,600,300)})),jQuery(document).on("click",".social-line",(function(){popupWindow(`https://lineit.line.me/share/ui?url=${window.location.href}`,"Share on Line",window,600,300)}));
//# sourceMappingURL=complied.js.map
