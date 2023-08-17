const box = document.querySelector('.item-block');

const localObj = JSON.parse(localStorage.getItem('product-item'))

const contentHTML = `
<div class="item-content">

    <div class="item-img">
        <img class="cart-product__img" src="${localObj.img}" alt="">
        <div class="item-img__avialable">В наличии</div>
    </div>

    <div class="item-info">

        <h2 class="item-title cart-name">${localObj.title}</h2>
        <p class="item-subtitle">Винтажные кеды от Nike, которые находятся уже на нашем складе в Китае</p>
        <div class="item-price cart-price">${localObj.price}₽</div>
        <div class="item-view">Просматриваемый товар</div>

        <div class="item-color">
            <p class="item-character__title">Color</p>
            <div class="item-color__wrapper">
                <div class="item-color__obj"></div>
            </div>
            <div class="item-color__clear item-character__title">Clear</div>
        </div>

        <div class="item-size">
            <p class="item-character__title">Size</p>
            <div class="item-size__wrapper">
                <div class="item-size__obj active">42</div>
                <div class="item-size__obj">43</div>
                <div class="item-size__obj">44</div>
                <div class="item-size__obj">45</div>
                <div class="item-size__obj">46</div>
            </div>
        </div>

        <div class="item-avialable">В наличии</div>

        <div class="item-counter">
            <div class="item-counter__minus" data-action="minus">-</div>
            <div class="item-counter__value" data-value>1</div>
            <div class="item-counter__plus" data-action="plus">+</div>
        </div>

        <button class="item-btn">Добавить в корзину</button>

    </div>

</div>`;

box.insertAdjacentHTML('beforeend', contentHTML)

window.addEventListener('click', (e) => {

    const countValue = document.querySelector('.item-counter__value');

    if(e.target.dataset.action === 'minus') {
        console.log('dsaffa')
        if(parseInt(countValue.innerText) > 1) {
            countValue.innerText = --countValue.innerText
        }
    }

    if(e.target.dataset.action === 'plus') {
        console.log('dsaffa')
        countValue.innerText = ++countValue.innerText
    }

})