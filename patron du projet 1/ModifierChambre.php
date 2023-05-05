<?php
require_once('header-private.php');


if(isset($_POST['envoi'])) {
    if(!empty($_POST['Type']) AND !empty($_POST['Capacite']) AND !empty($_POST['Prix'])AND !empty($_POST['Vue'])
    AND !empty($_POST['Commodites'])AND !empty($_POST['Etage']) AND !empty($_POST['Numero'])
    AND !empty($_POST['Description']) AND !empty($_POST['Etat'])AND !empty($_POST['Nom'])){
        
        $valeurs = [
            'id' => (int)$_GET['id'],
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
        ];

        $UdapteChambre = $pdo->prepare("
        UPDATE chambre 
        SET Type = :Type ,
            Capacite = :Capacite,
            Prix = :Prix,
            Vue = :Vue,
            Commodites = :Commodites,
            Etage = :Etage,
            Numero = :Numero,
            Disponibilite = :Disponibilite,
            Etat = :Etat ,
            Description = :Description,
            Nom = :Nom
        WHERE id = :id
        ");

        $succes = $UdapteChambre->execute($valeurs);
        if ($succes) {
            echo "Enregistrement éffectué";
        } else {
            echo "Une erreur s'est produit lors de l'enregistrement en base de donnéee.";
        }
    } else {
        echo "Compléter tous les champs";
    }
}



$sql = "SELECT * FROM chambre where id = :id";
$stmt = $pdo->prepare($sql);
$stmt_exec = $stmt->execute(['id' => $_GET['id']]);
$chambre = $stmt->fetch(PDO::FETCH_ASSOC);

?>
  
      <h4>Voici la chambre <?= $chambre['Nom'] ?> </h4>
 






      <form action="" method="post">   
      
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Type</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?= formValue('Type', $chambre['Type']) ?>" placeholder="Example input placeholder" name="Type">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Capacite</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= formValue('Capacite', $chambre['Capacite']) ?>" placeholder="Another input placeholder" name="Capacite">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Prix</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= formValue('Prix', $chambre['Prix']) ?>" placeholder="Another input placeholder" name="Prix">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Vue</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= formValue('Vue', $chambre['Vue']) ?>" placeholder="Another input placeholder" name="Vue">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Commodites</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= formValue('Commodites', $chambre['Commodites']) ?>" placeholder="Another input placeholder" name="Commodites">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Etage</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= formValue('Etage', $chambre['Etage']) ?>" placeholder="Another input placeholder" name="Etage">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Numero</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $chambre['Numero'] ?>" placeholder="Another input placeholder" name="Numero">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Disponibilité</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $chambre['Disponibilite'] ?>" placeholder="Another input placeholder" name="Disponibilite">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Description</label>
        <textarea class="form-control" id="formGroupExampleInput2"placeholder="Another input placeholder" name="Description"><?= $chambre['Description'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Etat</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $chambre['Etat'] ?>" placeholder="Another input placeholder" name="Etat">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nom</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $chambre['Nom'] ?>" placeholder="Another input placeholder" name="Nom">
    </div>
    <img src="<?= $chambre['Image'] ?>" />
    <button type="submit" class="btn btn-primary" name="envoi">Envoyer</button>

    <a class="btn btn-primary"
          title="Détails Chambres N° <?= $enregistrement['ID'].', '. $enregistrement['Nom'] .', '. $enregistrement['Prix']?>"
          href="prive.php" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
        </svg>
          Annuler
        </a>


    </form>


<?php 
require_once('footer.php'); ?>