"use strict";

window.onload = function () {
  ChangeImage();
  calendar();
}; //Calendrier


function calendar(event) {
  var currentYear = new Date().getFullYear();
  var element = document.querySelector('.calendar');
  new Calendar('.calendar', {
    language: 'fr',
    style: 'background',
    minDate: new Date(),
    maxDate: new Date(currentYear, 11, 31)
  });
  document.querySelector('.calendar').addEventListener('clickDay', function selectDate(data) {
    console.log(data.element);
    var date = data.date;
    var year = date.getFullYear();
    var month = ("0" + (date.getMonth() + 1)).slice(-2);
    var day = ("0" + date.getDate()).slice(-2);
    var setdate = "".concat(year, "-").concat(month, "-").concat(day);
    $('#dateEnd').val(setdate);
  });
  $('#choisir').click(function () {
    var start = new Date($('#dateStart').val());
    var end = new Date($('#dateEnd').val());

    while (start <= end) {
      console.log(start.toDateString());
      start.setDate(start.getDate() + 1);
    }
  });
}

function ChangeImage() {
  var vignette = document.querySelectorAll(".small"); // je selectionne l'image en grand format 

  var fullimg = document.getElementById("full");
  var btn = document.querySelector(".btn-add");
  vignette.forEach(function (item) {
    item.addEventListener("click", function () {
      // Pour récuperer la valeur de l'attribut src de l'élément cliqué
      var imgSource = item.getAttribute('src'); // Je fixe unenouvelle valeur à l'attribut retnue
      // J'attribue la nouvelle à l'image grand format

      fullimg.setAttribute('src', imgSource);
    });
  });
}