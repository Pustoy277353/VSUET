function detectBrowser() {
    if ('ActiveXObject' in window) {
        return "Internet Explorer";
    } else {
        return "other";
    }
}

window.onload = function() {
    var browser = detectBrowser();

    if (browser !== "Internet Explorer") {
        document.getElementById('h1').style.display = 'none';
        alert("Страница будет отображаться правильно только в Internet Explorer");
    }
};
