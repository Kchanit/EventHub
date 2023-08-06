import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const menuToggle = document.getElementById("menu-toggle");
const sidebar = document.getElementById("application-sidebar");
const content = document.getElementById("content");

menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("hidden");
    content.classList.toggle("hidden");
    if (content.classList.contains("close")) {
        content.classList.remove("lg:pl-69");
        content.classList.add("lg:pl-72");
    } else {
        content.classList.remove("lg:pl-72");
        content.classList.add("lg:pl-69");
    }
});
