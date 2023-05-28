// add active
$('.linkmenu').click(function() {
  $('.linkmenu').removeClass('active');
  $(this).addClass('active');
});

$('.lookbook__icon').click(function(){
  $(this).toggleClass('active');
});
// click navpc
$('.prev').on('click', function() {
  $('.lv1').css('transform', 'translateY(0%)');
});
$('.next').on('click', function() {
  $('.lv1').css('transform', 'translateY(-150%)');
});
// click close headertop
$('.closehd').on('click', function() {
  $('.header-top').css('display', 'none');
});
// // click navsearch
// $('.iconsearch').on('click', function() {
//   $('.searchbar').css('display', 'block');
//   $('.overlaysearch').css('display', 'block');
// });
// $('.overlaysearch').on('click', function() {
//   $('.searchbar').css('display', 'none');
//   $('.overlaysearch').css('display', 'none');
// });


// animation placeholder
const texts = ["Tìm theo tên sản phẩm..."];
const input = document.querySelector(".searchbar__input");
const animationWorker = function (input, texts) {
  this.input = input;
  this.defaultPlaceholder = this.input.getAttribute("placeholder");
  this.texts = texts;
  this.curTextNum = 0;
  this.curPlaceholder = "";
  this.blinkCounter = 0;
  this.animationFrameId = 0;
  this.animationActive = false;
  this.input.setAttribute("placeholder", this.curPlaceholder);

  this.switch = (timeout) => {
    this.input.classList.add("imitatefocus");
    setTimeout(() => {
      this.input.classList.remove("imitatefocus");
      if (this.curTextNum == 0)
        this.input.setAttribute("placeholder", this.defaultPlaceholder);
      else this.input.setAttribute("placeholder", this.curPlaceholder);

      setTimeout(() => {
        this.input.setAttribute("placeholder", this.curPlaceholder);
        if (this.animationActive)
          this.animationFrameId = window.requestAnimationFrame(this.animate);
      }, timeout);
    }, timeout);
  };

  this.animate = () => {
    if (!this.animationActive) return;
    let curPlaceholderFullText = this.texts[this.curTextNum];
    let timeout = 120;
    if (
      this.curPlaceholder == curPlaceholderFullText + "|" &&
      this.blinkCounter == 3
    ) {
      this.blinkCounter = 0;
      this.curTextNum =
        this.curTextNum >= this.texts.length - 1 ? 0 : this.curTextNum + 1;
      this.curPlaceholder = "|";
      this.switch(100);
      return;
    } else if (
      this.curPlaceholder == curPlaceholderFullText + "|" &&
      this.blinkCounter < 3
    ) {
      this.curPlaceholder = curPlaceholderFullText;
      this.blinkCounter++;
    } else if (
      this.curPlaceholder == curPlaceholderFullText &&
      this.blinkCounter < 3
    ) {
      this.curPlaceholder = this.curPlaceholder + "|";
    } else {
      this.curPlaceholder =
        curPlaceholderFullText
          .split("")
          .slice(0, this.curPlaceholder.length + 1)
          .join("") + "|";
      timeout = 100;
    }
    this.input.setAttribute("placeholder", this.curPlaceholder);
    setTimeout(() => {
      if (this.animationActive)
        this.animationFrameId = window.requestAnimationFrame(this.animate);
    }, timeout);
  };

  this.stop = () => {
    this.animationActive = false;
    window.cancelAnimationFrame(this.animationFrameId);
  };

  this.start = () => {
    this.animationActive = true;
    this.animationFrameId = window.requestAnimationFrame(this.animate);
    return this;
  };
};

document.addEventListener("DOMContentLoaded", () => {
  let aw = new animationWorker(input, texts).start();
  input.addEventListener("focus", (e) => aw.stop());
  input.addEventListener("blur", (e) => {
    aw = new animationWorker(input, texts);
    if (e.target.value == "") setTimeout(aw.start, 120);
  });
});

