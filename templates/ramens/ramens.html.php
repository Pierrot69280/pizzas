<div class="row">
    <?php foreach ($ramens as $ramen) : ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $ramen['image'] ?>" class="card-img-top imagePizzas" alt="<?= $ramen['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $ramen['name'] ?></h5>
                    <p class="card-text"><?= $ramen['description'] ?></p>
                    <form action="ficheRamen.php" method="post">
                        <input type="hidden" name="ramenId" value="<?= $ramen['id'] ?>">
                        <button type="submit" class="btn btn-primary">Voir</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
