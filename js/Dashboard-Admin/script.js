document.addEventListener("DOMContentLoaded", function () {
  // Mobile sidebar toggle
  const toggleSidebar = document.querySelector(".toggle-sidebar");
  const sidebar = document.querySelector(".sidebar");

  if (toggleSidebar) {
    toggleSidebar.addEventListener("click", function () {
      sidebar.classList.toggle("active");
    });
  }

  // Menu toggle for responsive view
  const menuToggle = document.querySelector(".menu-toggle");
  const headerNav = document.querySelector(".header-nav");

  if (menuToggle && headerNav) {
    menuToggle.addEventListener("click", function () {
      headerNav.classList.toggle("show");
    });
  }

  // Activity items expand/collapse
  const activityItems = document.querySelectorAll(".finance-item");

  activityItems.forEach((item) => {
    const header = item.querySelector(".item-header");
    if (header) {
      header.addEventListener("click", function () {
        item.classList.toggle("open");
      });
    }
  });
});
