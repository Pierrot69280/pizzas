<div class="row">
    <?php foreach ($tacos as $taco) : ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $taco['image'] ?>" class="card-img-top imagePizzas" alt="<?= $taco['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $taco['name'] ?></h5>
                    <p class="card-text"><?= $taco['description'] ?></p>
                    <form action="ficheTacos.php" method="post">
                        <input type="hidden" name="tacoId" value="<?= $taco['id'] ?>">
                        <button type="submit" class="btn btn-primary">Voir</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
