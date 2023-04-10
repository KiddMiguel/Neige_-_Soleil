
<?php
if (isset($_POST["update_locataire"])) {
  $unController->updateLocataire($_POST);
  $success = "sauvegardé avec success";
} else {

}
if (isset($_POST["update_proprio"])) {
  $unController->updateProprietaire($_POST);
  header("location: index.php?page=home");
} else {
}
if (isset($_POST["modif_prorioMdp"])) {
  $actuel_mdp = $_SESSION['mdp_proprio'];
  $old_mdp = $_POST['old_mdp'];
  $new_mdp = $_POST['new_mdp'];
  $error = "";
  $errorOldMpd = "";
  $errorIdentique = "";
  if ($old_mdp == $actuel_mdp) {
    $mdp = ($_POST['mdp_proprio']);
    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $mdp)) {
      if ($new_mdp == $mdp) {
        $unController->updateProprietaireEmailMdp($_POST);
        header("location: index.php?page=deconnexion");
      } else {
        $errorIdentique = "Echec de la confirmation du mot de passe !";
      }
    } else {
      $error .= "Critères mot de passe invalide ! ";
    }
  } else {
    $errorOldMpd = "Mot de passe précédent incorrect !";
  }
} elseif (isset($_POST["modif_locataireMdp"])) {
  $actuel_mdp = $_SESSION['mdp_locataire'];
  $old_mdp = $_POST['old_mdp'];
  $new_mdp = $_POST['new_mdp'];
  $error = "";
  $errorOldMpd = "";
  $errorIdentique = "";
  if ($old_mdp == $actuel_mdp) {
    $mdp = ($_POST['mdp_locataire']);
    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $mdp)) {
      if ($new_mdp == $mdp) {
        $unController->updateLocataireEmailMdp($_POST);
        header("location: index.php?page=deconnexion");
      } else {
        $errorIdentique = "Echec de la confirmation du mot de passe !";
      }
    } else {
      $error .= "Critères mot de passe invalide ! ";
    }
  } else {
    $errorOldMpd = "Mot de passe précédent incorrect !";
  }
}
