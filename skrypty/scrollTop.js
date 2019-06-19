let picture = document.querySelector(".tlo");
window.addEventListener("scroll", function () {
    picture.style.top = this.scrollY / 10 * 9 + "px";
})