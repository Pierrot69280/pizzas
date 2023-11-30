<?php
require_once "logique/logique.php";

foreach ($baseDonneesRamens as $ramen) {
    if ($ramen['id'] == $_POST['ramenId']) {
        $unRamen = $ramen;
    }
}

afficher("ramens/ramen", ["ramen" => $unRamen]);
?>