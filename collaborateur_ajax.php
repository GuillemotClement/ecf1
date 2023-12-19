<?php
    require_once("service/function.php");

    $action='list';
    //$sousPageHtml="page/collaborateur/form.php";
    extract($_GET);
    switch($action){
    //     // AJAX----------------------------------------
    //     case "save":
    //         $response_json = json_encode($_POST);
    //             extract($_POST);
    //             $connexion = connexion();
    //             if($id==0){
    //                 $sql = "insert into article (numArticle, designation, prixUnitaire) values (?, ?, ?)";
    //                 $requete = $connexion->prepare($sql);
    //                 $requete -> execute([$numArticle, $designation, $prixUnitaire]);
    //             }else{
    //                 $sql = "update article set numArticle=?, designation=?, prixUnitaire=? where id=?";
    //                 $requete = $connexion->prepare($sql);
    //                 $requete -> execute([$numArticle, $designation, $prixUnitaire, $id]);
    //             }
    //             echo "Vous avez bien enregistrer les donnees";
    //             break;
    //     case "show":
    //         $id=$_GET['id'];
    //         $article = findByIdTable("article", $id);
    //         $article_json=json_encode($article, true); //on le transforme en json 
    //         //$designation=$article["designation"];
    //         echo $article_json; //envoi de message vers ajax->javascript
    //         break;
    //     case "search":
    //         $mot = $_POST['mot'];
    //         $connexion=connexion();
    //         $sql = "SELECT * FROM article where numArticle like ? or designation like ?";
    //         $requete=$connexion->prepare($sql);
    //         $requete->execute(["%$mot%","%$mot%"]);
    //         $article=$requete->fetchAll();
    //         $ligne="";
    //         $nbre=count($article);
    //         $ligne="";
    //         foreach($article as $valeur){
    //             $id=$valeur['id'];
    //             $numArticle=$valeur['numArticle'];
    //             $designation=$valeur['designation'];
    //             $prixUnitaire=$valeur['prixUnitaire'];
    //             $actions="<a href='javascript:afficher($id)' class='btn_action bg_navy'>Afficher</a> 
    //             <a href='javascript:modifier($id)' class='btn_action bg_blue'> Modifier</a> 
    //             <a href='javascript:supprimer($id)' class='btn_action bg_red'>Supprimer</a>";
    //             $ligne.="
    //                 <tr class='h2em'>
    //                     <td class='border center'><img class='zoom' src='img/bb0001.png' width='20%' alt='' /></td>
    //                     <td class='border center'>$numArticle</td>
    //                     <td class='border'>$designation</td>
    //                     <td class='border right'>$prixUnitaire</td>
    //                     <td class='border flex_space_between'>$actions</td>
    //                 </tr>
    //             ";
    //         }
    //         echo $ligne;
    //         break;
    //     // -----------------------------------------------

    //     case 'afficher':
    //         $id=$_GET['id'];
    //         $article=findByIdTable('article',$id);
    //         $variables=[
    //             'id'=>$article['id'],
    //             'numArticle'=>$article['numArticle'],
    //             'designation'=>$article['designation'],
    //             'prixUnitaire'=>$article['prixUnitaire'],
    //             'etat'=>'disabled',
                
    //         ];
    //         generatePage($sousPageHtml,$variables);
    //         break;
    //     case 'modifier':
    //         $id=$_GET['id'];
    //         $article=findByIdTable('article',$id);
    //         $variables=[
    //             'id'=>$article['id'],
    //             'numArticle'=>$article['numArticle'],
    //             'designation'=>$article['designation'],
    //             'prixUnitaire'=>$article['prixUnitaire'],
    //             'etat'=>'',
    //         ];
    //         generatePage($sousPageHtml,$variables);
    //         break;
    //     case 'creer':
    //         $variables=[
    //             'id'=>'',
    //             'numArticle'=>'',
    //             'designation'=>'',
    //             'prixUnitaire'=>'',
    //             'etat'=>'',
    //         ];
    //         generatePage($sousPageHtml,$variables);
    //         break;
    //     case 'supprimer':
    //         $id=$_GET['id'];
    //         $test=testDelete($id);
    //         if($test){
    //             deleteByIdTable('article',$id);
    //             $sousPageHtml='page/article/list.html.php';
    //             generatePage($sousPageHtml);
    //         }else{
    //             $sousPageHtml="page/erreur/erreur.html.php";
    //             $variables=[
    //                 'message'=>"<h2 class='text-red'>Impossible de supprimer cet article</h2>",
    //             ];
    //             generatePage($sousPageHtml,$variables);

    //         }
    //         break;
        default:
            $collaborateur=listTable('collaborateur');
            $nbre=count($collaborateur);
            $ligne="";
            foreach($collaborateur as $valeur){
                $id=$valeur['id'];
                $code=$valeur['code_collaborateur'];
                $nom=$valeur['nom'];
                $prenom=$valeur['prenom'];
                $adresse=$valeur['rue'];
                $mobile=$valeur['portable'];
                $actions="
                <a href='javascript:modifier($id)' class='btn_action bg_blue'>Modifier</a> 
                <a href='javascript:afficher($id)' class='btn_action bg_navy'>Afficher</a> 
                <a href='javascript:supprimer($id)' class='btn_action bg_red'>Supprimer</a>";
                $ligne.="
                    <tr class='h2em'>
                        <td class='border center'>$code</td>
                        <td class='border'>$nom $prenom</td>
                        <td class='border right'>$adresse</td>
                        <td class='border center'>$mobile</td>
                        <td class='border flex_space_between'>$actions</td>
                     </tr>
                ";
            }
            $sousPageHtml="page/collaborateur/listCollaborateur.php";
            $variables=[
                'rows'=>$ligne,
                'nbre'=>$nbre,
        
            ];
            generatePage($sousPageHtml,$variables);
            break;
            }




//-------------------------------------Mes Fonctions-------------------------------------
    // function testDelete($id){
    //     $connexion=connexion();
    //     $sql="select * from ligneCommande where article_id=?";
    //     $requete=$connexion->prepare($sql);
    //     $requete->execute([$id]);
    //     $resultat=$requete->fetch();
    //     if($resultat){
    //         return false;
    //     }else{
    //         return true;
    //     }
    // }



?>