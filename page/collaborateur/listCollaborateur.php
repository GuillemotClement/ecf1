<!-- <h1 class="titre">LISTE CLIENT</h1> -->
<!-- AFFICHER MODAL -->
<!-- TODO: reparer l'affichage -->
<button  class=""><a id="show_modal_art" class="" href="#modal_art"></a></button> 
<!-- AFFICHAGE DES DEUX BOUTONS -->
<div class="d-flex  mb-4">
    <button class="btn btn-md btn-primary" onclick="create()">Créer</button>
    <!-- <button class="btn btn-md btn-success" onclick="window.print()">Imprimer</button> -->
</div>
<!-- AFFICHAGE DE LA TABLE CLIENT -->

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

<!------------------------AJOUT DU MODAL-----------------------------------------------  -->
<!-- <div id="modal_art">
    <div id="modal_art_content">
        <h1 class="titre text-center text-uppercase">Saisie Client</h1>
        <a id="modal_close" href="#">&times</a>
        <div action="">
            <div class="zone_saisie my-2">

                <label for="id" class="lab20 text-uppercase w-20">ID</label>
                <input type="text" id="id" name="id" value="" class="form-control w-20">
            </div>
            <div class="zone_saisie my-2">
                <label for="numClient" class="lab20 text-uppercase">Num Client</label>
                <input type="text" id="numClient" name="numClient" value="" class="form-control w80">
            </div>
            <div class="zone_saisie my-2">
                <label for="nomClient" class="lab20 text-uppercase">Nom Client</label>
                <input type="text" id="nomClient" name="nomClient" value="" class="form-control w-20">
            </div>
            <div class="zone_saisie my-2">
                <label for="adresseClient" class="lab20 text-uppercase">Adresse Client</label>
                <input type="text" id="adresseClient" name="adresseClient" value="" class="form-control w-20">
            </div>

            <div class="list_btn my-4 d-flex justify-content-evenly">
                <button id="btn_cancel" class="btn btn-md btn-primary" onclick="cancel()">Annuler</button>
                <button id="btn_delete"class="btn btn-md btn-danger" onclick="del()">Supprimer</button>
                <button id="btn_save" class="btn btn-md btn-success" onclick="enregistrer()">Enregistrer</button>
            </div>
            <img id="loader" src="img\loader1.gif" alt="loader">    
        </div>
    </div>
</div> -->

<!-------------------------------------AJOUT DES FONCTIONS--------------->
<script>
    // TODO:fonction afficher marche pas
    // TODO: fonction modifier marche pas
    // TODO: fonction suppression marche pas

    // TODO: fonction cancel se lance bien au click sur bouton annuler
    // function cancel(){
    //     alert("Cancel");
    // }
    // TODO: fonction del se lance bien au lick sur le bouton supprimer
    // function del(){
    //     alert("Supprimer");
    // }
    // function create(){
    //     id.value = 0;
    //     numClient.value = "";
    //     nomClient.value = "";
    //     adresseClient.value = "";
    //     show_modal_art.click();
    // }

    // function enregistrer(){
    //     // debutAttente();
    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "client_ajax.php?action=save");
    //     let data = new FormData();
    //     data.append('id', parseInt(id.value));
    //     data.append('numClient', numClient.value);
    //     data.append('nomClient', nomClient.value);
    //     data.append('adresseClient', adresseClient.value);
    //     xhr.send(data);
    //     xhr.onload=function(){
    //         setTimeout("finAttente", 2000);
    //         let response = xhr.responseText;
    //         modal_close.click(); 
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
    // function modifier(client_id){
    //     afficher(client_id)
    // }
    // function afficher(client_id, etat = 0){
        // debutAttente();
        //alert("Vous allez modifier l'article dont l'id = " + article_id);
         //let xhr = new XMLHttpRequest(); //creation un nouvel objet XMLHttpRequest et l'affecter a la variable xhr
         //xhr.open("POST", "client_ajax.php?action=show&id=" + client_id); //syntaxe open('methode d'emvoi','l'adresse url pour le traitement vers php)
         //on indique la methode, le chemin, l'action
         //xhr.send(); //envoie l'objet xhr vers php
        //xhr.onload=function(){
            //let response=xhr.responseText;//accuse de reception est contenu dans 'responseText'
            // let responses=JSON.parse(response);
            // id.value=responses.id;
            // numClient.value=responses.numClient;
            // nomClient.value=responses.nomClient;
            // adresseClient.value=responses.adresseClient
            // show_modal_art.click();
            // if(etat == 0){
            //     id.disabled = true;
            //     numClient.disabled = true
            //     nomClient.disabled = true;
            //     adresseClient.disabled = true;
                
            // }else{
            //     id.disabled = false;
            //     numClient.disabled = false;
            //     nomClient.disabled = false;
            //     adresseClient.disabled = false;
            // }
            // setTimeout("finAttente()", 1500);
            //alert(responses.id+ ' - '+responses.numArticle+ ' - '+responses.designation);
            //console.log(responses);
              //affiche dans un pop up du message
        }
    }
    // --------------------------FUNCTION BARRE DE RECHERCHE---------------
    // TODO: non fonctionel. Ne s'active pas
    // function chercher(){
    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "client_ajax.php?action=search");
    //     let data = new FormData();
    //     data.append("mot", mot.value);
    //     xhr.send(data);
    //     xhr.onload = function(){
    //         let response = xhr.responseText;
    //         tbody_client.innerHTML=response;
    //         mot.value = "";
    //     }
    // }
    // function touch(event){
    //     if(event.keyCode == 13){
    //         chercher();
    //     }
    // }

  

</script>