
<!-- ACCES A LA MODAL -->
<button  class="" onclick="">
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
TODO: création des input de la modal
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
                            <select name="civilite" id="civilite" class="form-control">
                                <option value="madame">Madame</option>
                                <option value="monsieur">Monsieur</option>
                            </select>
                        </label>
                        <br>
                        <label for="nom" class="lab20">Nom <span class="red">*</span>
                            <input type="text" id="name" name="name" class="form-control">
                        </label>
                        <br>
                        <label for="prenom">Prénom <span class="red">*</span>
                            <input type="text" id="name" name="prenom" class="form-control">
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
                <label for="dateNaissance">Date naissance <span class="red">*</span>
                    <input type="date" id="dateNaissance" name="dateNaissance" class="form-control">
                </label>
                <br>
                <label for="lieuNaissance">Lieu naissance <span class="red">*</span>
                    <input type="text" id="lieuNaissance" name="lieuNaissance" class="form-control">
                </label>
                <br>
                <label for="numSecu">Numéro sécu <span class="red">*</span>
                    <input type="text" id="codenumSecu" name="numSecu" class="form-control">
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
                    <input type="tel" id="telPortable" name="telPortable" class="form-control">
                </label>
                <br>
                <label for="telFixe">Téléphone fixe
                    <input type="tel" id="telFixe" name="telFixe" class="form-control">
                </label>
                <br>
            </div>
            <div class="rightInput">
                <h2>Adresse</h2>
                <label for="rue">Rue <span class="red">*</span>
                    <input type="text" id="rue" name="rue" class="form-control">
                </label>
                <br>
                <label for="complement">Complément
                    <input type="text" id="complement" name="complement" class="form-control">
                </label>
                <br>
                <label for="codePostal">Code Postal <span class="red">*</span>
                    <input type="text" id="codePostal" name="codePostal" class="form-control">
                </label>
                <br>
                <label for="ville">Ville <span class="red">*</span>
                    <input type="text" id="ville" name="ville" class="form-control">
                </label>
                <br>
                <label for="departement">Département <span class="red">*</span>
                    <input type="text" id="departement" name="departement" class="form-control">
                </label>
                <br>
                <label for="region">Région <span class="red">*</span>
                    <input type="text" id="region" name="region" class="form-control">
                </label>
                <br>
                <label for="pays">Pays <span class="red">*</span>
                    <input type="text" id="pays" name="pays" class="form-control">
                </label>
                <br>
                <label for="nationnalite">Nationnalité <span class="red">*</span>
                    <input type="text" id="nationnalite" name="nationnalite" placeholder="Française" class="form-control">
                </label>
                <br>
                <label for="typeCollaborateur">Type Collaborateur <span class="red">*</span>
                    <select name="typeCollaborateur" id="typeCollaborateur" class="form-control">
                        <option value="cdd">CDD</option>
                        <option value="cdi">CDI</option>
                        <option value="independant">Indépendant</option>
                        <option value="stagiaire">Stagiaire</option>
                    </select>
                </label>
            </div>
            
        </div>
        <div class="list_btn my-4 d-flex justify-content-evenly">
                <button id="btn_cancel" class="btn btn-md btn-primary" onclick="">Annuler</button>
                <button id="btn_delete"class="btn btn-md btn-danger" onclick="">Supprimer</button>
                <button id="btn_save" class="btn btn-md btn-success" onclick="enregistrer()">Enregistrer</button>
            </div> 
    </div>
</div>
<script> 
    function createNewCollaborateur(){
        id.value = 0;
        numArticle.value = "";
        designation.value = "";
        prixUnitaire.value = "";
        show_modal_art.click();
    }
    function enregistrer(){
        debutAttente();
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "article_ajax.php?action=save");
        let data = new FormData();
        data.append('id', parseInt(id.value));
        data.append('numArticle', numArticle.value);
        data.append('designation', designation.value);
        data.append('prixUnitaire', prixUnitaire.value);
        xhr.send(data);
        xhr.onload=function(){
            setTimeout("finAttente", 2000);
            let response = xhr.responseText;
            modal_close.click(); //marche pas
            chercher();
            alert(response);
        }
    }

    function debutAttente(){
        let loader = document.getElementById('loader');
        loader.setAttribute('style', 'visibility:visible');
    }
    function finAttente(){
        let loader = document.getElementById('loader');
        loader.setAttribute('style', 'visibility:hidden'); 
    }
    function modifier(article_id){
        afficher(article_id)
    }
    function afficher(article_id, etat=0){
        debutAttente();
        //alert("Vous allez modifier l'article dont l'id = " + article_id);
         let xhr = new XMLHttpRequest(); //creation un nouvel objet XMLHttpRequest et l'affecter a la variable xhr
         xhr.open("POST", "article_ajax.php?action=show&id="+article_id); //syntaxe open('methode d'emvoi','l'adresse url pour le traitement vers php)
         //on indique la methode, le chemin, l'action
         xhr.send(); //envoie l'objet xhr vers php
        xhr.onload=function(){
            let response=xhr.responseText;//accuse de reception est contenu dans 'responseText'
            let responses=JSON.parse(response);
            id.value=responses.id;
            numArticle.value=responses.numArticle;
            designation.value=responses.designation;
            prixUnitaire.value=responses.prixUnitaire
            show_modal_art.click();
            if(etat == 0){
                id.disabled = true;
                numArticle.disabled = true
                designation.disabled = true;
                prixUnitaire.disabled = true;
                
            }else{
                id.disabled = false;
                numArticle.disabled = false;
                designation.disabled = false;
                prixUnitaire.disabled = false;
            }
            setTimeout("finAttente()", 1500);
            //alert(responses.id+ ' - '+responses.numArticle+ ' - '+responses.designation);
            //console.log(responses);
              //affiche dans un pop up du message
        }
    }

    function chercher(){
        //alert(mot.value); //on recupere la valeur indiquer dans le input search
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "article_ajax.php?action=search");
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
    cxcmsnnbCCXCC
</script>

