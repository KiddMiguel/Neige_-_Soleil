const vignette = document.querySelectorAll(".small");
console.log(vignette);

// je selectionne l'image en grand format 
const fullimg = document.getElementById("full");
console.log(fullimg);

const btn = document.querySelector(".btn-add");

vignette.forEach(item => {
    console.log("message");

    item.addEventListener("click", () => {
        console.log(item, "vignette cliqué");

        // Pour récuperer la valeur de l'attribut src de l'élément cliqué
        let imgSource = item.getAttribute('src')
        console.log(imgSource);

        // Je fixe unenouvelle valeur à l'attribut retnue
        // J'attribue la nouvelle à l'image grand format
        fullimg.setAttribute('src', imgSource);
    });
});