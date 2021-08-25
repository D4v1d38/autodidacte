/*
//fonction constructeur
function film(t,a,m){
    this.titre = t;
    this.annee = a;
    this.motCles = m;
};

//on defini la methode qui sera commune a tous les objects dans le prototype de la fonction constructeur
film.prototype.affichage = function(){
    alert("le film : " + this.titre + "est sorti en : " + this.annee + "\nles mots-cles sont : " + this.motCles );
};

//on cré un nouvel objet que l'on nomme movie en faisant une instance de la fonction constructeur film
let movie = new film("Jurassic Park",1993,["dinosaure","Action","mythique!"]);

//on execute la methode affichage de l'objet movie
movie.affichage();*/

let Film = {
    titre : "default",
    annee : "default",
    motCles : "default",

    affichage : function(){
        alert("le film : " + this.titre + " est sorti en : " + this.annee + "\nles mots-cles sont : " + this.motCles + 
        "\nobjet créé avec Object.create ");
    }
}

let jurassic = Object.create(Film);
jurassic.titre = "Jurassic Park";
jurassic.annee = 1993;
jurassic.motCles = ["dinosaure","Action","mythique!"];



let acteurs = Object.create(jurassic);
acteurs.casting = ["acteur 1","acteur 2","acteur 3"];