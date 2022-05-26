<?php
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Leash.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Clothing.php';


$alessandro = new User('Alessandro','Saba','saba_alessandro@icloud.com','may',2022,true);
$francesco = new User('Francesco','Saba','saba_alessandro@icloud.com','may',2021,false);

$mingo = new Clothing(112,'mingo','clothing',120,'lorem','0',true,'fgdfg','dog','cotone','M','maglione','may','july','blue');
$stone = new Clothing(113,'stone','clothing',60,'lorem','0',true,'fgdfg','dog','cotone','s','pettorina','june','july','blue');

echo "<h2> Start Value User</h2>";
var_dump($alessandro,$francesco);

echo "<h2> Start Value Product</h2>";
var_dump($mingo,$stone);

echo "<h2> set sconto registrato Alessandro </h2>";
$mingo->setSales($alessandro);
var_dump($mingo->name,$mingo->sales);

echo "<h2> set sconto registrato no registrato Francesco</h2>";
$mingo->setSales($francesco);
var_dump($mingo->name,$mingo->sales);

echo "<h2> check payment method Valid Alessandro</h2>";
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
var_dump($stone->period_avaible_start,$stone->period_avaible_end,$stone->avaible);


