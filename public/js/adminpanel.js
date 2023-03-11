// Toggle Sidebar
const menuBar = document.querySelector("#content .nav .bx.bx-menu");
const sidebar = document.getElementById("side-bar");

menuBar.addEventListener("click", function () {
    sidebar.classList.toggle("hide");
});
