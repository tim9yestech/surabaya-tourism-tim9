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

// Search
(function (document) {
    "use strict";

    var LightTableFilter = (function (Arr) {
        var _input;
        function _onInputEvent(e) {
            _input = e.target;
            var tables = document.getElementsByClassName(
                _input.getAttribute("data-table")
            );
            Arr.forEach.call(tables, function (table) {
                Arr.forEach.call(table.tBodies, function (tbody) {
                    Arr.forEach.call(tbody.rows, _filter);
                });
            });
        }
        function _filter(row) {
            var text = row.textContent.toLowerCase(),
                val = _input.value.toLowerCase();
            row.style.display = text.indexof(val) === -1 ? "none" : "table-row";
        }
        return {
            init: function () {
                var inputs =
                    document.getElementsByClassName("light-table-filter");
                Arr.forEach.call(inputs, function (input) {
                    input.oninput = _onInputEvent;
                });
            },
        };
    })(Array.prototype);

    document.addEventListener("readystatechange", function () {
        if (document.readyState === "complete") {
            LightTableFilter.init();
        }
    });
})(document);

// Chart
const chart1 = document.getElementById("destinasiChart");
const chart2 = document.getElementById("produkChart");

new Chart(chart1, {
    type: "bar",
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
                label: "Total Destinasi ",
                data: [12, 21, 3, 5, 2],
                backgroundColor: "rgba(83,83,146,0.5)",
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
