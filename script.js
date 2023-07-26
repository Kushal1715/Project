let navbar = document.querySelector(".nav");
let span = document.querySelector(".span");

window.addEventListener("scroll", ()=>{
    navbar.classList.add("scroll");
    span.style.color = "#00fff3";
})