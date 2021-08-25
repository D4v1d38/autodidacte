const boxes = document.querySelectorAll('.box');
const btnTheme = document.querySelector('#btn-theme');
const boxTheme = document.querySelector('#theme');
const btnRouge = document.querySelector('#btn-rouge');
const btnVert = document.querySelector('#btn-vert');
const btnJaune = document.querySelector('#btn-jaune');

btnTheme.addEventListener('click', ()=>{
    boxTheme.classList.toggle('block-is-visible');
});

btnRouge.addEventListener('click',()=>{
    
    boxes.forEach(itemsDeBoxes => {
        itemsDeBoxes.classList.add('theme-rouge');
        itemsDeBoxes.classList.remove('theme-vert');
        itemsDeBoxes.classList.remove('theme-jaune');
  
    });
});

btnVert.addEventListener('click',()=>{
    
    boxes.forEach(itemsDeBoxes => {
        itemsDeBoxes.classList.add('theme-vert');
        itemsDeBoxes.classList.remove('theme-rouge');
        itemsDeBoxes.classList.remove('theme-jaune');
    });
});

btnJaune.addEventListener('click',()=>{
    
    boxes.forEach(itemsDeBoxes => {
        itemsDeBoxes.classList.add('theme-jaune');
        itemsDeBoxes.classList.remove('theme-rouge');
        itemsDeBoxes.classList.remove('theme-vert');
    });
});