
<div class="row">
    <?php foreach ($pizzas as $pizza) : ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                    <img src="<?= $pizza['image'] ?>" class="card-img-top imagePizzas" alt="<?= $pizza['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $pizza['name'] ?></h5>
                    <p class="card-text"><?= $pizza['description'] ?></p>
                    <form action="fichePizza.php" method="post">
                        <input type="hidden" name="pizzaId" value="<?= $pizza['id'] ?>">
                        <button type="submit" class="btn btn-primary">voir</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>