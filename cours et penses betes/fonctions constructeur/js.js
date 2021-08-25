// Creation d'une fonction constructeur 
function Utilisateur(n,m,a){
    this.nom = n;
    this.mail = m;
    this.age = a;

    this.bonjour = function(){
         alert("bonjour "+this.nom);
    }
}

// instance : creation d'un nouvel objet à partir de la fonction utilisateur
let player1 = new Utilisateur('David','hotmail',35);

//appel de la methode bonjour 
player1.bonjour();