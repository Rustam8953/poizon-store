const contactBtn = document.querySelector('.contact-form__btn');
const modal = document.querySelector('.modal');
const modalBtn = document.querySelector('.modal-btn')
const body = document.querySelector('body')

contactBtn.addEventListener('click', () => {
    modal.classList.add('active');
    body.classList.add('stuck');
})

modalBtn.addEventListener('click', () => {
    modal.classList.remove('active');
    body.classList.remove('stuck');
})