const bouton1 = document.getElementById("btn1");
const bouton2 = document.getElementById("btn2");
const bouton3 = document.getElementById("btn3");
const showBox = document.querySelector(".show-box");

let isVisible = false;

function affichageBlock(elmt){
    let cible = document.querySelector(elmt);

      cible.classList.toggle('toggle-block');
};

function affichageInlineBlock(elmt){
    let cible = document.querySelector(elmt);

    cible.classList.toggle('toggle-inline-block');
};

bouton1.addEventListener('click', ()=> {
    showBox.classList.toggle('toggle-block');
    bouton2.classList.toggle('toggle-inline-block');
});

bouton2.addEventListener("click", ()=>{
    isVisible = !isVisible;
    isVisible ? showBox.classList.add('toggle-block') : showBox.classList.remove('toggle-block');
});

bouton3.addEventListener("click", ()=>{
    affichageInlineBlock("#btn2");
    affichageBlock(".show-box");
    affichageBlock(".show-box2");
});


