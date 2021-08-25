//Identification des boutons
const btnRouge = document.getElementById('btn-rouge');
const btnVert = document.getElementById('btn-vert');
const btnJaune = document.getElementById('btn-jaune');

//Identification des elements 
const boxes = document.querySelectorAll('.box');

//fonction nous permettant de changer les couleurs de elements visés
function colorTheme(backColor, BorderColor){
    for (item of boxes){
        item.style.backgroundColor=backColor;
        item.style.border="2px solid " + BorderColor ;
       };
};

// evenement liés au clic
btnRouge.addEventListener('click',()=>{
    colorTheme("red","blue");
});

btnVert.addEventListener('click',()=>{
    colorTheme("green","orange");
});

btnJaune.addEventListener('click',()=>{
    colorTheme("yellow","black");
});





