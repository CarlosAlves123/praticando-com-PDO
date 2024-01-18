// ... (seu código JavaScript existente) ...

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('#login');
const registerLink = document.querySelector('#register');
const btnPopup = document.querySelector('.btnLogin-popup');
const fechar = document.querySelector('#fechar'); // Selecionando pelo ID

registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

fechar.addEventListener('click', () => {
    wrapper.classList.remove('active-popup'); // Alterando para 'active'
});

// ... (seu código JavaScript existente) ...
