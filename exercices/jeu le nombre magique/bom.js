let executeJeu = document.getElementById('jeu');
executeJeu.addEventListener('click',jeu);

function jeu(){
    let nbMagique = Math.trunc(Math.random()*10);
    console.log(nbMagique);

    let nbJoueur;
    let tentative =0;
    let nbEssai = 3;
    let histoJoueur="";
    

    while(nbJoueur != nbMagique){
        if(tentative < nbEssai){
            nbJoueur=prompt('entrer un nombre entre 0 et 10');
            tentative += 1;
            console.log('nombre de tentative : ' + tentative);

            if(tentative <= nbEssai-1){
                if(nbJoueur < nbMagique){
                    alert("le nombre magique est plus grand que " + nbJoueur );
                }
                if(nbJoueur > nbMagique){
                    alert("le nombre magique est plus petit que " + nbJoueur);
                }
            }

            if(nbJoueur == nbMagique){
                alert('bravo ! nombre de tentatives = ' + tentative);
                document.body.style.backgroundColor = "green";
            }

            histoJoueur += 'tentative '+ tentative + ')' + ' ' + nbJoueur +'\n';

        }else{
            alert('perdu vous avez atteint les ' + tentative + ' essais \n' + 'le chiffre magique était : ' + nbMagique);
            document.body.style.backgroundColor ="red";
            break;
        }
        
        document.getElementById('sol').textContent = 'le nombre magique etait :' + nbMagique;
        let synthese = document.getElementById('histo');
        synthese.innerText = histoJoueur;
        
    }

    /*
    while(nbJoueur != nbMagique){
        if(tentative < nbEssai){
            nbJoueur=prompt('entrer un nombre');
            tentative += 1;
            console.log('nombre de tentative : ' + tentative);
            
            if(nbJoueur < nbMagique){
                alert("le nombre magique est plus grand que " + nbJoueur );

            }else if(nbJoueur > nbMagique){
                alert("le nombre magique est plus petit que " + nbJoueur);
            }else{
                alert('bravo ! nombre de tentatives = ' + tentative);
                document.body.style.backgroundColor = "green";
            }

        }else{
            alert('perdu vous avez atteint les ' + tentative + ' essais');
            document.body.style.backgroundColor ="red";
            break;
        }
    }
    */

}