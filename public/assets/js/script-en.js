// side menu close start
$(".side-menu-close").on("click", function () {
  if (!$(".side-menu-close").hasClass("closed")) {
    $(".side-menu-close").addClass("closed");
  } else {
    $(".side-menu-close").removeClass("closed");
  }
});
// side menu close end
const $menu = $(".side-menu-wrap");
$(document).mouseup((e) => {
  if (
    !$menu.is(e.target) && // if the target of the click isn't the container...
    $menu.has(e.target).length === 0
  ) {
    $menu.removeClass("opened");
    $(".side-menu-close").removeClass("closed");
  }
});

// open side menu when clicked on menu button start
$(".side-menu-close").on("click", function () {
  if (!$(".side-menu-wrap").hasClass("opened")) {
    $(".side-menu-wrap").addClass("opened");
  } else {
    $(".side-menu-wrap").removeClass("opened");
  }
});

// close side menu when swiped start
var isDragging = false,
  initialOffset = 0,
  finalOffset = 0;
$(".side-menu-wrap")
  .mousedown(function (e) {
    isDragging = false;
    initialOffset = e.offsetX;
  })
  .mousemove(function () {
    isDragging = true;
  })
  .mouseup(function (e) {
    var wasDragging = isDragging;
    isDragging = false;
    finalOffset = e.offsetX;
    if (wasDragging) {
      if (initialOffset > finalOffset) {
        sideMenuCloseAction();
      }
    }
  });
// close side menu when swiped end

function sideMenuCloseAction() {
  $(".side-menu-wrap").addClass("open");
  $(".side-menu-wrap").removeClass("opened");
  $(".side-menu-close").removeClass("closed");
}
// close side menu when clicked on overlay end

// close side menu over 992px start
$(window).on("resize", function () {
  if ($(window).width() >= 992) {
    sideMenuCloseAction();
  }
});
// close side menu over 992px end

$(document).ready(function () {
  $(".brands-owl").owlCarousel({
    loop: true,
    ltr: true,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 4000,
    nav: true,
    navText: [
      '<i class="fas fa-arrow-left"></i>',
      '<i class="fas fa-arrow-right"></i>',
    ],

    responsive: {
      0: {
        items: 1,
      },
      400: {
        items: 2,
      },
      767: {
        items: 3,
      },
      992: {
        items: 6,
      },
    },
  });
});
$(document).ready(function () {
  $(".products-owl").owlCarousel({
    loop: true,
    ltr: true,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 4000,
    nav: true,
    margin:20,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],

    responsive: {
      0: {
        items: 1,
      },
      400: {
        items: 2,
      },
      767: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });
});
// delete item from cart
$(".cart_removeItem").click(function () {
  $(this).parent().parent().remove();
  return false;
});
$(".onlineInp").click(function () {
  $(".creditdata").hide();
  $("#" + $(this).data("form")).show();
});

const header = document.querySelector(".header-web");
const toggleClass = "is-sticky";
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 150) {
    header.classList.add(toggleClass);
  } else {
    header.classList.remove(toggleClass);
  }
});
const headerMob = document.querySelector(".header-mobile");
const toggleClassMob = "is-sticky";
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 150) {
    headerMob.classList.add(toggleClassMob);
  } else {
    headerMob.classList.remove(toggleClassMob);
  }
});

$(".nav-link").click(function () {
  $("html, body").animate(
    {
      scrollTop: $($(this).attr("href")).offset().top,
    },
    500
  );
  return false;
});

// Get all sections that have an ID defined
const sections = document.querySelectorAll("section[id]");

// Add an event listener listening for scroll
window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  // Get current scroll position
  let scrollY = window.pageYOffset;

  // Now we loop through sections to get height, top and ID values for each
  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector("nav a[href*=" + sectionId + "]")
        .classList.add("active");
    } else {
      document
        .querySelector("nav a[href*=" + sectionId + "]")
        .classList.remove("active");
    }
  });
}

