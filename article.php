<?php
include 'entete.php';
?>
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action="../model/ajoutArticle.php" method="post">
                 <label for="nom_article">Nom de l'article</label>
                 <input type="text" name="nom_article" id="nom_article" placeholder="veuillez saisire le nom">

                 <label for="categorie">Catégorie</label>
                 <select name="categori" id="categorie">
                    <option value="Ordinateur">Ordinateur</option>
                    <option value="Imprimante">Imrimante</option>
                    <option value="Accessoire">Accessoire</option>
                 </select>

                 <label for="quantite">Quantité</label>
                 <input type="number" name="nom_article" id="nom_article" placeholder="veuillez saisire la quantité">

                 <label for="prix_unitaire">Prix unitaire</label>
                 <input type="number" name="nom_article" id="nom_article" placeholder="veuillez saisire le prix">

                 <label for="date_fabrication">Date de fabrication</label>
                 <input type="datetime-local" name="date_fabrication" id="date_fabrication" >

                 <label for="date_expiration">Date d'expiration</label>
                 <input type="datetime-local" name="date_expiration" id="date_expiration" >

                 <button type="submit">Valider</button>

                 <?php
                 if (!empty($_SESSION['message']['text'])) {
                ?>
                     <div class="alert <?=$_SESSION['message']['type']?>">
                         <?=$_SESSION['message']['text']?>
                     </div>
                 <?php    
                 }
                 ?>
            </form>  
        </div>
    </div class= "box">
         <table class="mtable">
            <tr>
                <th>Nom article </th>
                <th>Catégorie </th>
                <th>Qantité </th>
                <th>Prix unitaire </th>
                <th>date fabrication </th>
                <th>date expiration </th>
            </tr>
            <?php
               $articles = getArticle();

               if (!empty($articles) && is_array($articles)) {
                 foreach ($articles as $key => $value) {
                    ?>
                    <tr>
                        <td><?=$value['nom_article']?></td>
                        <td><?=$value['categorie']?></td>
                        <td><?=$value['quantite']?></td>
                        <td><?=$value['prix_unitaire']?></td>
                        <td><?=$value['date_fabrication']?></td>
                        <td><?=$value['date_expiration']?></td>
                    </tr>
                    <?php
                 }
               }
               
                ?>
         </table>


      </div>
    </div>

</div>
 </section>



    <?php
include 'pied.php';

?>


