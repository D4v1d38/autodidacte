const infoShow = document.getElementById('bitinfos');
const devise = document.getElementById('devise');
//url de l'api
const url = 'https://blockchain.info/ticker';

//fonction async de notre appel a l'API
function recupererBitCoin(){

  fetch(url)
    .then(response => response.json())
    .then((donnees)=>{
    infoShow.textContent = donnees.EUR.last
    devise.textContent = donnees.EUR.symbol
    setTimeout(recupererBitCoin, 3000)
  })
    .catch(error => console.log('erreur = ' +error))
  
}

//on lance notre fonction
recupererBitCoin();