const input = document.querySelector(".input");
const eyeOpen = document.querySelector(".eye-open");
const eyeClose = document.querySelector(".eye-close");

eyeOpen.addEventListener("click", function () {
    eyeOpen.classList.add("hidden");
    input.setAttribute("type", "password");
    eyeClose.classList.remove("hidden");
});

eyeClose.addEventListener("click", function () {
    eyeClose.classList.add("hidden");
    input.setAttribute("type", "text");
    eyeOpen.classList.remove("hidden");
});


const inputConfirm = document.querySelector(".input-confirm");
const eyeOpenConfirm = document.querySelector(".eye-open-confirm");
const eyeCloseConfirm = document.querySelector(".eye-close-confirm");

eyeOpenConfirm.addEventListener("click", function () {
    eyeOpenConfirm.classList.add("hidden-confirm");
    inputConfirm.setAttribute("type", "password");
    eyeCloseConfirm.classList.remove("hidden-confirm");
});

eyeCloseConfirm.addEventListener("click", function () {
    eyeCloseConfirm.classList.add("hidden-confirm");
    inputConfirm.setAttribute("type", "text");
    eyeOpenConfirm.classList.remove("hidden-confirm");
});