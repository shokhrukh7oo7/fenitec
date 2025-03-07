/*=== Javascript function indexing hear===========

1.counterUp ----------(Its use for counting number)
2.stickyHeader -------(header class sticky)
3.wowActive ----------( Waw js plugins activation)
4.swiperJs -----------(All swiper in this website hear)
5.salActive ----------(Sal animation for card and all text)
6.textChanger --------(Text flip for banner section)
7.timeLine -----------(History Time line)
8.datePicker ---------(On click date calender)
9.timePicker ---------(On click time picker)
10.timeLineStory -----(History page time line)
11.vedioActivation----(Vedio activation)
12.searchOption ------(search open)
13.cartBarshow -------(Cart sode bar)
14.sideMenu ----------(Open side menu for desktop)
15.Back to top -------(back to top)
16.filterPrice -------(Price filtering)

==================================================*/
// navigation tab
document.addEventListener("DOMContentLoaded", () => {
  const pulseWrapper = document.querySelector(".pulse-wrapper");
  const callCenterLinks = document.querySelector(".call-center-links");
  const callCenterWrapper = document.querySelector(".call-center-wrapper");
  const linksWrapper = document.querySelector(".links-wrapper");
  const closeIcon = document.querySelector(".close-icon");

  // Проверяем, чтобы элементы существовали
  const iconsWrappers = [callCenterLinks, callCenterWrapper].filter(Boolean);

  iconsWrappers.forEach((item) => {
    item.addEventListener("click", (e) => {
      const name = item.getAttribute("name");
      if (name === "links") {
        pulseWrapper.style.animation = "pulse 1s linear infinite";

        // callCenterWrapper
        callCenterWrapper.style.display = "flex";
        callCenterWrapper.style.opacity = "1";

        // callCenterLinks
        callCenterLinks.style.opacity = "0";
        linksWrapper.style.maxHeight = "0";
        linksWrapper.style.bottom = "0";

        setTimeout(() => {
          callCenterLinks.style.display = "none";
        }, 500);
      } else {
        callCenterWrapper.style.opacity = "0";
        callCenterLinks.style.display = "flex";
        pulseWrapper.style.animation = "none";
        setTimeout(() => {
          linksWrapper.style.maxHeight = "200px";
          linksWrapper.style.bottom = "75px";
          callCenterLinks.style.opacity = "1";
        }, 100);
        setTimeout(() => {
          callCenterWrapper.style.display = "none";
        }, 500);
      }
    });
  });
});

(function ($) {
  "use strict";

  var imJs = {
    m: function (e) {
      imJs.d();
      imJs.methods();
    },
    d: function (e) {
      (this._window = $(window)),
        (this._document = $(document)),
        (this._body = $("body")),
        (this._html = $("html"));
    },
    methods: function (e) {
      imJs.stickyHeader();
      imJs.metismenu();
      imJs.salActive();
      imJs.sideMenu();
      imJs.backToTopInit();
    },
    // sticky header activation
    stickyHeader: function (e) {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
          $(".header--sticky").addClass("sticky");
        } else {
          $(".header--sticky").removeClass("sticky");
        }
      });
    },
    salActive: function () {
      $(document).ready(function () {
        sal({
          threshold: 0.1,
          once: true,
        });
      });
    },
    // metismenu
    metismenu: function () {
      $("#mobile-menu-active").metisMenu();
    },
    // side menu desktop
    sideMenu: function () {
      $(document).on("click", "#menu-btn", function () {
        $("#side-bar").addClass("show");
        $("#anywhere-home").addClass("bgshow");
      });
      $(document).on("click", ".close-icon-menu", function () {
        $("#side-bar").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
      $(document).on("click", "#anywhere-home", function () {
        $("#side-bar").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
      $(document).on("click", ".onepage .mainmenu li a", function () {
        $("#side-bar").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
    },

    backToTopInit: function () {
      $(document).ready(function () {
        "use strict";

        var progressPath = document.querySelector(".progress-wrap path");
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "stroke-dashoffset 10ms linear";
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength) / height;
          progressPath.style.strokeDashoffset = progress;
        };
        updateProgress();
        $(window).scroll(updateProgress);
        var offset = 50;
        var duration = 550;
        jQuery(window).on("scroll", function () {
          if (jQuery(this).scrollTop() > offset) {
            jQuery(".progress-wrap").addClass("active-progress");
          } else {
            jQuery(".progress-wrap").removeClass("active-progress");
          }
        });
        jQuery(".progress-wrap").on("click", function (event) {
          event.preventDefault();
          jQuery("html, body").animate({ scrollTop: 0 }, duration);
          return false;
        });
      });
    },
  };

  imJs.m();
})(jQuery, window);

document.addEventListener("DOMContentLoaded", () => {
  const showBtn = document.getElementById("show-btn");
  const modal = document.getElementById("modal-cotalog");
  const closeBtn = document.getElementById("close-btn");
  const overlay = document.getElementById("overlay");
  const closeSendBtn = document.querySelector(".wpcf7-submit ");

  // 	add classList hidden
  const addHidden = () => {
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
  };
  // 	remove classList hidden
  const removeHidden = () => {
    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
  };

  if (closeSendBtn) {
    closeSendBtn.addEventListener("click", addHidden);
  }

  if (showBtn) {
    showBtn.addEventListener("click", removeHidden);
  }

  if (closeBtn) {
    closeBtn.addEventListener("click", addHidden);
  }

  if (overlay) {
    overlay.addEventListener("click", addHidden);
  }

  document.addEventListener("keydown", (e) => {
    if (e.key == "Escape") {
      addHidden();
    }
  });
});

document.addEventListener(
  "wpcf7submit",
  function (event) {
    var ruUrl = "https://fenitec.uz/wp-content/uploads/2024/11/katalogru.pdf";
    var enUrl = "https://fenitec.uz/wp-content/uploads/2024/11/katalog-en.pdf";
    var url = ruUrl;
    var lang = document.getElementsByTagName("html")[0].getAttribute("lang");
    if (lang == "en-US") {
      url = enUrl;
    }
    document.body.innerHTML +=
      '<a id="cat-download-btn" href="' + url + '" download></a>';
    var btn = document.getElementById("cat-download-btn");
    btn.click();
  },
  false
);

// ===========================================================================
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
// ===========================================================================
// header language dropdown js
// document.addEventListener("DOMContentLoaded", function () {
//     const dropdown = document.querySelector(".language-dropdown");
//     const toggle = document.querySelector(".dropdown-toggle");

//     toggle.addEventListener("click", function (event) {
//         event.preventDefault();
//         dropdown.classList.toggle("active");
//     });

//     document.addEventListener("click", function (event) {
//         if (!dropdown.contains(event.target)) {
//             dropdown.classList.remove("active");
//         }
//     });
// });
