window.onload = () => {
    ChangeImage();
    calendar();
    tawk();
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
    });

    $('#choisir').click(function() {
        let start = new Date($('#dateStart').val());
        let end = new Date($('#dateEnd').val());

        while (start <= end) {
            console.log(start.toDateString());
            start.setDate(start.getDate() + 1);
        }
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

function tawk() { 
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63db87fb47425128791110a4/1go8omcfm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
}
tawk();

function verifPassword () {
    $("#buttonEnvoi").click(function(event){



        let password = $("#password").val();
        let confirmPassword=  $("#confirmPassword").val();
        console.log('click');
        console.log(password);
        console.log(confirmPassword);
    
        if (password === confirmPassword ) {
             $("#form").submit();
           }else{
            event.preventDefault();
            console.log('not good')
           }
    })
}
verifPassword ();
