// Toggle Sidebar
const menuBar = document.querySelector("#content .nav .bx.bx-menu");
const sidebar = document.getElementById("side-bar");
let leftModal = document.getElementById("modal-dialog");
let isHide = localStorage.getItem("isHide");

if (isHide === "true") {
    sidebar.classList.toggle("hide");
    leftModal.style.left = "60px";
    leftModal.style.marginLeft = "(100% - 460px) / 2";
    leftModal.style.marginRight = "(100% - 460px) / 2";
}

menuBar.addEventListener("click", function () {
    sidebar.classList.toggle("hide");
    leftModal.style.left = "60px";
    leftModal.style.marginLeft = "(100% - 460px) / 2";
    leftModal.style.marginRight = "(100% - 460px) / 2";
    if (sidebar.classList.contains("hide")) {
        localStorage.setItem("isHide", "true");
    } else {
        localStorage.setItem("isHide", "false");
        leftModal.style.left = "150px";
        leftModal.style.marginLeft = "(100% - 680px) / 2";
        leftModal.style.marginRight = "(100% - 680px) / 2";
    }
});

// DataTables
$(document).ready(function () {
    $("#example").DataTable({
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50],
    });
});


