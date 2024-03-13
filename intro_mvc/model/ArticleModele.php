<?php

class ArticleModele{
    private $pdo;
    
    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=mvc_intro",
    "root", "");
    }

    public function ajouter(Article $article){
        $query = "INSERT INTO article VALUE(NULL, :libelle, :prix, :descr";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute([
            "libelle"   => $article->getLibelle(),
            "prix"   => $article->getPrix(),
            "descr"   => $article->getDescription()
        ]);
    }
    
    public function afficher(Article $article){
        $stmt = $this->pdo->prepare("SELECT * FROM article");
        $stmt->execute();

        $stmt = [];

        while($res = $stmt->fetch()){
            extract($res);
            $art = new Article($id, $libelle, $prix, $description);
            $tab[] = $art;
        }

        return $tab;
        
    }

    public function lire(){
        $query = "SELECT * FROM article WHERE id = :id";
        $stmt = sthis->pdo->prepare($query);

        $tmt->execute(["id" => $id]);
        $res = $tmt->fetch(PDO::FETCH_ASSOC);

        extract($res);
        return new Article($id, $libelle, $prix, $description);
    }

    public function supprimer(){
        $query = "DELETE FROM article WHERE id = :id";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute(["id" => $id]);
    }

    public function modifier(){
        
    }
}