// test
// console.log("test");
// var a = 5,
//     b = 5;

//header
// window.onscroll = function () {
//     stickyHeader();
// };

// Get the header
// var header = document.getElementById("sticky-header");

// Get the offset position of the navbar
// var sticky = header.offsetHeight;
// document.body.style.paddingTop = sticky + "px";

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function stickyHeader() {
//     if (window.scrollY > sticky) {
//         header.classList.add("fixed");
//         header.classList.add("top-0");
//     } else {
//         header.classList.remove("fixed");
//         header.classList.remove("top-0");
//     }
// }

// start: Sidebar
const sidebarToggle = document.querySelector(".sidebar-toggle");
const sidebarOverlay = document.querySelector(".sidebar-overlay");
const sidebarMenu = document.querySelector(".sidebar-menu");
const closeButton = document.querySelector(".close-button");
sidebarToggle.addEventListener("click", function (e) {
    e.preventDefault();
    sidebarMenu.classList.remove("hidden");
    sidebarOverlay.classList.remove("hidden");
    sidebarMenu.classList.remove("translate-x-full");
    document.getElementsByTagName("body")[0].classList.add("overflow-hidden");
});
closeButton.addEventListener("click", function (e) {
    e.preventDefault();
    sidebarOverlay.classList.toggle("hidden");
    sidebarMenu.classList.toggle("translate-x-full");
    document
        .getElementsByTagName("body")[0]
        .classList.remove("overflow-hidden");
});
sidebarOverlay.addEventListener("click", function (e) {
    e.preventDefault();
    sidebarOverlay.classList.add("hidden");
    sidebarMenu.classList.add("translate-x-full");
    document
        .getElementsByTagName("body")[0]
        .classList.remove("overflow-hidden");
});
document.querySelectorAll(".sidebar-dropdown-toggle").forEach(function (item) {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        const parent = item.closest(".group");
        if (parent.classList.contains("selected")) {
            parent.classList.remove("selected");
        } else {
            document
                .querySelectorAll(".sidebar-dropdown-toggle")
                .forEach(function (i) {
                    i.closest(".group").classList.remove("selected");
                });
            parent.classList.add("selected");
        }
    });
});

// end: Sidebar

// document.addEventListener("DOMContentLoaded", function () {

//   const burger = document.querySelectorAll(".navbar-burger");
//   const menu = document.querySelectorAll(".navbar-menu");
//   if (burger.length && menu.length) {
//     for (var i = 0; i < burger.length; i++) {
//       burger[i].addEventListener("click", function () {
//         for (var j = 0; j < menu.length; j++) {
//           menu[j].classList.toggle("hidden");
//         }
//       });
//     }
//   }

//   const close = document.querySelectorAll(".navbar-close");
//   const backdrop = document.querySelectorAll(".navbar-backdrop");

//   if (close.length) {
//     for (var i = 0; i < close.length; i++) {
//       close[i].addEventListener("click", function () {
//         for (var j = 0; j < menu.length; j++) {
//           menu[j].classList.toggle("hidden");
//         }
//       });
//     }
//   }

//   if (backdrop.length) {
//     for (var i = 0; i < backdrop.length; i++) {
//       backdrop[i].addEventListener("click", function () {
//         for (var j = 0; j < menu.length; j++) {
//           menu[j].classList.toggle("hidden");
//         }
//       });
//     }
//   }
// });

var swiper = new Swiper(".about-us-swiper", {
    slidesPerView: 2,
    loop: true,
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});

var swiper = new Swiper(".samples-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".blog-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
    },
});
