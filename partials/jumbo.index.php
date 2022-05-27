<?php $logged_in = boolval($_COOKIE['loggedIn']); ?>

<div class="p-5 bg-success text-white text-center">
    <div class="container">
        <h1 class="display-3">Animal Shop Home</h1>
        <p class="lead">Hello my Friend, Show the latest Animal Product</p>
        <?php if(!$logged_in) : ?>
        <p class="lead">Register for 20% Discount <a class="text-danger" href="./register.php">REGISTRATI</a></p>
        <?php endif; ?>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis modi provident impedit natus nemo. Iusto temporibus neque illo nam aut!</p>
    </div>
</div>