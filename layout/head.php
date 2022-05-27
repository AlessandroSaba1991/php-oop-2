<?php
$logged_in = boolval($_COOKIE['loggedIn']);
$user = json_decode($_COOKIE['user']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <style>
        body {
            height: 100vh;
        }

        main {
            height: calc(100% - 98px);
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <header>
        <nav class="nav nav-tabs nav-stacked justify-content-center">
            <a class="nav-link" href="#">Home</a>
            <?php if (!$logged_in) : ?>
                <a class="nav-link" href="#">Register</a>                
            <?php else : ?>
                <a class="nav-link"><?= $user->name . ' ' . $user->lastname;?></a>
            <?php endif; ?>
        </nav>
    </header>