function init() {
    document.title = nameVilla
    Array.from(document.querySelectorAll("span.name")).forEach(lstName => {
        lstName.innerHTML = nameVilla
    });
}
pictures = Array.from(document.querySelectorAll(".img"))
pictures.forEach(picture => {
    picture.addEventListener("click", function(e) {
        window.location.href = "./photos.php"
    })
});