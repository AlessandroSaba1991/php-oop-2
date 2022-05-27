<?php 
$logged_in = boolval($_COOKIE['loggedIn']); 
$user = json_decode($_COOKIE['user']);
?>
<div class="container py-5">
    <div class="row row-cols-1 row-cols-lg-4 g-3">
        <?php foreach ($products as $product) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $product->image?>" alt="<?= $product->name?>">
                    <div class="card-body">
                        <h3><?= $product->name?></h3>
                        <p><?= $product->genre?></p>
                        <small>Description: <?= $product->description?></small> <br>
                        <?php if(!$logged_in) : ?>
                        <small>€<?= $product->price?></small>
                        <?php else : ?>
                        <small class="text-decoration-line-through">€<?= $product->price?></small>
                        <small class="text-danger">€<?= $product->setSales($user)?></small>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>