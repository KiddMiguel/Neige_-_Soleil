"use strict";

window.onload = function () {
  ChangeImage();
  calendar();
}; //Calendrier


function calendar(event) {
  var element = document.querySelector('.calendar');
  console.log(element);
  new Calendar('.calendar', {
    language: 'fr',
    style: 'background',
    minDate: new Date(),
    maxDate: new Date(2023, 11, 31)
  });
  var uneDate = document.querySelector('.calendar').addEventListener('clickDay', function (data) {
    console.log(data);
    var _ref = [data.date.getFullYear(), data.date.getMonth(), data.date.getDate()],
        year = _ref[0],
        month = _ref[1],
        day = _ref[2];
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
  var vignette = document.querySelectorAll(".small");
  console.log(vignette); // je selectionne l'image en grand format 

  var fullimg = document.getElementById("full");
  var btn = document.querySelector(".btn-add");
  vignette.forEach(function (item) {
    item.addEventListener("click", function () {
      console.log(item, "vignette cliqué"); // Pour récuperer la valeur de l'attribut src de l'élément cliqué

      var imgSource = item.getAttribute('src');
      console.log(imgSource); // Je fixe unenouvelle valeur à l'attribut retnue
      // J'attribue la nouvelle à l'image grand format

      fullimg.setAttribute('src', imgSource);
    });
  });
}