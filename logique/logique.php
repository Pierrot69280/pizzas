<?php

$baseDonneesPizzas = [
    [
    "id" => 1,
    "image" => "https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2018.2F07.2F30.2F6aaa4088-b316-4160-a97d-74ec7ca71b07.2Ejpeg/850x478/quality/80/crop-from/center/pizza-royale.jpeg",
    "name" => "reine",
    "description" => "olives jambon champignons"

    ],

    [
        "id" => 2,
        "image" => "https://www.buttalapasta.it/wp-content/uploads/pizza-ai-4-formaggi-1200x802.jpg",
        "name" => "Quatre fromages",
        "description" => "parmezan, bleu, chevre, mozzarella"

    ],

    [
        "id" => 3,
        "image" => "https://lelocalapizzas.fr/wp-content/uploads/2022/02/recette-pizza-chevre-miel.jpg",
        "name" => "Chèvre au miel",
        "description" => "base crème, chèvre, miel"
    ],

    [
        "id" => 4,
        "image" => "https://cdn.restomenu.com/web/img/section/3339/3f51747ebc62b65fa3a693e64964b013.jpg",
        "name" => "Méxicaine",
        "description" => "Viande aché, poivron, chorizo"

    ]
];


$baseDonneesTacos = [

    [
        "id" => 1,
        "image" => "https://www.annexe-pizza.com/wp-content/uploads/2015/09/Tacos-Ok.png",
        "name" => "Tacos 3 viandes",
        "description" => "Kebab, Steak, Tenders, algérienne"
    ],

    [
        "id" => 2,
        "image" => "https://chamas-tacos.com/wp-content/uploads/2022/05/CT_SUPREME_RACLETTE_800X800_UBEREATS_AVRIL_2022.jpg",
        "name" => "Tacos raclette",
        "description" => "Steak, Tenders, Raclette & Oignons"
    ],

    [
        "id" => 3,
        "image" => "https://pbs.twimg.com/media/DX6vfQcXkAAYFck.jpg",
        "name" => "Giga Tacos",
        "description"=> "Impossible à finir"
    ],

    [
        "id" => 4,
        "image" => "https://tb-static.uber.com/prod/image-proc/processed_images/2d854b3b5588da646ad5da4e64ed7152/16bb0a3ab8ea98cfe8906135767f7bf4.jpeg",
        "name" => "Tacos marinade",
        "description" => "Spécialité, surprise !!"
    ]

];


$baseDonneesRamens = [
  [
      "id"=>1,
      "image" => "https://www.itadakimasu.fr/wp-content/uploads/2019/04/Ramen-Naruto-16.jpg",
      "name" => "Naruto",
      "description" => "porc, oeuf mollé, bambou"
  ],

    [
        "id"=>2,
        "image" => "https://montougo.ca/wp-content/uploads/2023/02/soupe-ramen-poulet-gingembre-1500x1500-1675446267.jpg",
        "name" => "Sasuke",
        "description" => "Boeuf, épices, gingembre"
    ],

    [
        "id"=>3,
        "image" => "https://cdn.shopify.com/s/files/1/1657/0407/files/Walder_x_Fody_Ramen_Soup_4.jpg?v=1638997721",
        "name" => "Sakura",
        "description" => "Légumes, oeufs"
    ],

    [
        "id"=>4,
        "image" => "https://epicesdecru.com//upload/recettes/miso-ramen.jpg",
        "name" => "Boruto",
        "description" => "porc, épicesc"
    ]
];


$dbHost = "localhost";
$dbName = "sushis";

$username = "aaaaaa";
$password = "aaaaaaaa";

$pdo = new PDO(
    "mysql:host=$dbHost;dbname=$dbName",
    $username,
    $password,
    [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]
);
function afficher($nomDeTemplate, $donnees)
{

    ob_start();
    extract($donnees);

    require_once "templateshtml.php";

    $content = ob_get_clean();

    require_once "templates/base.html.php";
}












