<?php
function formValue(string $nomDuChamp, string $valeurParDefaut = ''): string
{

    if(isset($_POST[$nomDuChamp])) {
        return $_POST[$nomDuChamp];
    }

    return $valeurParDefaut;
}
?>