"use strict";function scrollDirection(){var s=0;$(window).on("scroll",function(){var e=$(this).scrollTop();e<s?($("body").removeClass("hidden"),$("body").addClass("scrolledUp"),$("body").removeClass("scrolledDown")):($("body").removeClass("scrolledUp"),$("body").addClass("scrolledDown")),s=e})}function goToSection__scroll(e,s,l,a,o){var t=$(window).scrollTop(),n=$(e).offset().top;n<t?setTimeout(function(){$("html, body").animate({scrollTop:n-s},a)},o):setTimeout(function(){$("html, body").animate({scrollTop:n-l},a)},o)}function stickyPosition(e,s,l){var e=$(e),a=$(".l-nav");!a.hasClass("is-scrolled")||a.hasClass("is-hidden")?e.css("top",s):e.css("top",l)}AOS.init();var openSubMenu,closeSubMenuReference,navElement,navMobile,navHamburguer,navToggleSearch,closeAllNavElements,disableOverflow,enableOverflow,slideLength,defaultModal=$(".m-modal"),closeModal=$(".js-m-modal__close"),closeAllModals=$(".js-m-modal__closeAll"),openModal=$(".js-m-modal__open"),body=$("body"),cForm__attach=(closeModal.on("click",function(e){e.preventDefault();e=$(this).attr("href");$(e).removeClass("is-active"),history.back(),setTimeout(function(){$(".m-modal.is-active").length||body.removeClass("u-overflowBlocked")},50)}),closeAllModals.on("click",function(e){e.preventDefault(),defaultModal.removeClass("is-active"),window.location.hash="",body.removeClass("u-overflowBlocked")}),openModal.on("click",function(e){e.preventDefault();e=$(this).attr("href");$(e).addClass("is-active"),window.location.hash=e,body.addClass("u-overflowBlocked")}),$(window).on("load",function(){var e=window.location.hash;$(e).hasClass("m-modal")&&($(e).addClass("is-active"),body.addClass("u-overflowBlocked"))}),$(".c-form").on("submit",function(e){e.preventDefault(),$(this).find(".c-feedbackForm").length&&($(this).find(".c-form__hero").addClass("u-dnone").closest(".c-form").find(".c-form__fieldsHero").addClass("u-dnone"),$(this).closest(".c-form").find(".c-feedbackForm__status.--load").removeClass("u-dnone"),console.log("Fazer aqui a lógica para o sucesso do envio"),console.log("Fazer aqui a lógica para o erro do envio"))}),document.querySelectorAll(".c-form .js-field__attach")),cHamburguer=(cForm__attach.forEach(function(s){s.addEventListener("change",function(){var e=s.value.split("fakepath")[1];s.closest(".--file").querySelectorAll(".js-field__text")[0].value=e})}),document.querySelectorAll(".c-hamburguer")),removeGridClass=(cHamburguer.forEach(function(e){e.addEventListener("click",function(){e.classList.contains("is-blocked")||e.classList.toggle("is-active")})}),function(e){for(var s=1;s<=12;s++)e.classList.remove("--col"+s);e.classList.remove("--colNaN")}),initResponsiveGrids=function(){cResponsiveGrid.forEach(function(e,s){e.classList.add("js-responsiveGrid");var l={maxwBreaks:e.getAttribute("data-maxw-breaks").split(", ").map(Number),maxwCols:e.getAttribute("data-maxw-cols").split(", ").map(Number),initCols:parseInt(e.getAttribute("data-cols-init")),windowW:window.innerWidth},a=l.maxwBreaks.length;if(a===l.maxwCols.length)for(var o=0;o<=a;o++)l.maxwBreaks[o]>=l.windowW&&(removeGridClass(e),e.classList.add("--col"+l.maxwCols[o])),l.windowW>l.maxwBreaks[0]&&(removeGridClass(e),e.classList.add("--col"+l.initCols));else console.log("Erro na construção do grid responsivo")})},cResponsiveGrid=document.querySelectorAll(".c-responsiveGrid"),cSmartMenu=(window.addEventListener("load",initResponsiveGrids),window.addEventListener("resize",initResponsiveGrids),document.querySelectorAll(".c-smartMenu")),activeClass="is-active",createSlider=(cSmartMenu&&(cSmartMenu.forEach(function(e){e.classList.add("js-smartMenu"),Array.from(e.children[0].children).forEach(function(e){e.classList.add("js-smartMenu__firstSub")}),document.querySelectorAll(".c-smartMenu li").forEach(function(e){e.children[1]&&(e.classList.add("js-smartMenu__li"),e.children[0].classList.add("js-smartMenu__toggle"),e.children[1].classList.add("js-smartMenu__subMenu"))})}),(openSubMenu=document.querySelectorAll(".js-smartMenu__toggle")).forEach(function(s){s.closest(".c-smartMenu").classList.contains("--click")?s.addEventListener("click",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)}):s.addEventListener("mouseenter",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)})}),(closeSubMenuReference=document.querySelectorAll(".js-smartMenu__firstSub")).forEach(function(e){e.parentElement.parentElement.classList.contains("--vertical")||e.addEventListener("mouseleave",function(){cSmartMenu.forEach(function(e){e.classList.remove(activeClass),e.querySelectorAll("*").forEach(function(e){e.classList.remove(activeClass)})})})})),$(".c-toggleList").length&&$(".c-toggleList__header").on("click",function(){$(this).parent().hasClass("is-active")?$(this).parent().toggleClass("is-active"):($(".c-toggleList").removeClass("is-active"),$(this).parent().addClass("is-active"))}),function(e){var s=e+" .c-defaultSlider__arrows";return new Swiper(e+" .c-defaultSlider__swiper",{speed:400,spaceBetween:0,autoHeight:!0,navigation:{nextEl:s+" .swiper-button-next",prevEl:s+" .swiper-button-prev"}})}),swiper__headerHome=(createSlider(".s-product__gallery"),createSlider(".s-product__gallerySmall"),$(".c-tab").length&&$(".c-tab__header li").on("click",function(e){var s=$(this).children("span").attr("data-tab");$(".c-tab__header span").removeClass("is-active"),$('.c-tab__header span[data-tab="'+s+'"]').addClass("is-active"),$(".c-tab__hero__content").removeClass("is-active"),$('.c-tab__hero__content[data-tab="'+s+'"]').addClass("is-active"),goToSection__scroll(".c-tab",100,50,700,10)}),$(".l-nav").length&&(navElement=$(".l-nav"),navMobile=$(".l-navMobile"),navHamburguer=$(".l-nav .c-hamburguer"),navToggleSearch=$(".js-l-nav__toggleSearch"),closeAllNavElements=function(){$(".c-subMenu").removeClass("is-active"),navHamburguer.removeClass("is-active")},disableOverflow=function(){$("body").addClass("u-overflowBlocked")},enableOverflow=function(){$("body").removeClass("u-overflowBlocked")},$(".js-openNavMobile").on("click",function(){navMobile.addClass("is-active"),$(".js-closeNavMobile.c-hamburguer").addClass("is-active"),disableOverflow()}),$(".js-closeNavMobile").on("click",function(){navMobile.removeClass("is-active"),navHamburguer.removeClass("is-active"),enableOverflow()}),$(window).on("load",function(e){99<$(this).scrollTop()?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled")}),$(window).on("scroll",function(){var e=$(this).scrollTop();99<e?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled"),600<e?(navElement.addClass("is-hidden"),navElement.addClass("is-middle")):(navElement.removeClass("is-hidden"),navElement.removeClass("is-middle")),e<0?(navElement.removeClass("is-hidden"),navElement.addClass("is-scrolledUp"),navElement.removeClass("is-scrolledDown")):(navElement.removeClass("is-scrolledUp"),navElement.addClass("is-scrolledDown")),navElement.hasClass("is-hidden")&&closeAllNavElements(),navElement.scrollInit=e}),navToggleSearch.on("click",function(){navToggleSearch.toggleClass("is-active"),$(".l-nav__search").toggleClass("is-active")})),new Swiper(".js-l-fullBanner__swiper",{speed:400,spaceBetween:0,touchRatio:.25,autoHeight:!0,navigation:{nextEl:".l-fullBanner__arrows .swiper-button-next",prevEl:".l-fullBanner__arrows .swiper-button-prev"}})),toggleMobileAside=(!$(".l-fullBanner .swiper-slide").length||(slideLength=$(".l-fullBanner .swiper-slide").length)<=1&&$(".l-fullBanner__arrows").addClass("u-dnone"),function(){$(".s-findUs").toggleClass("is-mobile-active")});$(".js-s-findUs__mobileControl").on("click",function(e){e.preventDefault(),toggleMobileAside()}),$(".s-findUs__aside .c-form").on("submit",function(e){e.preventDefault(),toggleMobileAside()}),$(".js-s-findUs__toggleDecortiles").on("click",function(){$(".s-findUs__content__gallery").toggleClass("is-active"),$(this).toggleClass("is-active"),$(".s-findUs").removeClass("is-mobile-active")});