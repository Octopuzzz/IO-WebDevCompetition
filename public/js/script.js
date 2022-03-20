// responsive nav
const circle = document.querySelector(".circle");
const navResponsive = document.querySelector(".nav-responsive");
let tanda = 0;
circle.addEventListener("click", function () {
    if (tanda == 0) {
        circle.style.borderRadius = "0";
        circle.style.position = "fixed";
        navResponsive.style.display = "flex";
        navResponsive.style.animation = "slideRight 1200ms ease-out";
        tanda++;
    } else {
        circle.style.borderRadius = "20px";
        circle.style.position = "static";
        navResponsive.style.animation = "slideOut 1200ms ease-in";
        setTimeout(() => {
            navResponsive.style.display = "none";
        }, 1000);
        tanda = 0;
    }
});
