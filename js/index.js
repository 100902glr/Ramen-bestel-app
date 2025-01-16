document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector("button[type='button']");
  const mobileMenu = document.getElementById("mobile-menu");

  menuButton.addEventListener("click", function () {
    // Toggle the `hidden` class to show/hide the menu
    mobileMenu.classList.toggle("hidden");
  });
});
