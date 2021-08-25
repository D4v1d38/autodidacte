//fonction constructeur de base

function Identite(prenom,nom,age){
    this.prenom = prenom;
    this.nom = nom;
    this.age = age;
};

Identite.prototype.personne = function(){
    console.log("L'utilisateur : " + this.prenom + " " + this.nom + " est connecté" );
};

// fonction constructeur Eleve

function Eleve(prenom, nom, age, classe){
    Identite.call(this, prenom,nom,age);
    this.classe=classe;
}

Eleve.prototype = Object.create(Identite.prototype);  //on fait l'heritage des methodes
Eleve.prototype.constructor = Eleve; //on redfinit le constructeur pour notre fonction eleve

Eleve.prototype.presentationEleve = function(){             // on rajoute des fonctions si l'on souhaite
    console.log("L'eleve : " + this.prenom +" "+ this.nom +" est en :" + this.classe);
};


let inscrit1 = new Identite('Mario','Bros',40);

let bart = new Eleve('Bartholomé','Simpson',10,'primaire');

inscrit1.personne();
bart.personne();
bart.presentationEleve();
