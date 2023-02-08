const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
    if (window.scrollY > 500) {
        nav.style.top = 0;
    } else {
        nav.style.top = "-500px"
    }
});
