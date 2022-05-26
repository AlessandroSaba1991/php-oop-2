<?php
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Leash.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Clothing.php';


$alessandro = new User('Alessandro','Saba','saba_alessandro@icloud.com','mastercard','22/05/2022',true);
$francesco = new User('Francesco','Saba','saba_alessandro@icloud.com','mastercard','22/05/2022',false);

$mingo = new Clothing(112,'mingo','clothing',120,'lorem','0',true,'fgdfg','dog','cotone','M','maglione','estate','maggio/settembre','blue');

var_dump($alessandro,$francesco,$mingo);

$mingo->setSales($alessandro);
var_dump($mingo);
$mingo->setSales($francesco);
var_dump($mingo);

