document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");
    const menuLinks = document.querySelectorAll(".menu a");

    menuLinks.forEach((link, index) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            sections.forEach((section) => {
                section.style.display = "none";
            });
            sections[index].style.display = "block";
        });
    });
});
