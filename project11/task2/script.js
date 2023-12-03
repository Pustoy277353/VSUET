var image = document.getElementById("img");
var text = document.getElementById("txt");

var images = [
    "1.jpg",
    "2.jpg",
];

var textes = [
    "Надпись 1",
    "Надпись 2",
]

var colors = [
    "purple",
    "green",
];

var currentIndex = 0;
var currentColorIndex = 0;

function changeImage() {
    currentIndex++;

    if (currentIndex === images.length) {
        currentIndex = 0;
    }

    if (currentIndex === textes.length) {
        currentIndex = 0;
    }

    image.src = images[currentIndex];
    text.innerText = textes[currentIndex];
}

function changeColor() {
    currentColorIndex++;

    if (currentColorIndex === colors.length) {
        currentColorIndex = 0;
    }

    text.style.color = colors[currentColorIndex];
}


image.addEventListener("click", changeImage);
text.addEventListener("click",  changeColor)

