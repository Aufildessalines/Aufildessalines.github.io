const mousemove = document.querySelector("mousemove");

const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
    if (window.scrollY > 150) {
        nav.style.top = 0;
    } else {
        nav.style.top = "-150px"
    }
})