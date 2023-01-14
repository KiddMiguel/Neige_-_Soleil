<section class="container">
  <div class="container text-center">
    <div class="row m-auto" style="width:100%;">
      <div class="col-6 ">
        <div class="p-3 "><img src="images/image.png" class="card-img-top" alt="..."></div>
      </div>
      <div class="col-6 row ">
        <?php
        $images = $unController->recupImage();
        foreach ($images as $uneImages) {
          echo ' <div class="col-6 p-3 "><img src="images/' . $unImage['image'] . '.png" class="card-img-top" alt="..."></div>';
          echo ' <div class="col-6 p-3 "><img src="images/' . $unImage['image'] . '" class="card-img-top" alt="..."></div>';
          echo ' <div class="col-6 p-3 "><img src="images/' . $unImage['image'] . '" class="card-img-top" alt="..."></div>';
          echo ' <div class="col-6 p-3 "><img src="images/' . $unImage['image'] . '" class="card-img-top" alt="..."></div>';
        }
        ?>
      </div>

    </div>
  </div>
  <div class="d-flex py-5">
    <div class="pe-5">
      <h2>Loctaion d'un T4 meublé au 86 Rue D'alsace, 92110, Clichy</h2>
      <h4>Les atouts du bien</h4>
      <div class="d-flex">
        <div class="text-center p-3">
          <i class="fa-solid fa-circle-plus fs-1"></i>
          <p>Machine à laver</p>
        </div>
        <div class="text-center p-3">
          <i class="fa-solid fa-circle-plus fs-1"></i>
          <p>Machine à laver</p>
        </div>
        <div class="text-center p-3">
          <i class="fa-solid fa-circle-plus fs-1"></i>
          <p>Machine à laver</p>
        </div>
      </div>
      <hr>
      <h4>Description de l'appartement</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmode
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim dy
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaeag

        commodo consequat. Duis aute irure dolor in reprehenderit in voluptaten
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecatf
        cupidatat non proident, sunt in culpa qui officia deserunt mollit animeaet
        laborum.

        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiy
        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo yin
        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. y
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit auty
        fugit, sed quia consequuntur magni dolores eos qui ratione voluptatemp</p>
      <hr>
      <div class="d-flex">
        <div class="d-flex pe-5">
          <i class="fa-solid fa-user fs-1"></i>
          <p>Présenté par votre expert.e en location N&S<br><span class="fs-5">Deborah</span></p>

        </div>
        <div class="pe-5">
          <i class="fa-solid fa-phone fs-5"></i></i> Deborah
        </div>
      </div>
      <hr>
      <h4>Nos autres logements à proximité</h4>

    </div>
    <div>
      <button><a href="#">Deposer ma candidature</a></button>
      <hr class="y-5">
      <div>
        <ul>
          <li>T3 Meublé</li>
          <li>6 Impasse des 2 Cousins,
            75017, Paris</li>
          <li>2300,0€/mois</li>
          <li>67m2</li>
        </ul>
      </div>
    </div>
  </div>
</section>