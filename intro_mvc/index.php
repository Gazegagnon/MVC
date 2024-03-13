<?php

include "entities/Article.php";

include "controller/ArticleController.php";

include "model/ArticleModele.php";

include "views/header.php";

if( isset($_GET['action']) ){
    $action = $_GET['action'];

    switch( $action ){
        case "article" ; 
        $articles = $artCtl->afficher();
            include "views/article/article.php";
            break;
    }
}


// $artMdl = new ArticleModele;

// $a = new Article(100, "truc", 750, "lorem ipsum");

// $artMdl->ajouter($a);

// var_dump($artMdl->afficher());