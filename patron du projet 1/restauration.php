<?php
require_once('pdo.php');
require_once('header2.php');
?>

<?php
$sql = "SELECT * FROM configurations
INNER JOIN dessert
on configurations.id_dessert = dessert.id_dessert
INNER JOIN entree
on configurations.id_entree = entree.id_entree
INNER JOIN plat
on configurations.id_plat = plat.id_plat";
$stmt = $pdo->query($sql);
$menu = $stmt->fetch();

?>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4">   
        <div class="card-body">
          <h2 class="card-title">Entrée</h2>
          <p class="card-text"><?= $menu['nomentree']; ?></p>
          <p class="card-text"><small class="text-muted">"L'entrée, c'est un peu comme le prologue d'un livre, il doit donner envie de continuer." <cite title="Source Title">Joël Robuchon.</cite></small></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">   
        <div class="card-body">
          <h2 class="card-title">Plat principal</h2>
          <p class="card-text"><?= $menu['nomplat']; ?></p>
          <p class="card-text"><small class="text-muted">"La cuisine est l'art de transformer instantanément en joie des produits chargés d'histoire." <cite title="Source Title">Alain Ducasse.</cite></small></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Dessert</h2>
          <p class="card-text"><?= $menu['nomdessert']; ?></p>
          <p class="card-text"><small class="text-muted">"Le dessert est probablement le moment le plus important du repas, car il montre que vous vous souciez assez de vos invités pour leur donner quelque chose qu'ils aiment vraiment." <cite title="Source Title">Mary Berry.</cite></small></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
require_once('footer.php');
?>
