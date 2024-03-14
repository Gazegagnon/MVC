<?php

include "entities/Article.php";
include "entities/Categorie.php";

include "controller/ArticleController.php";

include "model/ArticleModele.php";
include "model/CategorieModel.php";

include "views/header.php";

$artCtl = new ArticleController();

$artCtl->articleHttp();


// $artMdl = new ArticleModele;

// $a = new Article(100, "truc", 750, "lorem ipsum");

// $artMdl->ajouter($a);

// var_dump($artMdl->afficher());