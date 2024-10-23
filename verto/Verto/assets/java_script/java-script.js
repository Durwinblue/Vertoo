////////////////////menu
var close_menu = document.querySelector(".close-menu");
var bars_menu = document.querySelector(".bars-menu");
var nav_head = document.querySelector(".nav-head");
var body = document.querySelector("body");
bars_menu.addEventListener("click", Menu);
close_menu.addEventListener("click", Menu);
function Menu() {
  if (nav_head.style.left == "-100%" || nav_head.style.left == "") {
    nav_head.style.left = "0";
    close_menu.style.right = "0";
    body.style.overflow = "hidden";
  } else {
    nav_head.style.left = "-100%";
    close_menu.style.right = "-100%";
    body.style.overflow = "unset";
  }
}
//////////////chat
var show_chat = document.querySelector(".show-chat");
var chat = document.querySelector(".chat");
var close_chat = document.querySelector(".close-chat");
show_chat.addEventListener("click", chat_bar);
close_chat.addEventListener("click", chat_bar);

function chat_bar() {
  if (chat.style.display == "none" || chat.style.display == "") {
    chat.style.display = "block";
    show_chat.style.display = "none";
  } else {
    chat.style.display = "none";
    show_chat.style.display = "block";
  }
}

/////////////////image hover
let el = document.getElementById("tilt");

const height = el.clientHeight;
const width = el.clientWidth;

el.addEventListener("mousemove", handleMove);

function handleMove(e) {
  const xVal = e.layerX;

  const yVal = e.layerY;

  const yRotation = 20 * ((xVal - width / 2) / width);

  const xRotation = -20 * ((yVal - height / 2) / height);

  const string =
    "perspective(500px) scale(1.1) rotateX(" +
    xRotation +
    "deg) rotateY(" +
    yRotation +
    "deg)";

  el.style.transform = string;
}

el.addEventListener("mouseout", function () {
  el.style.transform = "perspective(500px) scale(1) rotateX(0) rotateY(0)";
});

el.addEventListener("mousedown", function () {
  el.style.transform = "perspective(500px) scale(0.9) rotateX(0) rotateY(0)";
});

el.addEventListener("mouseup", function () {
  el.style.transform = "perspective(500px) scale(1.1) rotateX(0) rotateY(0)";
});

//////////////////slider

$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  center: false,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },

    1000: {
      items: 3,
    },
    1200: {
      items: 4,
    },
  },
});
