/*odnosi se na header- zaglavlje- kad spustis dole promjeni se*/

window.addEventListener('scroll', function(){

    const header = document.querySelector('header');

    header.classList.toggle("sticky", window.scrollY > 0);

});



/*menu  ?*/

function menuToggle(){

    const menuToggle = document.querySelector('.menuToggle');

    const navigation = document.querySelector('.navigation')

    menuToggle.classList.toggle('active')

};



/*dio od nama - vise*/

const readMoreBtn = document.querySelector(".read-more-btn");

const extraText = document.querySelector(".extra-text");



readMoreBtn.addEventListener("click", () => {

    readMoreBtn.classList.toggle("active");

    extraText.classList.toggle("show");

    readMoreBtn.innerHTML = readMoreBtn.classList.contains("active") ? "manje": "više";

});





/*prijavi se*/

/*var card = document.getElementById("card");

function openRegister(){

    card.style.transform="rotateY(-180deg)";  /*prebaci me s prijave na registraciju*/

/*}



function openLogin(){

    card.style.transform="rotateY(0deg)";  /*prebaci me s prijave na registraciju*/

/*}*/
