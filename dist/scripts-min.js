"use strict";function scrollDirection(){var s=0;$(window).on("scroll",function(){var e=$(this).scrollTop();e<s?($("body").removeClass("hidden"),$("body").addClass("scrolledUp"),$("body").removeClass("scrolledDown")):($("body").removeClass("scrolledUp"),$("body").addClass("scrolledDown")),s=e})}function goToSection__scroll(e,s,l,t,o){var a=$(window).scrollTop(),n=$(e).offset().top;n<a?setTimeout(function(){$("html, body").animate({scrollTop:n-s},t)},o):setTimeout(function(){$("html, body").animate({scrollTop:n-l},t)},o)}function stickyPosition(e,s,l){var t=$(e),e=$(".l-nav");!e.hasClass("is-scrolled")||e.hasClass("is-hidden")?t.css("top",s):t.css("top",l)}AOS.init();var defaultModal=$(".m-modal"),closeModal=$(".js-m-modal__close"),closeAllModals=$(".js-m-modal__closeAll"),openModal=$(".js-m-modal__open"),body=$("body");closeModal.on("click",function(e){e.preventDefault();e=$(this).attr("href");$(e).removeClass("is-active"),history.back(),setTimeout(function(){$(".m-modal.is-active").length||body.removeClass("u-overflowBlocked")},50)}),closeAllModals.on("click",function(e){e.preventDefault(),defaultModal.removeClass("is-active"),window.location.hash="",body.removeClass("u-overflowBlocked")}),openModal.on("click",function(e){e.preventDefault();e=$(this).attr("href");$(e).addClass("is-active"),window.location.hash=e,body.addClass("u-overflowBlocked")}),$(window).on("load",function(){var e=window.location.hash;$(e).hasClass("m-modal")&&($(e).addClass("is-active"),body.addClass("u-overflowBlocked"))}),$(".c-languages ul ul li a").on("click",function(e){e.preventDefault(),$(".js-c-languages__toggle").text($(this).text()),sessionStorage.setItem("pageLanguage",$(this).text())}),$(".c-form").on("submit",function(e){e.preventDefault(),$(this).find(".c-feedbackForm").length&&($(this).find(".c-form__fieldsHero").addClass("u-dnone"),$(this).closest(".c-form").find(".c-feedbackForm__status.--load").removeClass("u-dnone"))});var cForm__selects=document.querySelectorAll(".c-form select");cForm__selects.forEach(function(l){l.addEventListener("click",function(){l.parentElement.parentElement.classList.add("is-active")}),l.addEventListener("change",function(e){var s=l.children[l.selectedIndex].text;l.closest(".c-form__field").querySelectorAll(".inputBox")[0].children[0].value=s,l.parentElement.parentElement.classList.remove("is-active")}),l.addEventListener("focusout",function(){l.parentElement.parentElement.classList.remove("is-active")})});var cForm__attach=document.querySelectorAll(".c-form .inputAttach");cForm__attach.forEach(function(s){s.addEventListener("change",function(){var e=s.value.split("fakepath")[1];s.closest(".--file").querySelectorAll(".inputText")[0].value=e})});var cHamburguer=document.querySelectorAll(".c-hamburguer");cHamburguer.forEach(function(e){e.addEventListener("click",function(){e.classList.contains("is-blocked")||e.classList.toggle("is-active")})});var removeGridClass=function(e){for(var s=1;s<=12;s++)e.classList.remove("--col"+s);e.classList.remove("--colNaN")},initResponsiveGrids=function(){cResponsiveGrid.forEach(function(e,s){e.classList.add("js-responsiveGrid");var l={maxwBreaks:e.getAttribute("data-maxw-breaks").split(", ").map(Number),maxwCols:e.getAttribute("data-maxw-cols").split(", ").map(Number),initCols:parseInt(e.getAttribute("data-cols-init")),windowW:window.innerWidth},t=l.maxwBreaks.length;if(t===l.maxwCols.length)for(var o=0;o<=t;o++)l.maxwBreaks[o]>=l.windowW&&(removeGridClass(e),e.classList.add("--col"+l.maxwCols[o])),l.windowW>l.maxwBreaks[0]&&(removeGridClass(e),e.classList.add("--col"+l.initCols));else console.log("Erro na construção do grid responsivo")})},cResponsiveGrid=document.querySelectorAll(".c-responsiveGrid");window.addEventListener("load",initResponsiveGrids),window.addEventListener("resize",initResponsiveGrids);var openSubMenu,closeSubMenuReference,cSmartMenu=document.querySelectorAll(".c-smartMenu"),activeClass="is-active";cSmartMenu&&(cSmartMenu.forEach(function(e){e.classList.add("js-smartMenu"),Array.from(e.children[0].children).forEach(function(e){e.classList.add("js-smartMenu__firstSub")}),document.querySelectorAll(".c-smartMenu li").forEach(function(e){e.children[1]&&(e.classList.add("js-smartMenu__li"),e.children[0].classList.add("js-smartMenu__toggle"),e.children[1].classList.add("js-smartMenu__subMenu"))})}),(openSubMenu=document.querySelectorAll(".js-smartMenu__toggle")).forEach(function(s){s.closest(".c-smartMenu").classList.contains("--click")?s.addEventListener("click",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)}):s.addEventListener("mouseenter",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)})}),(closeSubMenuReference=document.querySelectorAll(".js-smartMenu__firstSub")).forEach(function(e){e.parentElement.parentElement.classList.contains("--vertical")||e.addEventListener("mouseleave",function(){cSmartMenu.forEach(function(e){e.classList.remove(activeClass),e.querySelectorAll("*").forEach(function(e){e.classList.remove(activeClass)})})})})),$(".c-toggleList").length&&$(".c-toggleList__header").on("click",function(){$(this).parent().hasClass("is-active")?$(this).parent().toggleClass("is-active"):($(".c-toggleList").removeClass("is-active"),$(this).parent().addClass("is-active"))}),$(".c-cardGrout").length&&$(".c-cardGrout__more .c-btn").on("click",function(){console.log("teste"),$(this).closest(".c-cardGrout").find(".c-cardGrout__colors").toggleClass("u-dnone")});var navElement,navMobile,navHamburguer,closeAllNavElements,disableOverflow,enableOverflow,createSlider=function(e){var s=e+" .c-defaultSlider__arrows";return new Swiper(e+" .c-defaultSlider__swiper",{speed:400,spaceBetween:0,autoHeight:!0,navigation:{nextEl:s+" .swiper-button-next",prevEl:s+" .swiper-button-prev"}})};createSlider(".s-product__gallery"),createSlider(".s-product__gallerySmall"),$(".c-searchProduct .c-form").on("submit",function(){goToSection__scroll(".s-galleryProduct__content",100,100,700,10)}),$(".l-nav").length&&(navElement=$(".l-nav"),navMobile=$(".l-navMobile"),navHamburguer=$(".l-nav .c-hamburguer"),closeAllNavElements=function(){$(".c-subMenu").removeClass("is-active"),navHamburguer.removeClass("is-active")},disableOverflow=function(){$("body").addClass("u-overflowBlocked")},enableOverflow=function(){$("body").removeClass("u-overflowBlocked")},$(".js-openNavMobile").on("click",function(){navMobile.addClass("is-active"),$(".js-closeNavMobile.c-hamburguer").addClass("is-active"),disableOverflow()}),$(".js-closeNavMobile").on("click",function(){navMobile.removeClass("is-active"),navHamburguer.removeClass("is-active"),enableOverflow()}),$(window).on("load",function(e){99<$(this).scrollTop()?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled")}),$(window).on("scroll",function(){var e=$(this).scrollTop();99<e?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled"),600<e?(navElement.addClass("is-hidden"),navElement.addClass("is-middle")):(navElement.removeClass("is-hidden"),navElement.removeClass("is-middle")),e<0?(navElement.removeClass("is-hidden"),navElement.addClass("is-scrolledUp"),navElement.removeClass("is-scrolledDown")):(navElement.removeClass("is-scrolledUp"),navElement.addClass("is-scrolledDown")),navElement.hasClass("is-hidden")&&closeAllNavElements(),navElement.scrollInit=e}));var slideLength,swiper__headerHome=new Swiper(".js-l-fullBanner__swiper",{speed:400,spaceBetween:0,touchRatio:.25,autoHeight:!0,navigation:{nextEl:".l-fullBanner__arrows .swiper-button-next",prevEl:".l-fullBanner__arrows .swiper-button-prev"}});!$(".l-fullBanner .swiper-slide").length||(slideLength=$(".l-fullBanner .swiper-slide").length)<=1&&$(".l-fullBanner__arrows").addClass("u-dnone");var toggleMobileAside=function(){$(".s-findUs").toggleClass("is-mobile-active")};$(".js-s-findUs__mobileControl").on("click",function(e){e.preventDefault(),toggleMobileAside()}),$(".s-findUs__aside .c-form").on("submit",function(e){e.preventDefault(),toggleMobileAside()}),$(".js-s-findUs__toggleDecortiles").on("click",function(){$(".s-findUs__content__gallery").toggleClass("is-active"),$(this).toggleClass("is-active"),$(".s-findUs").removeClass("is-mobile-active")});