<?php
    require_once("service/function.php");

    $action='list';
    //$sousPageHtml="page/collaborateur/form.php";
    extract($_GET);
    switch($action){
        case "save": //creation nouvel user
            $response_json = json_encode($_POST);
                extract($_POST);
                $connexion = connexion();
                if($id==0){
                    $sql = "INSERT INTO collaborateur (code_collaborateur,civilite,nom,prenom,date_naissance,ville_naissance,num_secu,mail_pro,mail_perso,portable,tel_fixe,rue,complement,code_postal,ville,departement,region,pays,nationalite,type_collaborateur) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $requete = $connexion->prepare($sql);
                    $requete -> execute([$code_collaborateur, $civilite, $nom, $prenom, $date_naissance, $ville_naissance, $num_secu, $mail_pro, $mail_perso,$portable, $tel_fixe, $rue, $complement, $code_postal, $ville, $departement, $region, $pays, $nationalite, $type_collaborateur]);                     
                }else{
                    $sql = "UDAPTE collaborateur SET code_collaborateur=?,civilite=?,nom=?,prenom=?,date_naissance=?,ville_naissance=?,num_secu=?,mail_pro=?,mail_perso=?,portable=?,tel_fixe=?,rue=?,complement=?,code_postal=?,ville=?,departement=?,region=?,pays=?,nationalite=?,type_collaborateur=? WHERE id=?";
                    $requete = $connexion->prepare($sql);
                    $requete -> execute([$code_collaborateur, $civilite, $nom, $prenom, $date_naissance, $ville_naissance, $num_secu, $mail_pro, $mail_perso,$portable, $tel_fixe, $rue, $complement, $code_postal, $ville, $departement, $region, $pays, $nationalite, $type_collaborateur]);
                }
                echo "Vous avez bien enregistrer les donnees";
                break;
        case 'afficher':
            $id=$_GET['id'];
            $collaborateur=findByIdTable('collaborateur',$id);
            $variables=[
                'id'=>$collaborateur['id'],
                'code_collaborateur'=>$collaborateur['code_collaborateur'],
                'civilite'=>$collaborateur['civilite'],
                'nom'=>$collaborateur['nom'],
                'prenom'=>$collaborateur['prenom'],
                'date_naissance'=>$collaborateur['date_naissance'],
                'ville_naissance'=>$collaborateur['ville_naissance'],
                'num_secu'=>$collaborateur['num_secu'],
                'mail_pro'=>$collaborateur['mail_pro'],
                'mail_perso'=>$collaborateur['mail_perso'],
                'portable'=>$collaborateur['portable'],
                'tel_fixe'=>$collaborateur['tel_fixe'],
                'rue'=>$collaborateur['rue'],
                'complement'=>$collaborateur['complement'],
                'code_postal'=>$collaborateur['code_postal'],
                'ville'=>$collaborateur['ville'],
                'departement'=>$collaborateur['departement'],
                'region'=>$collaborateur['region'],
                'pays'=>$collaborateur['pays'],
                'nationalite'=>$collaborateur['nationalite'],
                'type_collaborateur'=>$collaborateur['type_collaborateur'],
                'etat'=>'disabled',              
            ];
            $sousPageHtml="page/collaborateur/listCollaborateur.php";
            generatePage($sousPageHtml,$variables);
            break;
        case "search":
            $mot = $_POST['mot'];
            $connexion=connexion();
            $sql = "SELECT * FROM collaborateur 
                where code_collaborateur like ? 
                or nom like ?
                OR prenom like ?
                OR ville_naissance LIKE ?
                OR num_secu LIKE ?
                OR mail_pro LIKE ?
                OR mail_perso LIKE ?
                OR portable LIKE ?
                OR tel_fixe LIKE ?
                OR rue LIKE ?
                OR complement LIKE ?
                OR code_postal LIKE ?
                OR ville LIKE ?
                OR departement LIKE ?
                OR region LIKE ?
                OR pays LIKE ?
                OR nationalite LIKE ?
                ";
            $requete=$connexion->prepare($sql);
            $requete->execute(array_fill(0, 17, "%$mot%"));
            $collaborateur=$requete->fetchAll();
            $ligne="";
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
                <button id='btnModif'><a href='javascript:modifier($id)' btnModifier>Modifier</a></button> 
                <button id='btnAff'><a href='javascript:afficher($id)'>Afficher</a></button>
                <button id='btnSupr'><a href='javascript:supprimer($id)' class='btn_action bg_red'>Supprimer</a></button>";
                $ligne.="
                    <tr class='h2em'>
                        <td id='tdMerde' class='border text-center' '>$code</td>
                        <td id='tdMerde' class='border text-center'>$nom $prenom</td>
                        <td id='tdMerde' class='border text-center'>$adresse</td>
                        <td id='tdMerde' class='border text-centercenter'>$mobile</td>
                        <td id='tdMerde' class='border flex_space_between'>$actions</td>
                     </tr>
                ";
            }
            echo $ligne;
            break;
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
             <button id='btnModif'><a href='javascript:modifier($id)' btnModifier>Modifier</a></button> 
             <button id='btnAff'><a href='javascript:afficher($id)'>Afficher</a></button>
             <button id='btnSupr'><a href='javascript:supprimer($id)' class='btn_action bg_red'>Supprimer</a></button>";
             
             $ligne.="
                 <tr class='h2em'>
                     <td id='tdMerde' class='border text-center' '>$code</td>
                     <td id='tdMerde' class='border text-center'>$nom $prenom</td>
                     <td id='tdMerde' class='border text-center'>$adresse</td>
                     <td id='tdMerde' class='border text-centercenter'>$mobile</td>
                     <td id='tdMerde' class='border flex_space_between'>$actions</td>
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
    //     // AJAX----------------------------------------
        
    //     case "show":
    //         $id=$_GET['id'];
    //         $article = findByIdTable("article", $id);
    //         $article_json=json_encode($article, true); //on le transforme en json 
    //         //$designation=$article["designation"];
    //         echo $article_json; //envoi de message vers ajax->javascript
    //         break;
        
    //     // -----------------------------------------------


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


    // 
    // 
    // 
?>