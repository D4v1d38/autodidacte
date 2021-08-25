/*=== EXERCICE SUR scroll ===*/
const menu = document.querySelector('nav');
const barreProgression = document.querySelector('.lecture');

window.addEventListener('scroll', ()=>{
    if(scrollY>0){
        menu.style.position="fixed";
        menu.style.backgroundColor="purple";
        menu.style.transition="0.5s";
    }else{
        menu.style.backgroundColor="transparent";
    }

    /* calcul pourcentage position hauteur fenetre */
    
    const pourcentFenetre =  scrollY/(document.body.offsetHeight - innerHeight)*100;   // position haute du scroll
    
    console.log('innerheight : ' + innerHeight);
    console.log('document.body.offsetHeight : ' + document.body.offsetHeight);
    console.log('pourcentage : ' +pourcentFenetre);

    barreProgression.style.width=pourcentFenetre + "%";

});

