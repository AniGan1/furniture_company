<main>
    <h2></h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <?php foreach ($goods as $product): ?>
            <div class="col">

                <div class="card h-50">
                    <img src="img/<?= $product['img'] ?>" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['title'] ?></h5>
                        <p class="card-text"><?= $product['description'] ?></p>
                        <p class="card-price">Цена: <strong><?= $product['price'] ?> ₽</strong></p>
                    </div>
                    <div class="card-footer text-center">
<<<<<<< HEAD
                        <a href="client/page_product/<?= $product['id_good'] ?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
=======
                        <a href="client/page_product/<?= $product['id'] ?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
>>>>>>> client
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg> Купить</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>