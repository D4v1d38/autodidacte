const infoShow = document.getElementById('bitinfos');
const devise = document.getElementById('devise');
//url de l'api
const url = 'https://blockchain.info/ticker';

//fonction async de notre appel a l'API
async function recupererBitCoin(){

  // Requete fetch (url, objet)
  const requete = await fetch(url,{
    method : 'GET'
  });
  
  //si NOK erreur SINON on recupere les donnees au format JSON
  if(!requete.ok){
    alert('une erreure est survenue')
  }
  else{
    let donnees = await requete.json() //recuperation des donnees en format json
    console.log(donnees)
    infoShow.textContent = donnees.EUR.last
    devise.textContent = donnees.EUR.symbol
    setTimeout(recupererBitCoin, 3000)
  }
}

//on lance notre fonction
recupererBitCoin();