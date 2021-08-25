const days = ['lundi','mardi', 'mercredi','jeudi','vendredi','samedi','dimanche'];
// on declare un tableau vide pour enregistrer les données triées
let dayOrder = [];

//extraction du jours en cours
const options = {weekday:"long"};
let today = new Date().toLocaleDateString('fr-fr',options);

//decoupage du tableau à partir du jour en cours
let tab = days.slice(days.indexOf(today));

//decoupage du tableau pour recuperer les elements avant le jour en cours
let tab2 = days.slice(0,days.indexOf(today));

dayOrder = tab.concat(tab2);

console.log(tab);
console.log(tab2);
console.log(dayOrder);
