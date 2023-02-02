window.onload = () => {
    ChangeImage();
    calendar();
};

//Calendrier

function calendar(event) {
    var element = document.querySelector('.calendar')
    console.log(element);
    new Calendar('.calendar', {
        language: 'fr',
        style: 'background',
        minDate: new Date(),
        maxDate: new Date(2023, 11, 31),

    });
    var uneDate = document.querySelector('.calendar').addEventListener('clickDay', function(data) {
        console.log(data);

        const [year, month, day] = [
            data.date.getFullYear(),
            data.date.getMonth(),
            data.date.getDate(),
        ];

        var newMonth = parseInt([month]) + 1;
        var monthPlus = newMonth.toString();
        var setdate = [year] + '-' + monthPlus + '-' + [day];

        while (newMonth >= 0 && newMonth < 10) {
            monthPlus = "0" + newMonth.toString();
            setdate = [year] + '-' + monthPlus + '-' + [day];
            console.log(setdate);
            break;

        }

        while ([day] >= 0 && [day] < 10) {
            var dayplus = "0" + data.date.getDate();

            setdate = [year] + '-' + monthPlus + '-' + dayplus;
            console.log(setdate);
            break;

        }

        console.log(setdate);


        $('#dateFin').val(setdate);

    });


}


function ChangeImage() {
    const vignette = document.querySelectorAll(".small");
    console.log(vignette);

    // je selectionne l'image en grand format 
    const fullimg = document.getElementById("full");

    const btn = document.querySelector(".btn-add");

    vignette.forEach(item => {
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
}