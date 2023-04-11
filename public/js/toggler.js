const hamburger = document.querySelector(".hamburger")
const navLinks = document.querySelector(".menuzord-menu")
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show')
})