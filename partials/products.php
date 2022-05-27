<?php
$logged_in = boolval($_COOKIE['loggedIn']);
$user = json_decode($_COOKIE['user']);
$carrello = json_decode($_COOKIE['basket'], true);
?>
<div class="container py-5">
    <div class="row row-cols-1 row-cols-lg-4 g-3">
        <?php foreach ($products as $product) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                    <div class="card-body">
                        <h3><?= $product->name ?></h3>
                        <p><?= $product->genre ?></p>
                        <small>Description: <?= $product->description ?></small> <br>
                        <?php if (!$logged_in) : ?>
                            <small>€<?= $product->price ?></small>
                        <?php else : ?>
                            <small class="text-decoration-line-through">€<?= $product->price ?></small>
                            <small class="text-danger">€<?= $product->setSales($user) ?></small>
                        <?php endif; ?>
                        <form action="./carrello.php" method="POST">
                            <input type="hidden" name="product" value="<?= $product->name ?>">
                            <input type="hidden" name="image" value="<?= $product->image ?>">
                            <?php if (!$logged_in) : ?>
                                <input type="hidden" name="price" value="<?= $product->price ?>">
                            <?php else : ?>
                                <input type="hidden" name="price" value="<?= $product->setSales($user) ?>">
                            <?php endif; ?>
                            <div class="form-group d-flex">
                                <input class="form-control" type="number" name="quantity" id="quantity" min="1" max="<?= $product->quantity; ?>" value="1">
                                <button class="btn btn-success" type="submit">Add to Carrello</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
    if ($carrello) : ?>
        <div class="carrello bg-warning p-2 position-fixed top-0 end-0 me-4">
        <h4>Your Carrello</h4>
        <?php foreach ($carrello as $acquisto) : ?>
            <div class="card mb-3 bg-light" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $acquisto['image']; ?>" class="h-100 img-fluid rounded-start" alt="<?= $acquisto['product']; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Name: <?= $acquisto['product']; ?></h5>
                            <p class="card-text">Quantity: <?= $acquisto['quantity']; ?></p>
                            <p class="card-text">Final Price: <?= $acquisto['price'] * $acquisto['quantity']; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="button text-center">
            <button type="submit">Acquista</button>
            <button type="submit">Annulla</button>
        </div>
    </div>
    <?php endif; ?>