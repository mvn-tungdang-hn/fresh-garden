/* Sidebar */
const sidebarLinks = Array.from(
  document.querySelectorAll("#navbarNavDropdown .nav-link")
);

sidebarLinks.forEach((link) => {
  if (link.href === window.location.href) {
    link.classList.add("active");
  }
});
