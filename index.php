<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказать кроссовки с доставкой из Китая</title>
    <meta name="description" content="Доставка оригинальных кроссовок Nike Vans Converse из Китая"/>
    <meta name="robots" content="index, nofollow" />
    <meta name="yandex" content="noyaca" />
    <meta name="robots" content="noydir" />
    <link rel="stylesheet" href="./libs/swiper/swiper-bundle.min.css">
    <script src="./libs/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style3.min.css">
</head>
<body>
    
    <header class="header"></header>

    <main class="main">
        
        <section class="banner">
            <div class="banner-block">
                <div class="banner-content">

                    <div class="banner-swipe swiper swiper-banner fs-manrope">

                        <div class="banner-wrapper swiper-wrapper">

                            <div class="banner-slide swiper-slide">
                                <h2 class="banner-title">Доставим оригинальные кроссовки под заказ</h2>
                                <p class="banner-subtitle">
                                    Экслюзивные кроссовки с доставкой
                                    </br>
                                    из Китая в РФ
                                </p>
                            </div>

                            <div class="banner-slide swiper-slide">
                                <h2 class="banner-title">Доставим оригинальные кроссовки под заказ</h2>
                                <p class="banner-subtitle">
                                    Экслюзивные кроссовки с доставкой
                                    </br>
                                    из Китая в РФ
                                </p>
                            </div>

                            <div class="banner-slide swiper-slide">
                                <h2 class="banner-title">Доставим оригинальные кроссовки под заказ</h2>
                                <p class="banner-subtitle">
                                    Экслюзивные кроссовки с доставкой
                                    </br>
                                    из Китая в РФ
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="swiper-pagination banner-pagintaion"></div>

                </div>
            </div>
            <div class="banner-bg"></div>
        </section>

        <section class="service">
            <div class="service-block block">
                <div class="service-content">
                    <div class="service-items">

                        <div class="service-item delivery">
                            <div class="service-item__content">
                                <h4 class="service-item__title">Доставка</h4>
                                <p class="service-item__text">На склад в МСК и СПБ</p>
                            </div>
                        </div>

                        <div class="service-border"></div>

                        <div class="service-item refund">
                            <div class="service-item__content">
                                <h4 class="service-item__title">Возврат</h4>
                                <p class="service-item__text">Гарантия возврата</p>
                            </div>
                        </div>

                        <div class="service-border"></div>

                        <div class="service-item sup">
                            <div class="service-item__content">
                                <h4 class="service-item__title">Поддержка</h4>
                                <p class="service-item__text">С 10:00 до 22:00</p>
                            </div>
                        </div>

                        <div class="service-border"></div>

                        <div class="service-item sec">
                            <div class="service-item__content">
                                <h4 class="service-item__title">Защита</h4>
                                <p class="service-item__text">Посылки до МСК и СПБ</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="catalog">
            <div class="catalog-block block">
                <div class="catalog-content">

                    <div class="catalog-swip swiper swiper-catalog">
                        <div class="swiper-pagination catalog-pagination">
                        </div>
                        <div class="catalog-wrapper swiper-wrapper">

                            <div class="catalog-slide__page swiper-slide catalog-swiper__slide" data-slide-name="Nike">
                                
                                <?php
                                    $mysqli = new mysqli('localhost', 'name__bd', 'password', 'name__subBd');
                                    if($mysqli->connect_errno) {
                                        echo 'Ошибка соединения с сервером';
                                    }
                                    
                                    $query = "SELECT * FROM nike";
                                    $result = mysqli_query($mysqli, $query) or die (mysqli_error($mysqli));
                                    
                                    for($data =[]; $row = mysqli_fetch_assoc($result); $data[] = $row);
                                    $result = '';
                                    foreach ($data as $elem) {
                                        
                                        $result .= '<div class="catalog-item cart-product">';
                                        
                                        $result .= '<div class="catalog-img">';
                                        $result .= '<img class="cart-product__img" src="./img/catalog/Nike/' .$elem['img'] . '" alt="">';
                                        $result .= '</div>';
                                        
                                        $result .= '<div class="catalog-rating">';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '</div>';
                                        
                                        $result .= '<h4 class="catalog-title cart-name" onclick="window.location.href=' . "&#39;/item.html&#39;" .'">' .$elem['title'] . '</h4>';
                                        
                                        $result .= '<div class="catalog-price cart-product__price">от ' .$elem['price'] . '₽</div>';
                                        
                                        $result .= '</div>';
                                        
                                    };
                                    
                                    echo $result;
                                ?>

                            </div>

                            <div class="catalog-slide__page swiper-slide catalog-swiper__slide" data-slide-name="Vans">
                                
                                <?php
                                    $mysqli = new mysqli('localhost', 'name__bd', 'password', 'name__subBd');
                                    if($mysqli->connect_errno) {
                                        echo 'Ошибка соединения с сервером';
                                    }
                                    
                                    $query = "SELECT * FROM vans";
                                    $result = mysqli_query($mysqli, $query) or die (mysqli_error($mysqli));
                                    
                                    for($data =[]; $row = mysqli_fetch_assoc($result); $data[] = $row);
                                    $result = '';
                                    foreach ($data as $elem) {
                                        
                                        $result .= '<div class="catalog-item cart-product">';
                                        
                                        $result .= '<div class="catalog-img">';
                                        $result .= '<img class="cart-product__img" src="./img/catalog/Vans/' .$elem['img'] . '" alt="">';
                                        $result .= '</div>';
                                        
                                        $result .= '<div class="catalog-rating">';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '</div>';
                                        
                                        $result .= '<h4 class="catalog-title cart-name" onclick="window.location.href=' . "&#39;/item.html&#39;" .'">' .$elem['title'] . '</h4>';
                                        
                                        $result .= '<div class="catalog-price cart-product__price">от ' .$elem['price'] . '₽</div>';
                                        
                                        $result .= '</div>';
                                        
                                    };
                                    
                                    echo $result;
                                ?>

                            </div>

                            <div class="catalog-slide__page swiper-slide catalog-swiper__slide" data-slide-name="Converse">

                                <?php
                                    $mysqli = new mysqli('localhost', 'name__bd', 'password', 'name__subBd');
                                    if($mysqli->connect_errno) {
                                        echo 'Ошибка соединения с сервером';
                                    }
                                    
                                    $query = "SELECT * FROM converse";
                                    $result = mysqli_query($mysqli, $query) or die (mysqli_error($mysqli));
                                    
                                    for($data =[]; $row = mysqli_fetch_assoc($result); $data[] = $row);
                                    $result = '';
                                    foreach ($data as $elem) {
                                        
                                        $result .= '<div class="catalog-item cart-product">';
                                        
                                        $result .= '<div class="catalog-img">';
                                        $result .= '<img class="cart-product__img" src="./img/catalog/Converse/' .$elem['img'] . '" alt="">';
                                        $result .= '</div>';
                                        
                                        $result .= '<div class="catalog-rating">';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '<span class="star active" aria-hidden="true"></span>';
                                        $result .= '</div>';
                                        
                                        $result .= '<h4 class="catalog-title cart-name" onclick="window.location.href=' . "&#39;/item.html&#39;" .'">' .$elem['title'] . '</h4>';
                                        
                                        $result .= '<div class="catalog-price cart-product__price">от ' .$elem['price'] . '₽</div>';
                                        
                                        $result .= '</div>';
                                        
                                    };
                                    
                                    echo $result;
                                ?>
                                
                            </div>

                        </div>
                    </div>

                    <a href="./catalog.html" class="catalog-btn">
                        <button class="button-link">Каталог</button>
                    </a>

                </div>
            </div>
        </section>

    </main>

    <footer class="footer"></footer>

    <script>
        const swiperBanner = new Swiper('.swiper-banner', {
            pagination: {
                el: '.banner-pagintaion',
                clickable: true
            }
        })
    </script>
    <script src="./script/script3.min.js"></script>
</body>
</html>
