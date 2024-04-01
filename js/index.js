const abaTags = document.getElementById("tags-title");
const abaCategories = document.getElementById("categories-title");
const listaTags = document.getElementById("tag-list");
const listaCategories = document.getElementById("categories-list");

abaTags.addEventListener("mousedown", () => {
    if (listaTags.style.display === "none") {
        listaTags.style.display = "block";
    } else {
        listaTags.style.display = "none";
    }
});

abaCategories.addEventListener("mousedown", () => {
    if (listaCategories.style.display === "none") {
        listaCategories.style.display = "block";
    } else {
        listaCategories.style.display = "none";
    }
});