// hover show element
const hv1 = document.querySelector(".hv1");
const dropmenusale = document.querySelector(".dropmenusale");
hv1.addEventListener('mouseover', function handleMouseOver(){
  dropmenusale.style.display = "block";
});
dropmenusale.addEventListener('mouseover', function handleMouseOver(){
  dropmenusale.style.display = "block";
});
hv1.addEventListener('mouseout', function handleMouseOver(){
  dropmenusale.style.display = "none";
});
dropmenusale.addEventListener('mouseout', function handleMouseOver(){
  dropmenusale.style.display = "none";
});
// hv2
const hv2 = document.querySelector(".hv2");
const dropmenusaleoff = document.querySelector(".dropmenu");
hv2.addEventListener('mouseover', function handleMouseOver(){
  dropmenusaleoff.style.display = "block";
});
dropmenusaleoff.addEventListener('mouseover', function handleMouseOver(){
  dropmenusaleoff.style.display = "block";
});
hv2.addEventListener('mouseout', function handleMouseOver(){
  dropmenusaleoff.style.display = "none";
});
dropmenusaleoff.addEventListener('mouseout', function handleMouseOver(){
  dropmenusaleoff.style.display = "none";
});

//scroll window sticky and button back to top
window.onscroll = function() {scrollFunctions()};

var navbar = document.querySelector(".sticky-top");
// var sticky = navbar.offsetTop;

// function scrollFunctions() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// } 
let mybutton = document.querySelector(".backtotop");

function scrollFunctions() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.classList.remove('show');
    navbar.classList.add("sticky")
  } else {
    mybutton.classList.add('show');
    navbar.classList.remove("sticky");
  }
};

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};

// banner slider
$('.bannercarousel').owlCarousel({
  loop:true,
  nav:true,
  items:1,
  navText : ['<i class="bi bi-chevron-left"></i>','<i class="bi bi-chevron-right"></i>'],
  autoplay:true,
  autoplayTimeout:5000,
  autoplayHoverPause:true
});

// slide  season__coll
$('.season__collcarousel').owlCarousel({
  dots:false,
  nav:true,
  responsive:{
      0:{
          items:3,
          margin: 30
      },
      767:{
          items:4,
          margin: 10
      },
      1024:{
        margin:30,
          items:6
      },
      1800:{
        // margin:70,
          items:6
      },
      1900:{
        // margin:100,
          items:6
      }
  }
});
// slide user
$('.usercarousel').owlCarousel({
  nav:true,
  navText : ['<i class="bi bi-chevron-left"></i>','<i class="bi bi-chevron-right"></i>'],
  responsive:{
      0:{
  margin:10,
          items:1
      },
      768:{
  margin:20,
          items:2
      },
      1024:{
  margin:40,
          items:3
      }
  }
});


//change icon
// let totalBars = document.querySelectorAll(".lookbook__btn");
// let changeIcon = function() {
//     for(var activeBar = 0;
//             activeBar < totalBars.length;
//             activeBar ++) {
//                 totalBars[activeBar].classList.toggle("active")
//             }
// }
let totalBars1 = document.querySelectorAll(".lookbook__btn1");
let changeMenuIcon = function() {
    for(var activeBar = 0;
            activeBar < totalBars1.length;
            activeBar ++) {
                totalBars1[activeBar].classList.toggle("active")
            }
}
let totalBars2 = document.querySelectorAll(".lookbook__btn2");
let changeMenuIcon2 = function() {
    for(var activeBar = 0;
            activeBar < totalBars2.length;
            activeBar ++) {
                totalBars2[activeBar].classList.toggle("active")
            }
}
let totalBars3 = document.querySelectorAll(".lookbook__btn3");
let changeMenuIcon3 = function() {
    for(var activeBar = 0;
            activeBar < totalBars3.length;
            activeBar ++) {
                totalBars3[activeBar].classList.toggle("active")
            }
}


// show and hide popup
// const popup = document.getElementById('ega-sale-pop');

// function showPopup (){
//   popup.style.display = 'block';
// }

// setTimeout(showPopup, 1000)

// // hide popup
// function hidePopup (){
//   popup.style.display = 'none';
// }
// setTimeout(hidePopup, 2000)