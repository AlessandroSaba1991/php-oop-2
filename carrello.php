<?php
$carrello=[];
if (!$_COOKIE['basket']) {
    array_push($carrello, $_POST);
    $basket = json_encode($carrello);
    setcookie('basket', $basket);
    header('location: ./index.php');
} else  {
    $carrello = json_decode($_COOKIE['basket'], true);
    array_push($carrello, $_POST);
    $basket = json_encode($carrello);
    setcookie('basket', $basket);
    header('location: ./index.php');
}