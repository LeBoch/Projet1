<?php
require_once('header-private.php');


if(isset($_POST['envoi'])) {
    if(!empty($_POST['Type']) AND !empty($_POST['Capacite']) AND !empty($_POST['Prix'])AND !empty($_POST['Vue'])
    AND !empty($_POST['Commodites'])AND !empty($_POST['Etage']) AND !empty($_POST['Numero'])
    AND !empty($_POST['Description']) AND !empty($_POST['Etat'])AND !empty($_POST['Nom'])){
        $uploaddir = __DIR__;
        $resteDuChemin = 'uploads/' . basename($_FILES['Image']['name']);
        $cheminComplet = $uploaddir . '/' . $resteDuChemin;
        $_POST['Image']=$cheminComplet;
        
          
         

        move_uploaded_file($_FILES['Image']['tmp_name'], $cheminComplet);

        $valeurs = [
            
            'Type' => htmlspecialchars($_POST['Type']),
            'Capacite' => (int)$_POST['Capacite'],
            'Prix' => (float)$_POST['Prix'],
            'Vue' => htmlspecialchars($_POST['Vue']),
            'Commodites' => htmlspecialchars($_POST['Commodites']),
            'Etage' => (int)$_POST ['Etage'],
            'Numero' => (int)$_POST['Numero'],
            'Disponibilite' => (bool)$_POST['Disponibilite'],
            'Etat' => htmlspecialchars($_POST['Etat']),
            'Description' => htmlspecialchars($_POST['Description']),
            'Nom' => htmlspecialchars($_POST['Nom']),
            'Image' => $resteDuChemin
        ];

        $AjoutChambre = $pdo->prepare("
        INSERT INTO chambre (Type,Capacite,Prix,Vue,Commodites,Etage,Numero,Disponibilite,Etat,Description,Nom,Image)
        VALUES (
        :Type, :Capacite, :Prix ,:Vue , :Commodites, :Etage, :Numero, :Disponibilite, :Etat,:Description, :Nom, :Image)
 
     
        ");

        $succes = $AjoutChambre->execute($valeurs);
        if ($succes) {
            echo "Chambres ajouter";
        } else {
            echo "Une erreur s'est produit lors de l'enregistrement en base de donnéee.";
        }
    } else {
        echo "Compléter tous les champs";
    }
}

?>
  
      






      <form enctype="multipart/form-data" action="" method="post">   
      
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Type</label>
        <input type="text" class="form-control" id="formGroupExampleInput"   value="<?= formValue('Type') ?>" name="Type">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Capacite</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"   value="" name="Capacite">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Prix</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"   value="" name="Prix">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Vue</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"   value="" name="Vue">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Commodites</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"    value="" name="Commodites">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Etage</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"    value="" name="Etage">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Numero</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"    value="" name="Numero">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Disponibilité</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"    value="" name="Disponibilite">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Description</label>
        <textarea class="form-control" id="formGroupExampleInput2" value="" name="Description"></textarea>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Etat</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"    value="" name="Etat">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nom</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"    value="" name="Nom">
    </div>


    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Image</label>
        <input type="file" accept="image/png, image/jpeg" class="form-control" id="formGroupExampleInput2"    value="" name="Image">
    </div>



    <button type="submit" class="btn btn-primary"  value="" name="envoi">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-plus" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
</svg>
       Envoyer 
    </button>

    
    <a class="btn btn-primary"
href="prive.php" role="button">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>
        </svg>
        </td>    Retour en Arrière
        </a>

    </form>


<?php 
require_once('footer.php'); ?>