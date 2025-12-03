const currentLangSpan = document.getElementById("current-lang");

function changeLang(lang) {
    localStorage.setItem("lang", lang);
    window.location.href = "../" + lang + "/index.html";
}

// Setear idioma actual al cargar
(function () {
    const currentLang = localStorage.getItem("lang") || "pt";
    currentLangSpan.textContent = currentLang.toUpperCase();
})();
