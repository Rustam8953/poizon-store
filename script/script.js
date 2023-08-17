const footerBox = document.querySelector('.footer');
const headerBox = document.querySelector('.header');
const catalog = document.querySelector('.catalog');
const catalogProduct = document.querySelectorAll('.cart-product');


const footerHTML = `
<div class="footer-block block">
    <div class="footer-content">
        <div class="footer-info">
            <div class="footer-logo fs-manrope">
                <p class="logo"><a href="./index.php">Poizon Store</a></p>
                <p class="footer-text">
                    Магазин с экслюзивными и оригинальными кроссовками с доставкой из Китая
                </p>
            </div>
        </div>
        <div class="footer-lists">

            <ul class="footer-list">
                <a href="./catalog.php"><h4 class="footer-list__title">Каталог</h4></a>
                <li>
                    <a href="./catalog.php" class="footer-list__link">Nike</a>
                </li>
                <li>
                    <a href="./catalog.php" class="footer-list__link">Vans</a>
                </li>
                <li>
                    <a href="./catalog.php" class="footer-list__link">Converse</a>
                </li>
            </ul>

            <ul class="footer-list">
                <a href="./news.html"><h4 class="footer-list__title">Новости</h4></a>
                <li>
                    <a href="./news.html" class="footer-list__link">Первая последняя новость</a>
                </li>
                <li>
                    <a href="./news.html" class="footer-list__link">Вторая новость</a>
                </li>
                <li>
                    <a href="./news.html" class="footer-list__link">Подписка на новости</a>
                </li>
            </ul>

            <ul class="footer-list">
                <a href="./contact.html"><h4 class="footer-list__title">О магазине</h4></a>
                <li>
                    <a href="./faq.html" class="footer-list__link">FAQ</a>
                </li>
                <li>
                    <a href="./contact.html" class="footer-list__link">Контакты</a>
                </li>
            </ul>
            
        </div>
    </div>
</div>`;

const headerHTML = `
<div class="header-block block">
    <div class="header-content">

        <div class="header-logo">
            <a href="./index.php" class="logo fs-manrope">Poizon Store</a>
        </div>

        <div class="header-menu">

            <nav class="header-nav">
                <ul class="header-nav__list fs-space">
                    <li><a href="./index.php" class="header-nav__link">Главная</a></li>
                    <li><a href="./catalog.php" class="header-nav__link">Каталог</a></li>
                    <li><a href="./news.html" class="header-nav__link">Новости</a></li>
                    <li><a href="./contact.html" class="header-nav__link">Контакты</a></li>
                </ul>
            </nav>

            <div class="header-vidget">
                <a href="./cart.html" class="header-cart">
                    <div class="header-length fs-manrope">0</div>
                </a>
                <div class="header-vidget__item"></div>
            </div>

        </div>

        <div class="header-burger">
            <div class="header-line"></div>
        </div>

    </div>

</div>`;



footerBox.insertAdjacentHTML('beforeend', footerHTML);
headerBox.insertAdjacentHTML('beforeend', headerHTML);

if(catalog) {
    const swiperCatalog = new Swiper('.swiper-catalog', {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.catalog-pagination',
            clickable: true,
            renderBullet: function(index, className)  {

                let names = [];

                document.querySelectorAll('.catalog-swiper__slide').forEach(i => {
                    names.push(i.getAttribute('data-slide-name'))
                })

                return "<span class="+className+">" + names[index] + "</span>";

            }
        }
    })
}

const faqTitle = document.querySelectorAll('.faq-title');

if(faqTitle) {
    faqTitle.forEach(i => {
        i.addEventListener('click', () => {
            i.classList.toggle('active')
        })
    })
}

const headerBurger = document.querySelector('.header-burger');

headerBurger.addEventListener('click', () => {
    document.querySelector('.header-menu').classList.toggle('active')
    document.querySelector('.header-line').classList.toggle('active')
    document.querySelector('body').classList.toggle('stuck')
})


const headerLength = document.querySelector('.header-length')

window.addEventListener('click', (e) => {

    if(e.target.closest('.cart-product')) {
        const domEl = e.target.closest('.cart-product');
    
        const cartItem = {
            title: domEl.querySelector('.cart-name').innerText,
            price: productPrice(domEl.querySelector('.cart-product__price').innerText),
            img: domEl.querySelector('.cart-product__img').getAttribute('src')
        }
    
        function productPrice(w) {
            return w.split('').map(i => i.match(/[0-9]/)?.join('')).join('')
        }
    
        localStorage.setItem('product-item', JSON.stringify(cartItem));
    }

    lengthChange()

})


lengthChange()


function lengthChange() {

    if(localStorage.getItem('cart-item')) {
        headerLength.innerText = JSON.parse(localStorage.getItem('cart-item')).length
    }

    if(parseInt(headerLength.innerText) <= 0) {
        headerLength.classList.add('display-none')
    } else if(parseInt(headerLength.innerText) <= 0) {
        headerLength.classList.remove('display-none')
    }

}