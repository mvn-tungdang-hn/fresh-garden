const sidebarLinks = Array.from(
  document.querySelectorAll("#sidebarNav .sidebar-link")
);

sidebarLinks.forEach((link) => {
  if (link.href === window.location.href) {
    link.classList.add("active");
  }
});
