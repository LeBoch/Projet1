<?php
require_once('header-private.php');

if(isset($_POST['envoi'])) {
    if (!empty($_POST['nomplat'])) {
        $valeurs= [
            'nomplat'=> htmlspecialchars($_POST['nomplat'])
        ];

        $AjoutPlat = $pdo->prepare("INSERT INTO plat(nomplat) VALUES (:nomplat)");
        $succes = $AjoutPlat->execute($valeurs);
        if ($succes) {
            echo "Plat Ajouté";
        } else {
            echo "Il y a eu une erreur";
        }

    } else {   
        echo "Complétez tous les champs";
    }
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nom du plat</label>
        <input type="text" class="form-control" id="formGroupExampleInput"   value="" name="nomplat">
    </div>
    
    <button type="submit" class="btn btn-primary"  value="" name="envoi">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-plus" viewBox="0 0 16 16">
            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
        </svg>
       Envoyer 
    </button>


    <a class="btn btn-primary" href="ListeMenus.php" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
        </svg>
        Retour en Arrière
    </a>
</form>

<?php require_once('footer.php'); ?>