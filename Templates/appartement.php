<section class="container section_appart">
  <div class=" text-center">
    <div class="row container-fluid" style="width:80%;">
      <div class="col-5 ">
        <?php
        echo ' <div class=" mt-5"><img src="Images/' . $appartement['image'] . '" class="rounded card-img-top" style="width:100; height:20rem;" id="full" alt="..."></div>
        </div>
        <div class="col-7 ">
          <div class="container text-center">
            <div class="row g-2">';

        foreach ($images as $image) {
          echo ' 
                 <div class="col-4">
                <div class="mt-5"><img src="images/' . $image['nom_img'] . '.' . $image['type_img'] . '" class="rounded card-img-top small" style="width:100; height:8rem;" alt="Appartement"></div>
              </div>';
        }
        ?>
      </div>
    </div>
  </div>

  </div>
  </div>
  <div class="d-flex py-5 container">
    <div class="pe-5 w-75">
      <?php
      $date = date('Y-m-d');
      echo '<h2 class="text-primary fw-lighter">' . $appartement['intitule_appart'] . ' <br> Au ' . $appartement['adresse_appart'] . ', ' . $appartement['cp_appart'] . ', ' . $appartement['ville_appart'] . '</h2>';

      echo '
      <hr>
      <h4 class="mt-5 ps-3 text-primary fw-lighter">Les atouts du bien</h4>
      <div class="d-flex">';
      foreach ($atouts as $atout) {
        echo '   <div class="text-center p-3">
        <i class="fa-solid fa-circle-plus fs-1 text-primary m-2"></i>
        <p>' . $atout['nom_atout'] . '</p>
      </div>';
      }

      echo '
      </div>
      <hr>
      <h4>Description de l\'appartement</h4>
      <p style="height: 25vh; width: 60%; ">' . $appartement['description_appart'] . '</p>
      <hr>
      <div class="d-flex">
        <div class="d-flex pe-5">
          <i class="fa-solid fa-user fs-1 me-3"></i>
          <p>Présenté par votre expert en location<br><span class="fs-5">Neige & Soleil</span></p>
        </div>
        <div class="pe-5">
          <i class="fa-solid fa-phone fs-5"></i></i> 06 50 66 91 75 
        </div>
      </div>
      <hr>
      <h4>Commentaires</h4>

    </div>
  
    <div>';

      if (!isset($_SESSION["email_locataire"]) && !isset($_SESSION["email_proprio"])) {

        echo '<button class="btn btn-warning w-100" data-bs-target="" data-bs-toggle="modal"><a class="text-decoration-none text-black" href="index.php?page=connexion_locataire">Réserver</a></button>';
      } else {
        echo '<a href="index.php?page=calendrier&id_appart=' . $appartement["id_appart"] . '"><button class="btn btn-warning w-100" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Réserver</button></a>';
      }
      $nb_piece = $appartement['nb_salon'] + $appartement['nb_cuisine'] + $appartement['nb_chambre'] + $appartement['nb_salle_bain'];
      echo '<hr class="y-5">
        <div>
          <ul class="list-group">
            <li class="list-group-item bg-warning fw-semibold">' . $appartement['prix_appart'] . ' €/mois</li>
            <li class="list-group-item">' . $appartement['type_appart'] . ' </li>
            <li class="list-group-item">' . $nb_piece . ' Pièce(s)</li>
            <li class="list-group-item">' . $appartement['nb_salon'] . ' Salon(s)</li>
            <li class="list-group-item">' . $appartement['nb_cuisine'] . ' Cuisine(s)</li>
            <li class="list-group-item">' . $appartement['nb_chambre'] . ' Chambre(s)</li>
            <li class="list-group-item">' . $appartement['nb_salle_bain'] . ' Salle de bain(s)</li>
            <li class="list-group-item">' . $appartement['superficie_appart'] . ' m²</li>
          </ul>
        </div>
      </div>';

      ?>
    </div>
</section>