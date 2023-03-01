const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
    if (window.scrollY > 250) {
        nav.style.top = 0;
    } else {
        nav.style.top = "-250px"
    }
});

