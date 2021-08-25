// ciblage des élements
const buttons = document.querySelectorAll('.btn');
let result = document.getElementById('result');

// pour chaque bouton ayant la classe .btn on ajoute
// un éveemen au click qui stock dans result la valeur de l'id du bouton cliqué
//grace a e.target.id
buttons.forEach((button)=>{
    button.addEventListener('click',(e)=>{
        result.textContent += e.target.id;
    })
});

//eval() permet de realiser le calcul contenu dans result
equal.addEventListener('click', ()=>{
    result.textContent = eval(result.textContent);
})

//clear supprime la ligne resultat en la remplacant 
//par une chaine vide
clear.addEventListener('click',()=>{
    result.textContent="";
});


