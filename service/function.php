<?php

// FONCTION CONNEXION
require_once("./config/parametre.php");
function connexion($host = HOST, $dbname = DBNAME, $user = USER, $password = PASSWORD){
    $dns = "mysql:host = $host; dbname = $dbname; charset=utf8";
    try{
        $connexion = new PDO($dns, $user, $password);
    }catch(Exception $e){
        echo "<h1>Connexion Impossible ! Vérifier les paramètres !</h1>";
        die;
    }
    return $connexion;
}

// FONCTION GENERATION DE PAGE
function generatePages($file, $variables=[], $base = "page/base-bs.html.php"){
    if(file_exists($file)){
        extract($variables);
        ob_start();
        require($file);
        $content = ob_get_clean();
        ob_start();
        require($base);
        $page = ob_get_clean();
        echo $page;
    }else{
        echo "<h1>Désolé le fichier $file n'existe pas</h1>";
        die;
    }
}

// FONCTION RECUPERER ID TABLE
function findByIdTable($nomTable, $id){
    $connexion = connexion();
    $sql = "SELECT * FROM $nomTable WHERE ID=?";
    $requete = $connexion -> prepare($sql);
    $requete -> execute([$id]);
    return true;
}

// FUNCTION SUPPRIMER ID TABLE
function deleteByIdTables($nomTable, $id){
    $connexion = connexion();
    $sql = "DELETE FROM $nomTable WHERE id=?";
    $requete = $connexion -> prepare($sql);
    $requete -> execute([$id]);
    return true;
}

// FONCTION PRINT 
function printr($tableau){
    echo "<pre>";
    print_r($tableau);
    echo "</pre>";
}

// FONCTION LISTE TABLE
function listTable($nomTable){
    $sql = "SELECT * FROM $nomTable";
    $connexion = connexion();
    $requete = $connexion -> prepare($sql);
    $requete -> execute();
    $tables = $requete -> fetchAll();
    return $tables;
}
?>