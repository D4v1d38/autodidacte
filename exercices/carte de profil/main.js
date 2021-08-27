const card = document.querySelector('.card');
const toggle = document.querySelector('.toggle');

toggle.addEventListener('click', () => {
    card.classList.toggle('active');
})