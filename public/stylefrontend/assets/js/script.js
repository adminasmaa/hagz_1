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

$(document).ready(function () {
  $(".slider-owl").owlCarousel({
    loop: true,
    rtl: true,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 4000,
    nav: true,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    items: 1,
  });
  $(".farm-img-carousel").owlCarousel({
    items: 1,
    loop: true,
    dots: true,
    rtl: true,
    slideSpeed: 400,
    animateIn: "fadeIn", // add this
    animateOut: "fadeOut", // and this
    lazyLoad: true,
    autoplay: true,
    navs: true,
    navText: [
      '<i class="fas fa-chevron-left" aria-hidden="true"></i>',
      '<i class="fas fa-chevron-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        nav: false,
      },
      768: {
        nav: true,
      },
    },
  });
});
// Show the first tab by default details page
$(".tabs-content li").hide();
$(".tabs-content li:first").show();
$(".tabs-nav-detail li:first").addClass("tab-active");

// Change tab class and display content
$(".tabs-nav-detail a").on("click", function (event) {
  event.preventDefault();
  $(".tabs-nav-detail li").removeClass("tab-active");
  $(this).parent().addClass("tab-active");
  $(".tabs-content li").hide();
  $($(this).attr("href")).show();
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

// <!--notifications -->
$(".notification").click(function () {
  $(".box-notifications").toggle();
});
$(".close-btn-notify").click(function () {
  $(".box-notifications").hide();
});

$(document).ready(function () {
  $(".select2").select2();
});

$(".toggle-password").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
// /* intlTelInput */
// const allTelInputs = document.querySelectorAll("[type='tel']");
// allTelInputs.forEach((input) => {
//   intlTelInput(input, {
//     initialCountry: "sa",
//     preferredCountries: ["sa"],
//     separateDialCode: true,
//   });
// });


// delete item
$(".delete-farm-card").click(function () {
  $(this).parent().parent().parent().remove();
  return false;
});



// Get all the dropdown from document
document.querySelectorAll('.dropdown-toggle').forEach(dropDownFunc);

// Dropdown Open and Close function
function dropDownFunc(dropDown) {
    console.log(dropDown.classList.contains('click-dropdown'));

    if(dropDown.classList.contains('click-dropdown') === true){
        dropDown.addEventListener('click', function (e) {
            e.preventDefault();

            if (this.nextElementSibling.classList.contains('dropdown-active') === true) {
                // Close the clicked dropdown
                this.parentElement.classList.remove('dropdown-open');
                this.nextElementSibling.classList.remove('dropdown-active');

            } else {
                // Close the opend dropdown
                closeDropdown();

                // add the open and active class(Opening the DropDown)
                this.parentElement.classList.add('dropdown-open');
                this.nextElementSibling.classList.add('dropdown-active');
            }
        });
    }


};

// Listen to the doc click
window.addEventListener('click', function (e) {

    // Close the menu if click happen outside menu
    if (e.target.closest('.dropdown-container') === null) {
        // Close the opend dropdown
        closeDropdown();
    }
});
// Close the openend Dropdowns
function closeDropdown() {

    // remove the open and active class from other opened Dropdown (Closing the opend DropDown)
    document.querySelectorAll('.dropdown-container').forEach(function (container) {
        container.classList.remove('dropdown-open')
    });

    document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
        menu.classList.remove('dropdown-active');
    });
}

// close the dropdown on mouse out from the dropdown list
// document.querySelectorAll('.dropdown-menu').forEach(function (dropDownList) {
//     // close the dropdown after user leave the list
//     dropDownList.onmouseleave = closeDropdown;
// });
