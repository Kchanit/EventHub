import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const menuToggle = document.getElementById("menu-toggle");
const sidebar = document.getElementById("application-sidebar");

// // Function to toggle the menu
// function toggleMenu() {
//     sidebar.classList.toggle("-translate-x-full"); // Add or remove the class to show/hide the sidebar
// }

// Event listener to toggle the menu when the button is clicked
menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("hidden");
});
