// 1. Créez une variable « invites » qui contient vos 5 meilleurs amis :
let invites = ['Anna', 'Paul', 'Jean', 'Manon', 'Téo'];

// OUPS, vous avez oublié votre super ami d’enfance (bravo !!), il doit être en première place dans ce
// tableau, il s’agit de Matthieu.
invites.unshift('Matthieu');
// . Ajoutez à la fin du tableau, en une seule instruction, vos frères et sœurs, Mariame et Valentin
invites.push("Mariame","Valentin");
// Vous décidez finalement d’inverser l’ordre de votre tableau, le premier devant se retrouver en dernier.
invites.reverse();
// . Le tri ne vous convient pas encore, vous décidez de les trier finalement par ordre alphabétique
invites.sort()
// Par souci de mise en page des marque-places, vous avez besoin de connaître la liste des prénoms qui
// font plus de 7 caractères
for(i=0; i<invites.length; i++){
  if(invites[i].length >=7){
    console.log(invites[i])
  }
}
// Votre ami Théo passe vous voir, vous êtes en train d’élaborer cette liste. Il n’est pas content en la voyant,
// vous avez mal orthographié son prénom. Ca n’est pas Téo mais Théo. Trouvez le moyen de corriger.
invites[6] = "Théo";
// Afficher à l’écran la liste d’amis sous forme d’une liste html (<ul><li>…)
let List ="<ul>";

for(i=0; i<invites.length ; i++){
  List +='<li>' + invites[i] + '</li>'
}
List += '</ul>'
document.write(List)