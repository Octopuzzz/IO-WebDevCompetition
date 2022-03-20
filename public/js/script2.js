// show password

const inputPswd = document.querySelector("#password");
const eye = document.querySelector(".password span");
let tanda = 0;
eye.addEventListener("click", function () {
    if (tanda == 0) {
        inputPswd.setAttribute("type", "text");
        tanda++;
    } else {
        inputPswd.setAttribute("type", "password");
        tanda = 0;
    }
});
