
<!-- ACCES A LA MODAL -->
<button  id="displayModal" class="" onclick="">
    <a id="show_modal_art" class="" href="#modal_art">modal</a>
</button> 


<!-- AFFICHAGE DES DEUX BOUTONS -->
<div class="d-flex  mb-4 text-white" id="main">
    <!-- sera fonction creer et pas create -->
    <button class="btn btn-md btn-primary" onclick="createNewCollaborateur()">Créer</button>
    <!-- <button class="btn btn-md btn-success" onclick="window.print()">Imprimer</button> -->
</div>
    <table  class="">
        <thead class="bg-primary text-white" id="tableauHeader">
            <tr class=>
                <th class='border text-center text-uppercase w-20'>Code</th>
                <th class='border text-center text-uppercase'>Nom et prenom</th>
                <th class='border text-center text-uppercase'>Adresse</th>
                <th class="border text-center text-uppercase">Mobile</th>
                <th class='border text-center text-uppercase'>ACTIONS</th>
            </tr>
        </thead>
        <tbody id="tbody_article">
            <?=$rows?>
        </tbody>
        <tfoot class="bg-primary text-white text-center">
            <tr class='h2em'>
                <th colspan="5" class='w100 border center'> Nombre Collaborateurs: <?=$nbre?> </th>
            </tr>      
        </tfoot>
</div>
<!-- new -->


<!-- <div class="d-flex justify-content-around mb-4"> -->
    <!-- <button class="btn btn-md btn-primary" onclick="creer()">Ajouter article</button> -->
    <!-- <button class="btn btn-md btn-success" onclick="window.print()">Imprimer</button> -->
<!-- </div> -->

<!-- CREATION DU MODAL -->

<div id="modal_art">
    <div id="modal_art_content">
        <h1 class="titre text-center text-uppercase">Saisie Collaborateur</h1>
        <a id="modal_close" href="#">&times</a>
        <div action="" id="formulaireDouble">
            <div class="leftInput">
                <div class="topInput">
                    <div class="inputText">
                        <!-- TODO: modifier pour passer en option -->
                        <label for="civilite">Civilité <span class="red">*</span>
                            <select name="civilite" id="civilite" class="form-control" require>
                                <option value="madame">Madame</option>
                                <option value="monsieur">Monsieur</option>
                            </select>
                        </label>
                        <br>
                        <label for="nom" class="lab20">Nom <span class="red">*</span>
                            <input type="text" id="name" name="name" class="form-control" require>
                        </label>
                        <br>
                        <label for="prenom">Prénom <span class="red">*</span>
                            <input type="text" id="name" name="prenom" class="form-control" require>
                        </label>
                    </div>
                    <div class="choixImg">
                        <!-- TODO: ajouter image + input file -->
                        <div class="carreImg">
                            <img src="ressource/img/imgProfil.png" alt="imageProfil" id="imgProfil">
                        </div>
                        <button id="sendImg">Choisir un fichier</button>
                    </div>
                </div>
                <!-- TODO: ajout bottom input -->
                <div class="bottomInput">
                <label for="dateNaissance">Date naissance <span class="red">*</span>
                    <input type="date" id="dateNaissance" name="dateNaissance" class="form-control" require>
                </label>
                <br>
                <label for="lieuNaissance">Lieu naissance <span class="red">*</span>
                    <input type="text" id="lieuNaissance" name="lieuNaissance" class="form-control" require>
                </label>
                <br>
                <label for="numSecu">Numéro sécu <span class="red">*</span>
                    <input type="text" id="codenumSecu" name="numSecu" class="form-control" require>
                </label>
                <br>
                <label for="mailPro">Mail pro 
                    <input type="mail" id="mailPro" name="mailPro" class="form-control">
                </label>
                <br>
                <label for="mailPerso">Mail perso
                    <input type="mail" id="mailPerso" name="mailPerso" class="form-control">
                </label>
                <br>
                <label for="telPortable">Mobile <span class="red">*</span>
                    <input type="tel" id="telPortable" name="telPortable" class="form-control" require>
                </label>
                <br>
                <label for="telFixe">Téléphone fixe
                    <input type="tel" id="telFixe" name="telFixe" class="form-control">
                </label>
                <br>
                </div>
                
            </div>
            <div class="rightInput">
                <h2>Adresse</h2>
                <label for="rue">Rue <span class="red">*</span>
                    <input type="text" id="rue" name="rue" class="form-control" require>
                </label>
                <br>
                <label for="complement">Complément
                    <input type="text" id="complement" name="complement" class="form-control">
                </label>
                <br>
                <label for="codePostal">Code Postal <span class="red">*</span>
                    <input type="text" id="codePostal" name="codePostal" class="form-control" require>
                </label>
                <br>
                <label for="ville">Ville <span class="red">*</span>
                    <input type="text" id="ville" name="ville" class="form-control" require>
                </label>
                <br>
                <label for="departement">Département <span class="red">*</span>
                    <input type="text" id="departement" name="departement" class="form-control" require>
                </label>
                <br>
                <label for="region">Région <span class="red">*</span>
                    <input type="text" id="region" name="region" class="form-control" require>
                </label>
                <br>
                <label for="pays">Pays <span class="red">*</span>
                    <input type="text" id="pays" name="pays" class="form-control" require>
                </label>
                <br>
                <label for="nationnalite">Nationnalité <span class="red">*</span>
                    <input type="text" id="nationnalite" name="nationnalite" placeholder="Française" class="form-control" require>
                </label>
                <br>
                <label for="typeCollaborateur">Type Collaborateur <span class="red">*</span>
                    <select name="typeCollaborateur" id="typeCollaborateur" class="form-control" require>
                        <option value="cdd">CDD</option>
                        <option value="cdi">CDI</option>
                        <option value="independant">Indépendant</option>
                        <option value="stagiaire">Stagiaire</option>
                    </select>
                </label>
            </div>
            
        </div>
        <div class="list_btn my-4 d-flex justify-content-evenly">
                <button id="btn_cancel" class="btn btn-md btn-primary" onclick="alertCancel()">Annuler</button>
                <button id="btn_delete"class="btn btn-md btn-danger" onclick="alertSupr()">Supprimer</button>
                <button id="btn_save" class="btn btn-md btn-success" onclick="alertSave()">Enregistrer</button>
            </div> 
    </div>
