// heritage avec class

//creation de la class identité
class Identite{

    constructor(first,name, age){
        this.first = first;
        this.name = name;
        this.age = age;
    }

    isConnect(){
        alert(`${this.first} ${this.name} est connecté depuis class`);
    }
};

// creation de la class eleve avec heritage de identité
class Eleve extends Identite{
    constructor(first, name, age, classe, moyenne){
        super(first,name,age); // on appele le constructeur parent
        this.classe = classe;
        this.moyenne = moyenne;
    }

    eleveInfo(){
        alert(`${this.first} ${this.name} est en classe de ${this.classe} avec une moyenne de ${this.moyenne}`);
    }

}

// instances des classes 
let user3 = new Identite('Homer','simpson', 39);
let user4 = new Eleve('maggie','simpson', 2, 'maternelle', 15);

//appel des fonctions
user3.isConnect();
user4.eleveInfo();