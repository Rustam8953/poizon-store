const form = document.forms['form'];
const modal = document.querySelector('.modal');
const modalBtn = document.querySelector('.modal-btn');
const bodyBlock = document.querySelector('body')

modalBtn.addEventListener('click', () => {
    modal.classList.remove('active');
    bodyBlock.classList.remove('stuck');
})

document.addEventListener('readystatechange', function() {
    const eventCallback = function (e) {
        const el = e.target;
        const clearVal = el.dataset.phoneClear;
        const pattern = el.dataset.phonePattern;
        const matrix__def = '+7(___)___-__-__';
        const matrix = pattern ? pattern : matrix__def;
        let i = 0;
        let def = matrix.replace(/\D/g,""); 
        let val = e.target.value.replace(/\D/g,"");

        if(clearVal !== 'false' && e.type === 'blur') {
            if (val.length < matrix.match(/([\_\d])/g).length) { 
                e.target.value = '';
                return;
            }
        }

        if(def.length >= val.length) val = def;

        e.target.value = matrix.replace(/./g, function(a) {
            return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
        }) 

    }

    const phoneInputs = document.querySelectorAll('[data-phone-pattern]');

    for(let elem of phoneInputs) {
        for(let ev of ['input', 'blur', 'focus']) {
            elem.addEventListener(ev, eventCallback)
        }
    }
})

form.addEventListener('submit', sendMail);


function sendMail(e) {
    e.preventDefault();
    formSubmit();
    modalBox()
}

async function formSubmit() {
    const data  = serializeForm(form);
    const response = await sendData(data);
}

function serializeForm(formNode) {
    return new FormData(form);
}

async function sendData(data) {
    return await fetch("./../mail.php", {
        method: "POST",
        body: data,
    })
}

function modalBox() {
    modal.classList.add('active');
    bodyBlock.classList.add('stuck')
}