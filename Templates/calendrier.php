<section class="container py-5 pb-5">
<?php
$date = date('Y-m-d');
 if ($appartement['id_appart'] != $_SESSION['id_user']) {
    echo '<button type="button" class="alert alert-success" role="alert">Vous n\'avez de réservation sur cette appartement</button> ';
  } else {
    echo '<button type="button" class="alert alert-danger" role="alert">Vous avez déjà une réservation sur cette appartement</button>';
  }
echo'
    <div>
        <p class="text-break fst-italic" style="font-size:0.8rem;">Pour supprimer une sélection de date, cliqué sur l\'évenement créé puis confirmer la suppréssion.</p>
    </div>
    <div class= "d-flex mt-3">
      <input type="hidden" id="event-index" class="form-control w-25 me-1" value=""  >
      <input type="date" id="dateStart" disabled class="form-control w-25 me-1" value="' . $date . '"  >
      <input type="date" id="dateEnd" disabled class="form-control w-25 ms-1" value=""><button type="button" id="choisir" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="btn btn-success ms-2">Contact propriétaire</button>   
    </div>
    <div class="mt-4">
    <div id="calendar">
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">';
      require_once('Templates/formulaire.php');
      echo ' </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Retour</button>
          </div>
        </div>
      </div>
    </div>';

    ?>
</section>

