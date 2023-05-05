<?php
require_once('header2.php');

$sql = "SELECT * FROM chambre where id = :id";
$stmt = $pdo->prepare($sql);
$stmt_exec = $stmt->execute(['id' => $_GET['id']]);
$chambre = $stmt->fetch(PDO::FETCH_ASSOC);
?>
  <div class="container ">
  <div class="row">
    <div class="col-md-5 p-4  ">
      <img src="<?= $chambre['Image'] ?>" />
      <div class="img-fluid max-width: 100%;" alt="Image de la chambre">
    </div>
    <div class="col-md-5 p-4">
      <h3><?= $chambre['Nom'] ?></h3>
      <p><strong>Type :</strong> <?= $chambre['Type'] ?></p>
      <p><strong>Capacité :</strong> <?= $chambre['Capacite'] ?> personnes</p>
      <p><strong>Prix :</strong> <?= $chambre['Prix'] ?> € par nuit</p>
      <p><strong>Vue :</strong> <?= $chambre['Vue'] ?></p>
      <p><strong>Commodités :</strong> <?= $chambre['Commodites'] ?></p>
      <p><strong>Etage :</strong> <?= $chambre['Etage'] ?></p>
      <p><strong>Disponibilité :</strong> <?= $chambre['Disponibilite'] ?></p>
      <p><strong>Description :</strong></p>
      <p><?= nl2br($chambre['Description']) ?></p> <!-- n12br converti les retours a la ligne qui est effecuté dans TextArea -->
      <p><strong>Etat :</strong> <?= $chambre['Etat'] ?></p>
    </div>
  </div>
</div>

<?php 
require_once('footer.php'); ?>