/*in mobile */
document.addEventListener("DOMContentLoaded", function () {
  const selector = ".nav-link";
  const elems = Array.from(document.querySelectorAll(selector));
  const navigation = document.querySelector(".main-menu");

  function makeActive(evt) {
    const target = evt.target;

    if (!target || !target.matches(selector)) {
      return;
    }

    elems.forEach((elem) => elem.classList.remove("activee"));

    evt.target.classList.add("activee");
  }

  navigation.addEventListener("mousedown", makeActive);
});

// product +/-
$(document).ready(function () {
  $(".num-in span").click(function () {
    var $input = $(this).parents(".num-block").find("input.in-num");
    if ($(this).hasClass("minus")) {
      var count = parseFloat($input.val()) - 1;
      count = count < 1 ? 1 : count;
      if (count < 2) {
        $(this).addClass("dis");
      } else {
        $(this).removeClass("dis");
      }
      $input.val(count);
    } else {
      var count = parseFloat($input.val()) + 1;
      $input.val(count);
      if (count > 1) {
        $(this).parents(".num-block").find(".minus").removeClass("dis");
      }
    }

    $input.change();
    return false;
  });
});

/*details slider */
$(document).ready(function () {
  let slides = document.querySelectorAll(".slide");
  let thumbnails = document.querySelectorAll(".thumbnail");
  let currentTh = document.querySelector(".thumbnail.active");
  let currentSlide = document.querySelector(".slide.show");
  let slideCount = slides.length;
  let currentSlideId = currentSlide.dataset.slide;
  let currentThId = currentTh.dataset.slide;
  let nextSlideBtn = document.querySelector(".slide-btn.next-slide");
  let prevSlideBtn = document.querySelector(".slide-btn.prev-slide");
  let nextSlideTimer = 100000;

  thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", showSlide);
  });

  nextSlideBtn.addEventListener("click", nextSlide);
  prevSlideBtn.addEventListener("click", prevSlide);

  let slideshow = setInterval(nextSlide, nextSlideTimer);

  function showSlide(e) {
    let slideId = e.currentTarget.dataset.slide;
    let thId = e.currentTarget.dataset.slide;
    currentSlide.classList.remove("show");
    currentTh.classList.remove("active");
    currentSlide = document.querySelector(`.slide[data-slide="${slideId}"`);
    currentTh = document.querySelector(`.thumbnail[data-slide="${thId}"`);
    currentSlide.classList.add("show");
    currentTh.classList.add("active");

    resetSlideShow();
  }

  function nextSlide() {
    let nextSlideId =
      currentSlideId >= slideCount ? 1 : parseInt(currentSlideId) + 1;
    let nextSlideIdTh =
      currentThId >= slideCount ? 1 : parseInt(currentThId) + 1;
    currentSlide.classList.remove("show");
    currentTh.classList.remove("active");
    currentSlide = document.querySelector(`.slide[data-slide="${nextSlideId}"`);
    currentTh = document.querySelector(
      `.thumbnail[data-slide="${nextSlideIdTh}"`
    );
    currentSlideId = currentSlide.dataset.slide;
    currentThId = currentTh.dataset.slide;
    currentSlide.classList.add("show");
    currentTh.classList.add("active");
    resetSlideShow();
  }

  function prevSlide() {
    let prevSlideId =
      currentSlideId <= 1 ? slideCount : parseInt(currentSlideId) - 1;
    let prevSlideIdTh =
      currentThId <= 1 ? slideCount : parseInt(currentThId) - 1;
    currentSlide.classList.remove("show");
    currentTh.classList.remove("active");
    currentSlide = document.querySelector(`.slide[data-slide="${prevSlideId}"`);
    currentTh = document.querySelector(
      `.thumbnail[data-slide="${prevSlideIdTh}"`
    );
    currentSlideId = currentSlide.dataset.slide;
    currentThId = currentTh.dataset.slide;
    currentSlide.classList.add("show");
    currentTh.classList.add("active");
    resetSlideShow();
  }

  function resetSlideShow() {
    clearInterval(slideshow);
    slideshow = setInterval(nextSlide, nextSlideTimer);
  }
});
