// start: Sidebar
const sidebarToggle = document.querySelector('.sidebar-toggle');
const sidebarOverlay = document.querySelector('.sidebar-overlay');
const sidebarMenu = document.querySelector('.sidebar-menu');
const closeButton = document.querySelector('.close-button');
sidebarToggle.addEventListener('click', function (e) {
  e.preventDefault();
  sidebarMenu.classList.remove('hidden');
  sidebarOverlay.classList.remove('hidden');
  sidebarMenu.classList.remove('translate-x-full');
  document.getElementsByTagName('body')[0].classList.add('overflow-hidden');
});
closeButton.addEventListener('click', function (e) {
  e.preventDefault();
  sidebarOverlay.classList.toggle('hidden');
  sidebarMenu.classList.toggle('translate-x-full');
  document.getElementsByTagName('body')[0].classList.remove('overflow-hidden');
});
sidebarOverlay.addEventListener('click', function (e) {
  e.preventDefault();
  sidebarOverlay.classList.add('hidden');
  sidebarMenu.classList.add('translate-x-full');
  document.getElementsByTagName('body')[0].classList.remove('overflow-hidden');
});
document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
  item.addEventListener('click', function (e) {
    e.preventDefault();
    const parent = item.closest('.group');
    if (parent.classList.contains('selected')) {
      parent.classList.remove('selected');
    } else {
      document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
        i.closest('.group').classList.remove('selected');
      });
      parent.classList.add('selected');
    }
  });
});

// end: Sidebar

//swiper

// about us swiper
var swiper = new Swiper('.about-us-swiper', {
  slidesPerView: 2,
  loop: true,
  spaceBetween: 30,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  breakpoints: {
    640: {
      slidesPerView: 3
    },
    1024: {
      slidesPerView: 4
    }
  }
});

// printed smaples swiper
var swiper = new Swiper('.samples-swiper', {
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction'
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  breakpoints: {
    640: {
      slidesPerView: 3
    }
  }
});

var swiper = new Swiper('.mySwiper', {
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination'
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  breakpoints: {
    640: {
      slidesPerView: 3
    }
  }
});
