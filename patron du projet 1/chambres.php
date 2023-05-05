<?php
require_once('header2.php');
?>


<figure class="text-center">
  <blockquote class="blockquote text-align-center">
    <p>Les différentes chambres</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Chambres nettoyés , décorés aux <cite title="Source Title">Grand Larzac</cite>
  </figcaption>
</figure>


<?php
$sql = "SELECT * FROM chambre";
$stmt = $pdo->query($sql);
$enregistrements = $stmt->fetchAll();
$id_chambres = [];
?>

<table class="table  table-hover">
  <thead>
    <tr>
      <th>Numéro Chambres</th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Plus de Détails</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($enregistrements as $enregistrement): ?>
    <tr>
      <td>
        <?= $enregistrement['Numero']; ?>
      </td>
      <td>
        <?= $enregistrement['Nom']; ?>
      </td>
      <td>
        <?= $enregistrement['Prix']; ?> €
      </td>
      <td>
        <a class="btn btn-primary"
          title="Détails Chambres N° <?= $enregistrement['ID'].', '. $enregistrement['Nom'] .', '. $enregistrement['Prix']?>"
          href="chambresdetails.php?id=<?= $enregistrement['ID'] ?>" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
        </svg>
          Voir plus de détails
        </a>
      </td>


    </tr>
    <?php endforeach; ?>

  </tbody>

</table>

<?php require_once('footer.php');?>