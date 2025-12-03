const langBtn = document.getElementById("lang-btn");
const langMenu = document.getElementById("lang-menu");
const currentLangSpan = document.getElementById("current-lang");

function changeLang(lang) {
    localStorage.setItem("lang", lang);
    window.location.href = "../" + lang + "/index.html";
}

// Mostrar / ocultar menú
langBtn.addEventListener("click", () => {
    langMenu.classList.toggle("hidden");
});

// Cerrar si hace click afuera
document.addEventListener("click", (e) => {
    if (!document.getElementById("lang-dropdown").contains(e.target)) {
        langMenu.classList.add("hidden");
    }
});

// Setear idioma actual al cargar
(function () {
    const currentLang = localStorage.getItem("lang") || "pt";
    currentLangSpan.textContent = currentLang.toUpperCase();
})();
