<?php
require_once('header-private.php');

if(isset($_POST['submit'])) {
    // récupérer les valeurs sélectionnées dans les listes déroulantes
    $id_entree = $_POST['id_entree'];
    $id_plat = $_POST['id_plat'];
    $id_dessert = $_POST['id_dessert'];
  
    // exécuter la requête SQL pour mettre à jour la table "configurations"
    $sql = "UPDATE configurations SET id_entree = :id_entree, id_plat = :id_plat, id_dessert = :id_dessert";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_entree' => $id_entree, 'id_plat' => $id_plat, 'id_dessert' => $id_dessert]);
}

$configuration = $pdo->query('SELECT * FROM configurations')->fetch();
$entrees = $pdo->query('SELECT * FROM entree')->fetchAll();
?>

    <div class="container">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="id_entree" class="form-label">Entrée</label>
                <select name="id_entree" id="id_entree" class="form-select">
                    <?php foreach($entrees as $entree): ?>
                        <option value="<?= $entree['id_entree'] ?>"
                            <?php if($configuration['id_entree'] === $entree['id_entree']) {
                                echo 'selected';
                            } ?>
                        >
                            <?= $entree['nomentree'] ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>

            <?php
            $plats = $pdo->query('SELECT * FROM plat')->fetchAll(); // faut que je l'ai passe en prepare
            ?>

            <div class="mb-3">
                <label for="id_plat" class="form-label">Plat</label>
                <select name="id_plat" id="id_plat" class="form-select">
                    <?php foreach($plats as $plat): ?>
                        <option value="<?= $plat['id_plat'] ?>"
                            <?php if($configuration['id_plat'] === $plat['id_plat']) {
                                echo 'selected';
                            } ?>
                        >
                            <?= $plat['nomplat'] ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>

            <?php
            $desserts = $pdo->query('SELECT * FROM dessert')->fetchAll();
            ?>

            <div class="mb-3">
                <label for="id_dessert" class="form-label">Dessert</label>
                <select name="id_dessert" id="id_dessert" class="form-select">
                    <?php foreach($desserts as $dessert): ?>
                        <option value="<?= $dessert['id_dessert'] ?>"
                            <?php if($configuration['id_dessert'] === $dessert['id_dessert']) {
                                echo 'selected';
                            } ?>
                        >
                            <?= $dessert['nomdessert'] ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>

            <input type="submit" name="submit" value="Enregistrer"  class="btn btn-primary">
        </form>
    </div>
</body>
</html>

<?php require_once('footer2.php'); ?>
