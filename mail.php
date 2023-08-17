<?php

    $productName = $_POST['product-name'];
    $cartTotalItem = $_POST['cart-total-item'];
    $productSize = $_POST['product-size'];
    $productPrice = $_POST['product-price'];
    $finallyTotal = $_POST['finally-total'];
    $finallyTotalPrice = $_POST['finally-total-price'];
    $userTel = $_POST['user-tel'];

    $to = 'alexeyromanovsky@gmail.com';
    $subject = "Заявка на заказ";
    $message = '
    ' . '<pre>'.print_r($array, true).'</pre>' . '
    ' . '<pre>'.print_r($productName, true).'</pre> ' . '
    ' . $productPrice . '
    ' . $cartTotalItem . '
    ' . $finallyTotal . '
    ' . $finallyTotalPrice . '
    ' . $userTel;

    $headers = 'From: webmaster@example.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

?>