import "./bootstrap";
document
    .querySelector(".navbar-toggler")
    .addEventListener("click", function () {
        const icon = document.getElementById("navbar-toggler-icon");
        icon.classList.toggle("bi-list");
        icon.classList.toggle("bi-x");
    });

// Change main image on Swiper image click
document.querySelectorAll(".swiper-img").forEach((img) => {
    img.addEventListener("click", function () {
        document.getElementById("main-image").src = this.src;
    });
});
