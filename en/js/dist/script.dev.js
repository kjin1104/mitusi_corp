"use strict";

$(function () {
  $('a[href^="#"]').on('click', function () {
    var speed = 300;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return !1;
  });
  var $pageTop = $('.page-top');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $pageTop.fadeIn();
    } else {
      $pageTop.fadeOut();
    }
  });
  $pageTop.on('click', function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300);
    return !1;
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $('.header').addClass('active');
    } else {
      $('.header').removeClass('active');
    }
  });
  var btnMenu = $('.btn-menu');
  var globalNav = $('.global-nav');
  btnMenu.on('click', function () {
    btnMenu.toggleClass('active');
    globalNav.toggleClass('show');
  });
});
$(window).on('load', function () {
  $("#splashanm-logo").delay(1200).fadeOut('slow');
  $("#splashanm").delay(1500).fadeOut('slow', function () {
    $('body').addClass('appear');
  });
  $('.splashanmbg').on('animationend', function () {});
});

function movie_defer() {
  var iframes = document.querySelectorAll('.defer');
  var iframe = Array.prototype.slice.call(iframes, 0);
  iframe.forEach(function (iframe) {
    if (iframe.getAttribute('data-src')) {
      iframe.setAttribute('src', iframe.getAttribute('data-src'));
    }
  });
}

window.addEventListener('load', movie_defer);

function fadeAnime() {
  $('.work,.top-message,.work-environment,#message__text,.svg__card').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fade');
    } else {
      $(this).removeClass('fade');
    }
  });
}

$(window).scroll(function () {
  fadeAnime();
});
$(function () {
  $('#message__text').on('inview', function (event, isInView) {
    if (isInView) {
      $(this).addClass('fadeInDown');
      $(this).css('opacity', 1);
    } else {
      $(this).removeClass('fadeInDown');
      $(this).css('opacity', 0);
    }
  });
});

function GethashID(hashIDName) {
  if (hashIDName) {
    $('.tab_c li').find('a').each(function () {
      var idName = $(this).attr('href');

      if (idName == hashIDName) {
        var parentElm = $(this).parent();
        $('.tab li').removeClass("active");
        $(parentElm).addClass("active");
        $(".area").removeClass("is-active");
        $(hashIDName).addClass("is-active");
      }
    });
  }
}

$('.tab_c a').on('click', function () {
  var idName = $(this).attr('href');
  GethashID(idName);
  return !1;
});
$(window).on('load', function () {
  $('.tab li:first-of-type').addClass("active");
  $('.area_c:first-of-type').addClass("is-active");
  var hashName = location.hash;
  GethashID(hashName);
});
document.addEventListener('DOMContentLoaded', function (event) {
  var targetButton = document.getElementById('submitButton');
  var triggerCheckbox = document.querySelector('input[name="agree"]');
  targetButton.disabled = !0;
  targetButton.classList.add('is-inactive');
  triggerCheckbox.addEventListener('change', function () {
    if (this.checked) {
      targetButton.disabled = !1;
      targetButton.classList.remove('is-inactive');
      targetButton.classList.add('is-active');
    } else {
      targetButton.disabled = !0;
      targetButton.classList.remove('is-active');
      targetButton.classList.add('is-inactive');
    }
  }, !1);
}, !1);
document.addEventListener('DOMContentLoaded', function (event) {
  var targetButton = document.getElementById('submitButton_sec');
  var triggerCheckbox = document.querySelector('input[name="senior"]');
  targetButton.disabled = !0;
  targetButton.classList.add('is-inactive');
  triggerCheckbox.addEventListener('change', function () {
    if (this.checked) {
      targetButton.disabled = !1;
      targetButton.classList.remove('is-inactive');
      targetButton.classList.add('is-active');
    } else {
      targetButton.disabled = !0;
      targetButton.classList.remove('is-active');
      targetButton.classList.add('is-inactive');
    }
  }, !1);
}, !1);
document.addEventListener('DOMContentLoaded', function (event) {
  var targetButton = document.getElementById('submitButton_third');
  var triggerCheckbox = document.querySelector('input[name="abroad"]');
  targetButton.disabled = !0;
  targetButton.classList.add('is-inactive');
  triggerCheckbox.addEventListener('change', function () {
    if (this.checked) {
      targetButton.disabled = !1;
      targetButton.classList.remove('is-inactive');
      targetButton.classList.add('is-active');
    } else {
      targetButton.disabled = !0;
      targetButton.classList.remove('is-active');
      targetButton.classList.add('is-inactive');
    }
  }, !1);
}, !1);
$(function () {
  $('.mh').matchHeight();
});
$(function () {
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 15000,
    cssEase: "linear",
    slidesToShow: 4,
    swipe: false,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 750,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});
$(function () {
  var path = location.pathname;
  var thelist = $(".company-list__btn li,.technical-list__btn li,.company-list__btn li");
  thelist.each(function () {
    var link = $(this).find('a').attr('href');

    if (path.indexOf(link) > -1) {
      var link = $(this).find('a').addClass("on");
    }
  });
});
$(function () {
  var path = location.pathname;
  var thelist = $(".company-list__btn li,.technical-list__btn li,.company-list__btn li");
  thelist.each(function () {
    var link = $(this).find('a').attr('href');

    if (path.indexOf(link) > -1) {
      $("a").addClass("mh");
    }
  });
  $('.btn-6').on('mouseenter', function (e) {
    var parentOffset = $(this).offset(),
        relX = e.pageX - parentOffset.left,
        relY = e.pageY - parentOffset.top;
    $(this).find('span').css({
      top: relY,
      left: relX
    });
  }).on('mouseout', function (e) {
    var parentOffset = $(this).offset(),
        relX = e.pageX - parentOffset.left,
        relY = e.pageY - parentOffset.top;
    $(this).find('span').css({
      top: relY,
      left: relX
    });
  });
  $('[href=#]').click(function () {
    return false;
  });
});