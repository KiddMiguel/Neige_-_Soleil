window.onload = () => {
    ChangeImage();
    calendar();
    tawk();
    inscription();
};

//Calendrier

function calendar(event) {
    const currentYear = new Date().getFullYear();
    var element = document.querySelector('.calendar');
    new Calendar('.calendar', {
        language: 'fr',
        style: 'background',
        minDate: new Date(),
        maxDate: new Date(currentYear, 11, 31)
    });
    document.querySelector('.calendar').addEventListener('clickDay', function selectDate(data) {
        console.log(data.element);
        const date = data.date;
        const year = date.getFullYear();
        const month = ("0" + (date.getMonth() + 1)).slice(-2);
        const day = ("0" + date.getDate()).slice(-2);
        const setdate = `${year}-${month}-${day}`;
        $('#dateEnd').val(setdate);
        let start = new Date($('#dateStart').val());
        let end = new Date($('#dateEnd').val());
        while (start <= end) {
            console.log(data.element);
            console.log(start.toDateString());
            start.setDate(start.getDate() + 1);
        }
    });

    $('#choisir').click(function() {

    });
}


function ChangeImage() {
    const vignette = document.querySelectorAll(".small");

    // je selectionne l'image en grand format 
    const fullimg = document.getElementById("full");

    const btn = document.querySelector(".btn-add");

    vignette.forEach(item => {
        item.addEventListener("click", () => {
            // Pour récuperer la valeur de l'attribut src de l'élément cliqué
            let imgSource = item.getAttribute('src')
                // Je fixe unenouvelle valeur à l'attribut retnue
                // J'attribue la nouvelle à l'image grand format
            fullimg.setAttribute('src', imgSource);
        });
    });
}

function inscription(){
    const page_1 = document.getElementById('page_1');
    const page_2 = document.getElementById('page_2');
    const page_3 = document.getElementById('page_3');
    const back_and_go = document.getElementById('back_and_go');
    const btn_back = document.getElementById('back');
    const btn_cont_1 = document.getElementById('continue_1');
    const btn_cont_2 = document.getElementById('continue_2');

    btn_cont_1.addEventListener('click', () => {
        page_1.classList.add("desactive_page");
        page_2.classList.remove("desactive_page");
        back_and_go.classList.add('active_page');
        back_and_go.classList.remove('desactive_page');
    });

    btn_back.addEventListener('click', () => {
        page_1.classList.remove('desactive_page');
        page_2.classList.add("desactive_page");
        page_3.classList.add("desactive_page");
        back_and_go.classList.add('desactive_page');
    });

    btn_cont_2.addEventListener('click', () => {
        page_2.classList.add("desactive_page");
        page_3.classList.remove("desactive_page");
    });
}

inscription();


function tawk() {
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/63db87fb47425128791110a4/1go8omcfm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
}
tawk();

function verifPassword() {
    $("#buttonEnvoi").click(function(event) {
        let password = $("#password").val();
        let confirmPassword = $("#confirmPassword").val();
        console.log('click');
        console.log(password);
        console.log(confirmPassword);

        if (password === confirmPassword) {
            $("#form").submit();
        } else {
            event.preventDefault();
            console.log('not good')
        }
    })
}
verifPassword();