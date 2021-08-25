/*déclarations des variables pour la compositions des passwords*/
const letters = "abcdefghijklmnopqrstuvwxyz";
const capitals = letters.toUpperCase();
const numeric = "0123456789";
const specialChars ="@-!<>%'.,;:&é^¨*+#";

function generatePwd() {
    /*création d'un tableau vide pour integrer les élements selectionnés */
    let data = [];
    let password="";

    /* remplissage du tableau en fonction des checkbox selectionnés */
    if(lowercase.checked) data.push(...letters);
    if(uppercase.checked) data.push(...capitals);
    if(number.checked) data.push(...numeric);
    if(symbols.checked) data.push(...specialChars);

    if(data.length===0){
        alert('Veuillez sélectionner des critères !');
        return;
    }

    for(i = 0; i < passwordLength.value; i++){
             password += data[Math.floor(Math.random()*data.length)];
    }    

    displayPassword.value = password;
    
    /* fonction servant a selectionné un text et le copié */
    displayPassword.select();
    document.execCommand('copy');

    btnGenerate.value = 'mot de passe copié ! ';

    setTimeout(() => {
        btnGenerate.value = 'Générer un mot de passe';
    }, 3000);
}

/* evenement du bouton */
btnGenerate.addEventListener('click', generatePwd);
