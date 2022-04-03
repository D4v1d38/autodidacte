/*
Gérer une liste de courses dans un tableau JS 
créer 4 fonctions :
1-addItem qui prend en argument un élément que l'on veut ajouter à notre liste de courses
2-displayShoppingList --> affiche la liste présente dans le tableau sous forme de liste à puce <ul><li>
3-removeAllItem --> elle vide la liste de courses
4-removeItem --> elle prend en argument un élément , et elle le supprime de la liste
Dans le code principal, tester ces fonctions
Abuser du console log pour vérifier que tout fonctionne bien
*/
let list=['pain','beurre','oeufs'];

function addItem(item, liste){
  liste.push(item);
}
addItem('lait',list)

function displayShoppingList(liste){
  let listeDisplay = '<ul>'
  
  for(i=0; i<liste.length; i++){
    listeDisplay += `<li>${liste[i]}</li>`
  }
  listeDisplay += '</ul>'
  return listeDisplay
}

function removeAllItems(liste){
  return liste=[];
}

function removeItem(item, list){
  let itemPosition = list.indexOf(item);
  list.splice(itemPosition, 1);
}


console.log(list)
removeItem('beurre',list)
console.log(list)