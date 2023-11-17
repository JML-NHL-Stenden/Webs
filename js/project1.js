

const scrollElements = document.querySelectorAll(".js-scroll");
const elementInView = (el, dividend = 1) => {
const elementTop = el.getBoundingClientRect().top;
return (
elementTop <=
(window.innerHeight || document.documentElement.clientHeight) / dividend
);
};
const elementOutofView = (el) => {
const elementTop = el.getBoundingClientRect().top;
return (
elementTop > (window.innerHeight || document.documentElement.clientHeight)
);
};
const displayScrollElement = (element) => {
element.classList.add("scrolled");
};
const hideScrollElement = (element) => {
element.classList.remove("scrolled");
}; 
const handleScrollAnimation = () => {
scrollElements.forEach((el) => {
if (elementInView(el, 1.25)) {
  displayScrollElement(el);
} else if (elementOutofView(el)) {
  hideScrollElement(el)
}
})
}
window.addEventListener("scroll", () => { 
handleScrollAnimation();
});   



  let slideProject1 = 1;
  showSlides(slideProject1);  
  function plusSlides(n) {
    showSlides(slideProject1 += n);
  }
  function currentSlide(n) {
    showSlides(slideProject1 = n);
  } 
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideProject1 = 1}    
    if (n < 1) {slideProject1 = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideProject1-1].style.display = "block";  
    dots[slideProject1-1].className += " active";
  }
