// fonction constructeur Identity
function Identity(first, name, age) {
    this.first = first;
    this.name = name;
    this.age = age;
};
// On definit la methode dans le prototype pour qu'elle soit partagée
Identity.prototype.isConnect = function () {
    alert(this.first + ' ' + this.name + ' est connecté(e)');
    alert(`${this.first} ${this.name} est connecté(e)`);
}

// on definit un constructeur Eleve qui fera appele a identity
function Eleve(first, name, age, classe, moyenne){
    Identity.call(this, first, name, age ); // on importe les propriétés de Identity (heritage des proprietes)
    this.classe = classe; // on cree des proprietes propres a eleve
    this.moyenne = moyenne; // on cree des proprietes propres a eleve
}

Eleve.prototype = Object.create(Identity.prototype); // on importe les fonctions de identity (heritage de methodes)
Eleve.prototype.constructor = Eleve; // on redéfini le constructeur d'eleve

Eleve.prototype.eleveInfo = function(){ // ON créé une fonction propre a Eleve 
    alert(this.first + ' ' + this.name + ' en classe de ' + this.classe + ' a obtenu la moyenne de : ' + this.moyenne);
    alert(`${this.first} ${this.name} en classe de ${this.classe} a obtenu la moyenne de : ${this.moyenne}`);
}


let user1 = new Identity('bart', 'simpson', 10); // creation d'un utilisateur en faisant une instance de Identity
let user2 = new Eleve('Lisa', 'simpson', 8, 'CM2', 18); // creation d'un utilisateur en faisant une instance de ELeve


//appels aux fonctions
user1.isConnect(); 
user2.eleveInfo();



