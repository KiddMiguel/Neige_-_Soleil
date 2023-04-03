window.onload = () => {
  ChangeImage();
  calendar();
  tawk();
  inscription();
};

function calendar() {
  document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var startDate, endDate;
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: "dayGridMonth",
      selectable: true,
      height: 650,
      select: function (info) {
        if (!startDate) {
          startDate = info.start; // Stocke la date de début
        } else if (!endDate) {
          if (info.start > startDate) {
            endDate = info.start; // Stocke la date de fin
            endDate = moment(endDate).add(1, "day").format("YYYY-MM-DD");
            var newEvent = {
              title: "Nouvelle réservation",
              start: moment(startDate).format("YYYY-MM-DD"),
              end: endDate,
              backgroundColor: "green",
              borderColor: "green",
            };
            calendar.addEvent(newEvent);
          } else {
            alert("La date de fin doit être postérieure à la date de début.");
          }
        } else {
          startDate = info.start; // Remplace la date de début avec la nouvelle sélection
          endDate = null; // Réinitialise la date de fin
        }
        if (startDate) {
          let dateStart = moment(startDate).format("YYYY-MM-DD");
          document.getElementById("dateStart").value = dateStart;
          document.getElementById("dateStart_form").value = dateStart;
        }
        if (endDate) {
          let dateEnd = moment(endDate).format("YYYY-MM-DD");
          document.getElementById("dateEnd").value = dateEnd;
          document.getElementById("dateEnd_form").value = dateEnd;
        }
      },
      events: function (fetchInfo, successCallback, failureCallback) {
        $.ajax({
          type: "GET",
          url: "http://localhost/PPE/Neige_-_Soleil/src/recup_reservations.php",
          dataType: "json",
          success: function (reservations) {
            var events = [];
            reservations.forEach(function (reservations) {
              events.push({
                title: "Réservé",
                start: reservations.start,
                end: reservations.end,
                backgroundColor: "red",
                borderColor: "red",
              });
            });
            successCallback(events);
          },
          error: function () {
            failureCallback("Erreur lors de la récupération des réservations.");
          },
        });
      },
      validRange: function (nowDate) {
        return {
          start: nowDate, // La date d'aujourd'hui
          end: "9999-01-01", // Une date éloignée dans le futur
        };
      },
      selectOverlap: function (event) {
        // Récupérer tous les événements existants
        var events = calendar.getEvents();
        console.log("Event "+events);
        console.log(event.start);
        // Vérifier si les dates de début et de fin de l'événement que l'utilisateur essaie de créer chevauchent un événement existant
        for (var i = 0; i < events.length; i++) {
          if (event.start >= events[i].start && event.start < events[i].end) {
            return true;
          }
          if (event.end > events[i].start && event.end <= events[i].end) {
            return true;
          }
        }
        return true;
      },
    });
    calendar.on("eventClick", function (info) {
      if (
        info.event.title === "Nouvelle réservation" &&
        confirm("Voulez-vous supprimer cet événement ?")
      ) {
        info.event.remove(); // Supprime l'événement
      }
    });
    calendar.setOption("locale", "fr");
    calendar.render();
  });
}

calendar();

function ChangeImage() {
  const vignette = document.querySelectorAll(".small");
  const fullimg = document.getElementById("full");

  vignette.forEach((item) => {
    item.addEventListener("click", () => {
      // Pour récuperer la valeur de l'attribut src de l'élément cliqué
      let imgSource = item.getAttribute("src");
      fullimg.setAttribute("src", imgSource);
    });
  });
}

function inscription() {
  const page_1 = document.getElementById("page_1");
  const page_2 = document.getElementById("page_2");
  const page_3 = document.getElementById("page_3");
  const back_and_go = document.getElementById("back_and_go");
  const btn_back = document.getElementById("back");
  const btn_cont_1 = document.getElementById("continue_1");
  const btn_cont_2 = document.getElementById("continue_2");

  btn_cont_1.addEventListener("click", () => {
    page_1.classList.add("desactive_page");
    page_2.classList.remove("desactive_page");
    back_and_go.classList.add("active_page");
    back_and_go.classList.remove("desactive_page");
  });

  btn_back.addEventListener("click", () => {
    page_1.classList.remove("desactive_page");
    page_2.classList.add("desactive_page");
    page_3.classList.add("desactive_page");
    back_and_go.classList.add("desactive_page");
  });

  btn_cont_2.addEventListener("click", () => {
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
    let password = $("#password").val();
    let confirmPassword = $("#confirmPassword").val();
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
