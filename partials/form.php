<?php
if (isset($_POST) && count($_POST) === 3) {
    include __DIR__ . '/../Models/User.php';
    include __DIR__ . '/../Models/Product.php';

    $new_user = new User($_POST['name'],$_POST['lastname'],$_POST['email'],'may',2022,true);
    $json_new_user = json_encode($new_user);  
    setcookie('user', $json_new_user);
    setcookie('loggedIn', 'true');  
    header('Location: ./correct.php');
} 

?>
<div class="container bg-light py-5 text-center">
    <h3 class="">Registrati</h3>
    <form action="http://localhost/PHP/php-oop-2/register.php" method="post">
        <div class="mt-4">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
        </div>
        <div class="mt-4">
            <label for="name">LastName:</label><br>
            <input type="text" name="lastname" id="lastname" placeholder="Enter Your LastName" required>
        </div>
        <div class="mt-4">
            <label for="name">E-mail</label><br>
            <input type="mail" name="email" id="email" placeholder="Enter Your Mail" required>
        </div>
        <div class="button">
            <button class="mt-4" type="submit">Send</button>
        </div>
    </form>
</div>