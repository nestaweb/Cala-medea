function init() {
    document.title = nameVilla
    Array.from(document.querySelectorAll("span.name")).forEach(lstName => {
        lstName.innerHTML = nameVilla
        console.log(nameVilla);
    });
}