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
