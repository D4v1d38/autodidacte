const pointeur = document.querySelector('.pointeur');
var text = "<p>du text en <strong>js</strong></p>";

//mousemove: L' événement mousemove se produit chaque fois que 
//le pointeur de la souris se déplace dans l'élément sélectionné.

window.addEventListener('mousemove', (e)=>{
    pointeur.style.left = e.pageX + "px";
    pointeur.style.top = e.pageY + "px" ;
})

pointeur.addEventListener('mousedown', ()=>{
    pointeur.style.backgroundColor="red";
})

pointeur.addEventListener('mouseup', ()=>{
    pointeur.style.backgroundColor="";
})

