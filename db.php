<?php
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Leash.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Clothing.php';

$products = [
    new Clothing(112, 'mingo', 'clothing', 120, 'lorem', 'https://picsum.photos/200', 'dog', 'cotone', 'M', 'maglione', 'may', 'july', 'blue'),
    new Clothing(113, 'stone', 'clothing', 60, 'lorem', 'https://picsum.photos/200', 'dog', 'cotone', 's', 'pettorina', 'june', 'july', 'blue'),
    new Game(112, 'Bounce', 'game', 30, 'lorem', 'https://picsum.photos/200', 'Cat', 'plastic', 'small', 'ball', 'blue'),
    new Clothing(112, 'mingo', 'clothing', 120, 'lorem', 'https://picsum.photos/200', 'dog', 'cotone', 'M', 'maglione', 'may', 'july', 'blue'),
    new Clothing(113, 'stone', 'clothing', 60, 'lorem', 'https://picsum.photos/200', 'dog', 'cotone', 's', 'pettorina', 'june', 'july', 'blue'),
    new Game(112, 'Bounce', 'game', 30, 'lorem', 'https://picsum.photos/200', 'Cat', 'plastic', 'small', 'ball', 'blue'),
    new Clothing(113, 'stone', 'clothing', 60, 'lorem', 'https://picsum.photos/200', 'dog', 'cotone', 's', 'pettorina', 'june', 'july', 'blue'),
    new Game(112, 'Bounce', 'game', 30, 'lorem', 'https://picsum.photos/200', 'Cat', 'plastic', 'small', 'ball', 'blue'),
];

/* 
        TEST EXCEPTION ON SETSALES OG PRODUCT

*/
/* $bounce = new Game(112, 'Bounce', 'game', 30, 'lorem', 'https://picsum.photos/200', 'Cat', 'plastic', 'small', 'ball', 'blue');
try {
    echo $bounce->setSales('ciao');
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
} */





/* echo "<h2> check payment method Valid Alessandro</h2>";
$alessandro->checkPayment();
var_dump($alessandro->payment_method_avaible);

echo "<h2> check payment method NO Valid Francesco</h2>";
$francesco->checkPayment();
var_dump($francesco->payment_method_avaible);

echo "<h2> set avaible period Mingo</h2>";
$mingo->setAvaible();
var_dump($mingo->period_avaible_start,$mingo->period_avaible_end,$mingo->avaible);

echo "<h2> set avaible period Stone</h2>";
$stone->setAvaible();
var_dump($stone->period_avaible_start,$stone->period_avaible_end,$stone->avaible); */
 
