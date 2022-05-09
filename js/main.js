function init() {
    document.title = nameVilla
    Array.from(document.querySelectorAll("span.name")).forEach(lstName => {
        lstName.innerHTML = nameVilla
    });
}
pictures = Array.from(document.querySelectorAll(".img"))
pictures.forEach(picture => {
    picture.addEventListener("click", function(e) {
        src = e.path[0].src
        document.querySelector(".wrapperImg").childNodes[1].setAttribute("src", src)
        document.querySelector(".wrapperImg").classList.toggle("visible")
    })
});
document.querySelector(".cross").addEventListener("click", function(e) {
    document.querySelector(".wrapperImg").classList.toggle("visible")
})