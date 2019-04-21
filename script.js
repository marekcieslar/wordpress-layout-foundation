console.log('test');
/**
 * ********************* slider - support
 */

var sliderTouched = false;

var slider = new Swiper(".swiper-container", {
  direction: "horizontal",
  loop: true,

  slidesPerView: 2,
  autoplay: {
    delay: 5000
  },
  spaceBetween: 20,
  touchMoveStopPropagation: true,
  touchStartForcePreventDefault: true
});

slider.on("touchStart", function() {
  sliderTouched = true;
});

/**
 * ********************* show elements first time on screen
 */

var elements = document.querySelectorAll(".hidden");
var l = elements.length;
function showElements() {
  if (l > 0) {
    l = elements.length;
    for (var i = 0; i < l; i++) {
      if (elements[i].getBoundingClientRect().top - window.innerHeight < -75) {
        elements[i].classList.remove("hidden");
        elements = [].slice.call(elements, 1);
        showElements();
        break;
      }
    }
  }
}
showElements();
window.addEventListener("scroll", showElements);

/**
 * ********************* COUNTER
 */

var counters = document.querySelectorAll(".counter__single");
var lenght = counters.length;
var numbers = [];
for (var i = 0; i < lenght; i++) {
  numbers[i] = +counters[i].children[1].innerHTML;
}

/**
 * ********************* MOVIE
 */
var tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    height: "360",
    width: "640",
    // videoId: "V6dZanTfI2I",
    events: {
      onReady: onPlayerReady,
      onStateChange: onPlayerStateChange
    },
    playerVars: {
      loop: 1,
      // playlist: "V6dZanTfI2I",
      playlist: "MdpfNfWw0jo",
      controls: 0,
      autoplay: 1,
      rel: 0,
      showinfo: 0,
      fs: 0
    }
  });
}

var videoCover = document.getElementById("video-cover");
videoCover.addEventListener("click", removeCoverAndPlay);

function removeCoverAndPlay() {
  setTimeout(function() {
    videoCover.classList.add("hide");
  }, 100);
  player.setVolume(0);
  player.playVideo();
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  // event.target.playVideo();
}

function onPlayerStateChange(event) {}

function stopVideo() {
  player.stopVideo();
}

/**
 * ******************* MENU
 */
var hamburger = document.getElementById("nav-hamburger");
var nav = document.getElementById("nav");
var navList = document.querySelector(".nav__list");
var distance = document.getElementById("distance");
var closeBackground = document.getElementById("close-background");
var body = document.querySelector("body");

var openSubmenus = document.querySelectorAll(".nav__list__triangle");
var items = document.querySelectorAll(".nav__list li");

var menuOpen = false;
var toggleMenu = function(ev) {
  if (ev) ev.stopPropagation();
  nav.classList.toggle("open");
  closeBackground.classList.toggle("open");
  menuOpen = !menuOpen;
};

var toggleSubmenuText = function(ev) {
  ev.stopPropagation();
  this.children[1].classList.toggle("nav__list__triangle--open");
  this.children[2].classList.toggle("open");
};

var l = items.length;
for (var i = 0; i < l; i++) {
  if (!items[i].children[1]) {
    items[i].addEventListener("click", toggleMenu);
  } else items[i].addEventListener("click", toggleSubmenuText);
}

// Toggle submenu
var toggleSubmenu = function(ev) {
  ev.stopPropagation();
  this.classList.toggle("nav__list__triangle--open");
  this.nextElementSibling.classList.toggle("open");
};

// touch to open menu
var touching = false;
var startX = 0;
var startY = 0;
var bodyTouchStart = function(ev) {
  startX = ev.changedTouches[0].clientX;
  startY = ev.changedTouches[0].clientY;
  touching = true;
};
var bodyTouchEnd = function(ev) {
  var distanceX = menuOpen
    ? ev.changedTouches[0].clientX - startX
    : startX - ev.changedTouches[0].clientX;
  var distanceY = Math.abs(ev.changedTouches[0].clientY - startY);
  if (touching && distanceX < -70 && !sliderTouched && distanceY < 70)
    toggleMenu();
  touching = false;
  sliderTouched = false;
};
body.addEventListener("touchstart", bodyTouchStart);
body.addEventListener("touchend", bodyTouchEnd);

var scroll = function() {
  if (window.scrollY > 0) {
    nav.classList.add("sticky");
    distance.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
    distance.classList.remove("sticky");
  }
};

l = openSubmenus.length;
for (var i = 0; i < l; i++) {
  openSubmenus[i].addEventListener("click", toggleSubmenu);
}

window.addEventListener("scroll", scroll);
hamburger.addEventListener("click", toggleMenu);
closeBackground.addEventListener("click", toggleMenu);