</div>









<script> 
    function alertCancel(){
        confirm('Vous souhaitez annuler');
    }
    function alertSupr(){
        confirm('Vous souhaitez supprimer');
    }
    function alertSave(){
        confirm('Vous souhaitez enregistrer');
    }

    function createNewCollaborateur(){
        code_collaborateur.value = "";
        civilite.value = "";
        nom.value = "";
        prenom.value = "";
        date_naissance.value = "";
        ville_naissance.value = "";
        num_secu.value = "";
        mail_pro.value = "";
        portable.value = "";
        tel_fixe.value = "";
        rue.value = "";
        complement.value = "";
        code_postal.value = "";
        ville.value = "";
        departement.value = "";
        region.value = "";
        pays.value = "";
        nationalite = "";
        type_collaborateur = "";
        show_modal_art.click();
    }

    // function enregistrer(){
    //     debutAttente();
    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "article_ajax.php?action=save");
    //     let data = new FormData();
    //     data.append('id', parseInt(id.value));
    //     data.append('numArticle', numArticle.value);
    //     data.append('designation', designation.value);
    //     data.append('prixUnitaire', prixUnitaire.value);
    //     xhr.send(data);
    //     xhr.onload=function(){
    //         setTimeout("finAttente", 2000);
    //         let response = xhr.responseText;
    //         modal_close.click(); //marche pas
    //         chercher();
    //         alert(response);
    //     }
    // }

    // function debutAttente(){
    //     let loader = document.getElementById('loader');
    //     loader.setAttribute('style', 'visibility:visible');
    // }
    // function finAttente(){
    //     let loader = document.getElementById('loader');
    //     loader.setAttribute('style', 'visibility:hidden'); 
    // }
    // function modifier(article_id){
    //     afficher(article_id)
    // }
    function afficher(collaborateur_id, etat=0){
        //debutAttente();
        //alert("Vous allez modifier l'article dont l'id = " + article_id);
         let xhr = new XMLHttpRequest(); //creation un nouvel objet XMLHttpRequest et l'affecter a la variable xhr
         xhr.open("POST", "collaborateur_ajax.php?action=show&id="+collaborateur_id); //syntaxe open('methode d'emvoi','l'adresse url pour le traitement vers php)
         //on indique la methode, le chemin, l'action
         xhr.send(); //envoie l'objet xhr vers php
        xhr.onload=function(){
            let response=xhr.responseText;//accuse de reception est contenu dans 'responseText'
            let responses=JSON.parse(response);
            id.value=responses.id;
            code_collaborateur.value=responses.code_collaborateur;
            civilite.value=responses.civilite;
            nom.value=responses.nom;
            prenom.value=response.prenom;
            date_naissance.value=response.date_naissance;
            ville_naissance.value=response.ville_naissance;
            num_secu.value=response.num_secu;
            mail_pro.value=response.mail_pro;
            portable.value=response.portable;
            tel_fixe.value=reponse.tel_fixe;
            rue.value=response.rue;
            complement.value=reponse.complement;
            code_postal.value=response.code_postal;
            ville.value=reponse.ville;
            departement.value=reponse.departement;
            region.value=response.region;
            pays.value=response.pays;
            nationalite.value=response.nationalite;
            type_collaborateur.value=response.type_collaborateur;
            show_modal_art.click();
            if(etat == 0){
                id.disabled = true;
                code_collaborateur.disabled = true
                civilite.disabled = true;
                nom.disabled = true;
                prenom.disabled = true;
                date_naissance.disabled = true;
                ville_naissance.disabled = true;
                num_secu.disabled = true;
                mail_pro.disabled = true;
                portable.disabled = true;
                tel_fixe.disabled = true;
                rue.disabled = true;
                complement.disabled = true;
                code_postal.disabled = true;
                ville.disabled = true;
                departement.disabled = true;
                region.disabled = true;
                pays.disabled = true;
                nationalite.disabled = true;
                type_collaborateur.disabled = true;                
            }else{
                id.disabled =false;
                code_collaborateur.disabled =false;
                civilite.disabled =false;
                nom.disabled =false;
                prenom.disabled =false;
                date_naissance.disabled = false;
                ville_naissance.disabled = false;
                num_secu.disabled = false;
                mail_pro.disabled = false;
                portable.disabled = false;
                tel_fixe.disabled = false;
                rue.disabled = false;
                complement.disabled = false;
                code_postal.disabled = false;
                ville.disabled = false;
                departement.disabled = false;
                region.disabled = false;
                pays.disabled = false;
                nationalite.disabled = false;
                type_collaborateur.disabled = false;
            }
            // setTimeout("finAttente()", 1500);
            //alert(responses.id+ ' - '+responses.numArticle+ ' - '+responses.designation);
            //console.log(responses);
              //affiche dans un pop up du message
        }
    }

    function chercher(){
        //alert(mot.value); //on recupere la valeur indiquer dans le input search
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "collaborateur_ajax.php?action=search");
        let data=new FormData(); //creation d'un objet pour contenir des donnee
        data.append("mot", mot.value); 
        xhr.send(data);
        xhr.onload=function(){
            let response = xhr.responseText;
            tbody_article.innerHTML=response;
            mot.value="";
        }
    }

    function touch(event){
         if(event.keyCode == 13){
             chercher();
    
        }
    }

    // -------------------------------------------------------------------------------------------------------------------------------------------------------------
      // FUNCTION SUPPRIMER
    // TODO: attention c'est juste copier du cour
    // Premiere methode
    // function supprimer(id){
    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "article-ajax.php?action=delete&id"=+id);
    //     xhr.send();
    //     xhr.onload = function(){
    //         let response = shr.responseText;
    //         alert(response);
    //     }
    // }

</script>

