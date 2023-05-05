<?php 
require_once('header-private.php');

$sql = "SELECT * FROM configurations
INNER JOIN dessert
on configurations.id_dessert = dessert.id_dessert
INNER JOIN entree
on configurations.id_entree = entree.id_entree
INNER JOIN plat
on configurations.id_plat = plat.id_plat";

$stmt = $pdo->query($sql);
$enregistrements = $stmt->fetchAll();

?>

<figure class="text-center">
  <blockquote class="blockquote text-align-center">
    <p>Voici le menu</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Repas entièrement fait maison aux <cite title="Source Title">Grand Larzac</cite>
  </figcaption>
</figure>

<table class="table  table-hover">
  <thead>
    <tr>
      <th>Nom Entree</th>
      <th>Nom Plat</th>
      <th>Nom Dessert</th>
      <th>Prix Menu</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($enregistrements as $enregistrement): ?>
      <tr>
        <td><?= $enregistrement['nomdessert']; ?></td>
        <td><?= $enregistrement['nomentree']; ?></td>
        <td><?= $enregistrement['nomplat']; ?></td>
        <td><?= $enregistrement['prix']; ?>€</td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-primary" href="ModifierMenu.php" role="button">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1A2.5 2.5 0 0 0 6.5 5h3A2.5 2.5 0 0 0 12 2.5v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z"/>
  </svg>
  Modifier le Menu
</a>
<a class="btn btn-primary" href="AjouterMenu.php" role="button">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg>
  Ajouter un menu
</a>

<?php 
require_once('footer.php');
?>