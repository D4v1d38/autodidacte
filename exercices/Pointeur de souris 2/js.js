//declarations des variables
const pointeur = document.querySelector('.pointeur');
let affichageMobile;
let tailleEcran = innerWidth;
let ecranMobile = 500;

console.log(tailleEcran);

// determination affichage ecrans

if(tailleEcran <= ecranMobile){
    affichageMobile = true;
    console.log(affichageMobile);
    document.body.style.background="red";
}else{
    affichageMobile = false;
    console.log(affichageMobile);
    document.body.style.background="blue";
}

// ecouteuirs d'evenements
//----- au survol de la souris 

    window.addEventListener('mouseover',(e)=>{
        pointeur.style.left = e.pageX + "px";
        pointeur.style.top = e.pageY +"px";
    });

//----- au click de la souris
    pointeur.addEventListener('mousedown', ()=>{
        pointeur.style.background="red";
        pointeur.style.transform = "scale(2)"
    });

//----- au relachement de la souris
    
    pointeur.addEventListener("mouseup", ()=>{
        pointeur.style.background="transparent";
        pointeur.style.transform = "scale(1) translate(-50%,-50%)"
    })

//----- test sur un evenement  keypress

const keyUser= document.getElementById('keypress')

//---- Affichage des evenments  lié au keypress

  document.addEventListener('keypress',(e)=>{
      console.log(e)
  })

//----- si la touche R est pressé le background devient rouge

  document.addEventListener('keypress', (e)=>{
      if(e.key == "r"){
          document.body.style.backgroundColor = "red";
      }
  })
