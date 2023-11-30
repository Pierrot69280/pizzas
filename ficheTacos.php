
<?php
require_once "logique/logique.php";

foreach ($baseDonneesTacos as $taco) {
    if ($taco['id'] == $_POST['tacoId']) {
        $unTaco = $taco;
    }
}

afficher("tacos/taco", ["taco" => $unTaco]);

