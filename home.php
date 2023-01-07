<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Integration du css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <header class="container-fluid position-absolute">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="sectionOne position-relative">
        <div class="overlay position-absolute top-0 w-100">
            <div class="mt-custom container-fluid ms-5 ps-5 text-light">
                <h1 class="sizing-menu">Appartements de<br> Particuliers</h1>
                <h4>Séjour chaleureux au coeur des montagnes</h4>

                <div class="row container bg-white mt-5">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12  pb-2 pt-3">
                        <input type="search" class="w-100 border border-light p-2" name="" id="" placeholder="Indiquez une addresse, un lieu...">
                    </div>
                    <div class="d-flex justify-content-between pb-3">
                        <input class="pe-5 w-100 border border-light p-3" type="number" name="" id="" placeholder="Budget € max">
                        <input class="pe-5 ms-3 w-100 border border-light p-3" type="number" name="" id="" placeholder="Surface m² min">
                        <input class=" ms-3 w-100 bg-custom border border-light p-3" type="submit" name="" id="" value="Rechercher">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="sectionTwo container">
        <h2 class="text-center py-5">Nos logements à la une</h2>
        <div class=" row align-items-start gy-5">
            <div class="card col p-0 me-3" style="width: 18rem;">
                <img src="images/image.png" class="card-img-top" alt="...">
                <div class="card-body d-flex">
                    <div class="p-3">
                        <button class="btn-log border border-white rounded-circle "><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                    <div class="ps-3">
                        <a class="card-text text-decoration-none fw-semibold" href=""><span class="text-secondary">PARIS(75017)</span><br> <span class="text-primary ">1 300.2</span>€ - <span>53.0</span> m²<br><span class="text-black">2pièces . Meublé . Rez-de-chaussée</span> </a>
                    </div>
                </div>
            </div>
            <div class="card col p-0 me-3" style="width: 18rem;">
                <img src="images/image.png" class="card-img-top" alt="...">
                <div class="card-body d-flex">
                    <div class="p-3">
                        <button class="btn-log border border-white rounded-circle "><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                    <div class="ps-3">
                        <a class="card-text text-decoration-none fw-semibold" href=""><span class="text-secondary">PARIS(75017)</span><br> <span class="text-primary ">1 300.2</span>€ - <span>53.0</span> m²<br><span class="text-black">2pièces . Meublé . Rez-de-chaussée</span> </a>
                    </div>
                </div>
            </div>
            <div class="card col p-0 me-3" style="width: 18rem;">
                <img src="images/image.png" class="card-img-top" alt="...">
                <div class="card-body d-flex">
                    <div class="p-3">
                        <button class="btn-log border border-white rounded-circle "><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                    <div class="ps-3">
                        <a class="card-text text-decoration-none fw-semibold" href=""><span class="text-secondary">PARIS(75017)</span><br> <span class="text-primary ">1 300.2</span>€ - <span>53.0</span> m²<br><span class="text-black">2pièces . Meublé . Rez-de-chaussée</span> </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>