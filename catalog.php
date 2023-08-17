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

        <section class="page-banner">
            <div class="page-banner__block block">
                <div class="page-banner__wrapper">
                    <div class="page-banner__content">
                        <div class="page-banner__nav">
                            <a href="./index.html" class="page-banner__prev fs-inter">Главная</a>
                            <a href="./catalog.html" class="page-banner__present fs-inter">Каталог</a>
                        </div>
                        <h2 class="page-banner__title fs-space page-title">Каталог</h2>
                        <p class="page-banner__subtitle fs-inter">В нашем каталоге вы можете найти самые популярные пары кроссовок у знаменитых брендов обуви</p>
                    </div>
                    <div class="page-banner__bg"></div>
                </div>
            </div>
        </section>

        <section class="catalog">
            <div class="catalog-block block">
                <div class="catalog-content">

                    <div class="catalog-swip swiper swiper-catalog">
                        <div class="swiper-pagination catalog-pagination"></div>
                        <div class="catalog-swip swiper swiper-catalog">
                            <div class="swiper-pagination catalog-pagination"></div>
                            <div class="catalog-wrapper swiper-wrapper">
    
                                <div class="catalog-slide__page swiper-slide catalog-swiper__slide" data-slide-name="Nike">
                                    
                                    <?php
                                        $mysqli = new mysqli('localhost', 'u1923960_qwerty', '89537845840Rustam', 'u1923960_qwerty');
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
                                        $mysqli = new mysqli('localhost', 'u1923960_qwerty', '89537845840Rustam', 'u1923960_qwerty');
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
                                        $mysqli = new mysqli('localhost', 'u1923960_qwerty', '89537845840Rustam', 'u1923960_qwerty');
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
                    </div>

                    <a href="" class="catalog-btn">
                        <button class="button-link">Каталог</button>
                    </a>

                </div>
            </div>
        </section>
        
    </main>

    <footer class="footer"></footer>
    
    <script src="./script/cart-add.js"></script>
    <script src="./script/script3.min.js"></script>

</body>
</html>