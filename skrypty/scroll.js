let infsite = [...document.querySelectorAll(".infsite")];
infsite.forEach(inf => {
    window.addEventListener("scroll", function () {
        let picture = inf.querySelector(".tloo");
        if (inf.offsetTop - (window.innerHeight + this.scrollY) < 0 && inf.offsetTop + inf.clientHeight > this.scrollY) {
            picture.style.bottom = (-(this.scrollY - (inf.offsetTop - window.innerHeight)) / 10 * 8) + "px";
        }
    })
});