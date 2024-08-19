document.addEventListener("DOMContentLoaded", function() {
    const sidebarLinks = document.querySelectorAll(".sb-sidenav-menu a.nav-link");

    // Loop through each sidebar menu item
    sidebarLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            // Prevent default navigation behavior
            event.preventDefault();

            // Remove 'active' class from all sidebar links
            sidebarLinks.forEach(function(item) {
                item.classList.remove("active");
            });

            // Add 'active' class to the clicked sidebar link
            link.classList.add("active");

            // Hide all content sections
            const contentSections = document.querySelectorAll("#layoutSidenav_content > main > div.container-fluid > div.row > div");
            contentSections.forEach(function(section) {
                section.style.display = "none";
            });

            // Determine which content section to display based on the clicked link
            const targetSectionId = link.getAttribute("href").replace("#", "");
            const targetSection = document.getElementById(targetSectionId);
            if (targetSection) {
                targetSection.style.display = "block";
            }
        });
    });
});
