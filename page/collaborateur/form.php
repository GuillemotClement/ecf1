<!-- <h1 class="titre text-white">SAISIE ARTICLE</h1>
<a href="" class="text-white modal_close">&times</a>
<a href="article.php?action=creer" class="btn gb-green">Créer</a>
<table class="">
    <tr>
        <td class="w20 text-1_25em">ID</td>
        <td><input type="text" class="form-input w20 text-navy" value="<?=$id?>" disabled></td>
    </tr>
    <tr>
        <td class="w20 text-1_25em obligatoire">CODE</td>
        <td><input type="text" class="form-input w20" value="<?=$numArticle?>"  <?=$etat?>   ></td>
    </tr>
    <tr>
        <td class="w20 text-1_25em obligatoire" >DESIGNATION</td>
        <td><input type="text" class="form-input w80" value="<?=$designation?>"   <?=$etat?>  ></td>
    </tr>
    <tr>
        <td class="w20 text-1_25em">PU</td>
        <td><input type="text" class="form-input w20 right" value="<?=$prixUnitaire?>"   <?=$etat?>  ></td>
    </tr>
</table>
<div id="div_btn_article" class="flex_space_between border-top-2">
    <a href="article.php" class="btn bg_green">Retour à la liste</a>
    <a href="" class="btn bg_blue">Annuler</a>
    <a href="" class="btn bg_red"  <?=$etat?>  >Supprimer</a>
     <input type="submit" class="btn bg_green" <?=$etat?>  value="Valider" >
</div> -->