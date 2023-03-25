"use strict";

window.onload = function () {
  ChangeImage();
  calendar();
  tawk();
  inscription();
}; //Calendrier
// function calendar(event) {
//     const currentYear = new Date().getFullYear();
//     var element = document.querySelector('.calendar');
//     new Calendar('.calendar', {
//         language: 'fr',
//         style: 'background',
//         minDate: new Date(),
//         maxDate: new Date(currentYear, 11, 31)
//     });
//     document.querySelector('.calendar').addEventListener('clickDay', function selectDate(data) {
//         console.log(data.element);
//         const date = data.date;
//         const year = date.getFullYear();
//         const month = ("0" + (date.getMonth() + 1)).slice(-2);
//         const day = ("0" + date.getDate()).slice(-2);
//         const setdate = `${year}-${month}-${day}`;
//         $('#dateEnd').val(setdate);
//         let start = new Date($('#dateStart').val());
//         let end = new Date($('#dateEnd').val());
//         while (start <= end) {
//             console.log(data.element);
//             console.log(start.toDateString());
//             start.setDate(start.getDate() + 1);
//         }
//     });
//     $('#choisir').click(function() {
//     });
// }


function calendar() {
  document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var startDate, endDate;
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: "dayGridMonth",
      selectable: true,
      select: function select(info) {
        if (!startDate) {
          startDate = info.start; // Stocke la date de début
        } else if (!endDate) {
          if (info.start > startDate) {
            endDate = info.start; // Stocke la date de fin

            endDate = moment(endDate).add(1, 'day').format('YYYY-MM-DD');
            var newEvent = {
              title: "Nouvelle réservation",
              start: moment(startDate).format('YYYY-MM-DD'),
              end: endDate
            };
            calendar.addEvent(newEvent);
          } else {
            alert("La date de fin doit être postérieure à la date de début.");
          }
        } else {
          startDate = info.start; // Remplace la date de début avec la nouvelle sélection

          endDate = null; // Réinitialise la date de fin
        } // Affiche les dates sélectionnées


        if (startDate) {
          console.log('Date de début : ' + moment(startDate).format('YYYY-MM-DD')); // alert('Date de début : ' + startDate.toLocaleDateString());
        }

        if (endDate) {
          console.log('Date de début : ' + moment(endDate).format('YYYY-MM-DD')); // console.log(endDate);
          //  alert('Date de fin : ' + endDate.toLocaleDateString());
        }
      },
      events: [{
        title: "Test",
        start: "2023-03-20",
        end: "2023-03-12"
      }, {
        title: "Event 2",
        start: "2023-03-09",
        end: "2023-03-12"
      }]
    });
    calendar.setOption("locale", "fr");
    calendar.render();
  });
}

calendar();

function ChangeImage() {
  var vignette = document.querySelectorAll(".small"); // je selectionne l'image en grand format

  var fullimg = document.getElementById("full");
  var btn = document.querySelector(".btn-add");
  vignette.forEach(function (item) {
    item.addEventListener("click", function () {
      // Pour récuperer la valeur de l'attribut src de l'élément cliqué
      var imgSource = item.getAttribute("src"); // Je fixe unenouvelle valeur à l'attribut retnue
      // J'attribue la nouvelle à l'image grand format

      fullimg.setAttribute("src", imgSource);
    });
  });
}

function inscription() {
  var page_1 = document.getElementById("page_1");
  var page_2 = document.getElementById("page_2");
  var page_3 = document.getElementById("page_3");
  var back_and_go = document.getElementById("back_and_go");
  var btn_back = document.getElementById("back");
  var btn_cont_1 = document.getElementById("continue_1");
  var btn_cont_2 = document.getElementById("continue_2");
  btn_cont_1.addEventListener("click", function () {
    page_1.classList.add("desactive_page");
    page_2.classList.remove("desactive_page");
    back_and_go.classList.add("active_page");
    back_and_go.classList.remove("desactive_page");
  });
  btn_back.addEventListener("click", function () {
    page_1.classList.remove("desactive_page");
    page_2.classList.add("desactive_page");
    page_3.classList.add("desactive_page");
    back_and_go.classList.add("desactive_page");
  });
  btn_cont_2.addEventListener("click", function () {
    page_2.classList.add("desactive_page");
    page_3.classList.remove("desactive_page");
  });
}

inscription();

function tawk() {
  var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();

  (function () {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = "https://embed.tawk.to/63db87fb47425128791110a4/1go8omcfm";
    s1.charset = "UTF-8";
    s1.setAttribute("crossorigin", "*");
    s0.parentNode.insertBefore(s1, s0);
  })();
}

tawk();

function verifPassword() {
  $("#buttonEnvoi").click(function (event) {
    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();
    console.log("click");
    console.log(password);
    console.log(confirmPassword);

    if (password === confirmPassword) {
      $("#form").submit();
    } else {
      event.preventDefault();
      console.log("not good");
    }
  });
}

verifPassword();