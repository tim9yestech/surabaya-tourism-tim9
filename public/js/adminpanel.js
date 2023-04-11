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

// Chart
const chart1 = document.getElementById("destinasiChart");
const chart2 = document.getElementById("produkChart");

new Chart(chart1, {
    type: "bar",
    data: {
        labels: [
            
        ],
        datasets: [
            {
                label: "Total Destinasi ",
                data: [1, 2, 0, 0, 0],
                backgroundColor: "rgba(83,83,146,0.5)",
                borderColor: "rgb(83,83,146)",
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});

new Chart(chart2, {
    type: "doughnut",
    data: {
        labels: [
            "Surabaya Pusat",
            "Surabaya Utara",
            "Surabaya Barat",
            "Surabaya Selatan",
            "Surabaya Timur",
        ],
        datasets: [
            {
                label: "Total UMKM ",
                data: [12, 21, 3, 5, 2],
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(75, 192, 192)",
                    "rgb(255, 205, 86)",
                    "rgb(201, 203, 207)",
                    "rgb(54, 162, 235)",
                ],
                borderWidth: 0,
            },
        ],
    },
});
