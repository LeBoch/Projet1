<?php
require_once('header2.php');

if (isset($_SESSION['id'])) {
  header('Location: prive.php');
}
if(isset($_POST['envoi'])){
    if(!empty($_POST['email'])AND !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        $recupUser=$pdo->prepare('SELECT * FROM utilisateurs where email = ? and password = ?');
        $recupUser->execute(array($email, $password));
         
        if($recupUser->rowCount()>0){
            $recupUser = $recupUser->fetch(PDO::FETCH_ASSOC);
            $_SESSION['email']= $recupUser['email'];
            $_SESSION['id'] = $recupUser['id'];
            $_SESSION['pseudo'] = $recupUser['pseudo'];
            header('Location: prive.php');



        }else{
            echo "Mot de passe ou email incorrect";
        }
       

    }else{
        echo "Compléter tous les champs";
    }
}
?>
<div style="display: flex; flex-direction: column; justify-content: center ">
    <div class="col-md-6 mx-auto mt-3">
      <form method="POST">
        <img src="img/logo.png" class="img-fluid" alt="Image" mx-auto>
          <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="mb-3 ">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <button type="submit" class="btn btn-primary " name="envoi">Envoyer</button>
      </form>
    </div>
</div>

            
          
       
<?php 
require_once('footer.php');
?>