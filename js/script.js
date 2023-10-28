const navDom = document.querySelector(".navbar");

document.querySelector(".navbar-toggler") 
.addEventListener("click", () => {
        navDom.classList.add("shrink");
    })

window.addEventListener("scroll", () => {
    if (window.scrollY >= 67) {
        navDom.classList.add("shrink");
    } else if (window.screenY < 67) {
        navDom.classList.remove("shrink");
    }
})

