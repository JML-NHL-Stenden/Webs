// Second navigation "load more review button"

document.addEventListener("DOMContentLoaded", function () {
    const displayMoreBtn = document.getElementById("display-more-btn");
    const hiddenComments = document.getElementById("hidden-comments");
    let isHidden = true;

    displayMoreBtn.addEventListener("click", function () {
        if (isHidden) {
            hiddenComments.style.display = "block";
            displayMoreBtn.textContent = "Show Less Review";
        } else {
            hiddenComments.style.display = "none";
            displayMoreBtn.textContent = "Load More Review";
        }
        isHidden = !isHidden;
    });
});