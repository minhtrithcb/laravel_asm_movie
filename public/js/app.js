let searchBtn = document.querySelector('.sidebar-search');
let searchBox = document.querySelector('.search-box');
let a = true;

searchBtn.addEventListener('click', function () {
    if (a == true) {
        searchBox.style.display = 'block';
        // console.log(searchBtn.firstElementChild);
        searchBtn.firstElementChild.classList.add("icon-hide");
        searchBtn.lastElementChild.classList.remove("icon-hide");
        a = false;
    } else {
        searchBox.style.display = 'none';
        searchBtn.firstElementChild.classList.remove("icon-hide");
        searchBtn.lastElementChild.classList.add("icon-hide");
        a = true
    }
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector(".wrap-fix").style.backgroundColor = "#000000d3";
    document.querySelector("body").classList.add('body');
  } else {
    document.querySelector(".wrap-fix").style.backgroundColor = "transparent";
    document.querySelector("body").classList.remove('body');
  }
}


let slide = document.querySelectorAll(".banner-slide-item");
let allcard = document.querySelectorAll(".main-mini-cart");
// let currentpage = document.querySelector("#current-page");
let startindex = 0;
// let totalpage = slide.length;

function prevSlide() {
    if (startindex == 0) {
        startindex = slide.length;
    }
    startindex--;
    playslide(startindex);
}

function nextSlide() {
    startindex++;
    if (startindex == slide.length) {
        startindex = 0;
    }
    playslide(startindex);
}

function playslide(startindex) {
    for (let i = 0; i < slide.length; i++) {
        slide[i].classList.remove("banner-slide-item-active");
        allcard[i].classList.remove("main-mini-cart-active");
    }
    slide[startindex].classList.add("banner-slide-item-active");
    allcard[startindex].classList.add("main-mini-cart-active");
}

// setInterval(nextSlide, 3000);