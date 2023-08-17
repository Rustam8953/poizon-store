const btn = document.querySelector('.item-btn');
const size = document.querySelectorAll('.item-size__obj');
const price = document.querySelector('.cart-price')
const nameCart = document.querySelector('.cart-name');
const img = document.querySelector('.cart-product__img')
const cartWrapper = document.querySelector('.cart-items')
const cartDelete = document.querySelectorAll('.cart-delete');
const inputPrice = document.querySelectorAll('.input-price')
const wrapperHead = document.querySelector('.cart-wrapper__head')
const wrapperEmpty = document.querySelector('.cart-wrapper__empty');
let cartItem = [];
let totalCart = 0;

if(localStorage.getItem('cart-item')) {

    if(JSON.parse(localStorage.getItem('cart-item')).length > 0) {
        cartItem = JSON.parse(localStorage.getItem('cart-item'))
    }
    
}

size.forEach(i => {
    i.addEventListener('click', () => {
        size.forEach(q => {
            q.classList.toggle('active', q === i);
        })
    })
})

if(cartWrapper) {
    renderCart()
    calcCart()
}

window.addEventListener('click', (e) => {

    if(e.target.hasAttribute('cart-delete')) {
        const dom = e.target.closest('.cart-item');

        cartItem.forEach(i => {
            if(i.id == dom.getAttribute('id')) {

                const id = Number(dom.getAttribute('id'));
                
                var index = cartItem.filter(x => {
                    return x.id != id;
                })

                cartItem = index

                recordStorage()

                removeCart()

                renderCart()

                totalCart = 0

                calcCart()

            }
        })

        cartEmpty()

        lengthChange()

    }

    if(e.target.closest('.item-btn')) {{
        size.forEach(i => {
            if(i.classList.contains('active')) {
    
                var sizeValue = i.innerText;
    
                const cartPoduct = {
                    title: nameCart.innerText,
                    img: img.getAttribute('src'),
                    price: priceItem(price.innerText),
                    size: sizeValue,
                    id: Math.floor(Math.random() * (1, 9999 + 1)) + 1
                }
    
                cartItem.push(cartPoduct)

                recordStorage()
                
            }
        })
        lengthChange()
    }}

})

window.addEventListener('DOMContentLoaded', () => {

    if(wrapperHead) {
        cartEmpty()
    }

    lengthChange()
})

function priceItem(w) {
    return w.split('').map(i => i.match(/[0-9]/)?.join('')).join('');
}

function recordStorage() {
    localStorage.setItem('cart-item', JSON.stringify(cartItem))
}

function renderCart() {

    const local = JSON.parse(localStorage.getItem('cart-item'))

    local.forEach(i => {

        const cartItemHTML = `
        <div class="cart-item" id='${i.id}'>
            <div class="cart-left">
                <div class="cart-img">
                    <img src="${i.img}" alt="">
                </div>
                <div class="cart-info">
                    <input type="text" class="cart-item__title" name="product-name[]" value="${i.title}" readonly>
                    <input type="text" class="cart-item__size" name="product-size[]" value="Размер: ${i.size}" readonly>
                    <div class="cart-delete" cart-delete>Удалить</div>
                </div>
            </div>
            <input class="cart-price" name="product-price" type="text" readonly value="${i.price}.00₽">
        </div>`;

        cartWrapper.insertAdjacentHTML('beforeend', cartItemHTML);

    })

}

function removeCart() {
    cartWrapper.innerHTML = '';
}

function calcCart() {
    cartItem.forEach(i => {
        totalCart += parseInt(i.price)
    })
    inputPrice.forEach(i => {
        i.value = totalCart + '.00₽';
    })
}

function lengthChange() {

    const headerLength = document.querySelector('.header-length');

    headerLength.innerText = JSON.parse(localStorage.getItem('cart-item')).length

    if(parseInt(headerLength.innerText) <= 0) {
        headerLength.classList.add('display-none')
    } else {
        headerLength.classList.remove('display-none')
    }

}

function cartEmpty() {
    const local = JSON.parse(localStorage.getItem('cart-item'))

    if(local.length <= 0) {
        wrapperHead.classList.add('display-none')
        wrapperEmpty.classList.remove('display-none')
    } else {
        wrapperEmpty.classList.add('display-none')
        wrapperHead.classList.remove('display-none')
    }
}