<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Lien bootstrap -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <!-- Lien fontawesome -->
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <!-- lien script bootstrap -->
    <script src="./bootstrap/js/bootstrap.bundle.js" defer></script>
    <style>
        #aside-left, #section-bs{
            min-height: 70vh;
        }
        #section-bs{
            overflow: auto;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    
    <div class="container-fluide">
        <nav class="navbar navbar-expand-md bg-dark text-light ">
            <a href="" class="btn"><i class="fa fa-laptop fa-2x text-light"></i></a>
            <a href="#nav" class="btn bg-light navbar-toggler mx-2" data-bs-toggle="collapse">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Pour espacer les deux ements de chaque cote -->
            <div class="collapse navbar-collapse justify-content-between" id="nav">
                <ul class="navbar-nav px-2">
                    <!-- //li.nav-item>a.nav-link*5 -->
                    <li class="nav-item"><a href="" class="nav-link text-light fw-bold text-uppercase">Accueil</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-light fw-bold text-uppercase">Article</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-light fw-bold text-uppercase">Client</a></li>
                    <!-- ajout dropdown pour au'soit placer en dessous -->
                    <!-- dropdown-toggle permet d'ajouter la petite fleche -->
                    <li class="nav-item dropdown"><a href=""
                            class="nav-link text-light fw-bold text-uppercase dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close='outside'>Commande</a>
                        <!-- Creation du sous menu -->
                        <ul class="dropdown-menu ">
                            <li class="nav-item"><a href="" class="nav-link text-primary">Devis</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-primary">Facture</a></li>
                            <li class="nav-item dropend"><a href="" class="nav-link text-primary dropdown-toggle"
                                    data-bs-toggle="dropdown">Livraison</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">Domicile</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Magasin</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item"><a href="" class="nav-link text-light fw-bold text-uppercase">Parametre</a>
                    </li>
                </ul>
                <!-- <p>lorem*5</p> pour avoir du texte  automatique-->
                <form action="">
                    <div class="input-group">
                        <input type="text" name="" class="form-control mx-2" placeholder="Search">
                        <a href="" class="btn bg-light"><i class="fa fa-search"></i></a>
                        <a href="" class="mx-2 dropdown-toggle text-light" data-bs-toggle="dropdown"><i class="fa fa-bell text-light fa-2x"></i><sup class="text-light">(5)</sup></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">Message - 01</li>
                            <li class="nav-item">Message - 02</li>
                            <li class="nav-item">Message - 03</li>
                            <li class="nav-item">Message - 04</li>
                            <li class="nav-item">Message - 05</li>
                            <li class="nav-item">Message - 06</li>
                        </ul>
                        <a href="" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown"><i class="fa fa-user"></i>Giz</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Compte</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Changement mot de passe</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Deconnexion</a></li>
                        </ul>   
                    </div>
                </form>
            </div>
        </nav>







        <div class="row">
            <div id="aside-left" class="col-md-3 bg_green">

            </div>
            <div id="section-bs" class="col-md-9 bg_blue">
                <div class="row">
                    <div class="col-sm-10 col-md-4 col-lg-2">
                        <img src="./img/femme2.jpg" alt="" class="img-fluid">
                        <h5 class="text-warning">Femme 2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero adipisci in optio distinctio officia eligendi eaque odio, debitis quam voluptas deserunt dolorem labore quis tempore, voluptates, necessitatibus commodi rerum.</p>
                    </div>
                    <div class="col-sm-10 col-md-4 col-lg-2">
                        <img src="./img/femme2.jpg" alt="" class="img-fluid">
                        <h5 class="text-warning">Femme 2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero adipisci in optio distinctio officia eligendi eaque odio, debitis quam voluptas deserunt dolorem labore quis tempore, voluptates, necessitatibus commodi rerum.</p>
                    </div>
                    <div class="col-sm-10 col-md-4 col-lg-2">
                        <img src="./img/femme2.jpg" alt="" class="img-fluid">
                        <h5 class="text-warning">Femme 2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero adipisci in optio distinctio officia eligendi eaque odio, debitis quam voluptas deserunt dolorem labore quis tempore, voluptates, necessitatibus commodi rerum.</p>
                    </div>
                    <div class="col-sm-10 col-md-4 col-lg-2">
                        <img src="./img/femme2.jpg" alt="" class="img-fluid">
                        <h5 class="text-warning">Femme 2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero adipisci in optio distinctio officia eligendi eaque odio, debitis quam voluptas deserunt dolorem labore quis tempore, voluptates, necessitatibus commodi rerum.</p>
                    </div>
                    <div class="col-sm-10 col-md-4 col-lg-2">
                        <img src="./img/femme2.jpg" alt="" class="img-fluid">
                        <h5 class="text-warning">Femme 2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero adipisci in optio distinctio officia eligendi eaque odio, debitis quam voluptas deserunt dolorem labore quis tempore, voluptates, necessitatibus commodi rerum.</p>
                    </div>
                    <div class="col-sm-10 col-md-4 col-lg-2">
                        <img src="./img/femme2.jpg" alt="" class="img-fluid">
                        <h5 class="text-warning">Femme 2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero adipisci in optio distinctio officia eligendi eaque odio, debitis quam voluptas deserunt dolorem labore quis tempore, voluptates, necessitatibus commodi rerum.</p>
                    </div>
                    <div class="col-sm-10 col-md-4 col-lg-2">
                        <img src="./img/femme2.jpg" alt="" class="img-fluid">
                        <h5 class="text-warning">Femme 2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero adipisci in optio distinctio officia eligendi eaque odio, debitis quam voluptas deserunt dolorem labore quis tempore, voluptates, necessitatibus commodi rerum.</p>
                    </div>
                </div>
            </div>
        </div>







        <!-- footer -->
        <footer class="">
        <div class="row bg-dark justify-content-center py-4">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <h5 class="text-info text-uppercase">Nos produits</h5>
                <p class="text-light text-uppercase"><i class="fa fa-fish me-1"></i>Poisson</p>
                <p class="text-light text-uppercase"><i class="fa-solid fa-shrimp me-1"></i>Jus Tomate</p>
                <p class="text-light text-uppercase"><i class="fa fa-pills me-1"></i>Bonbon bleu</p>
                <p class="text-light text-uppercase"><i class="fa fa-pills me-1"></i>Bonbon rose</p>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <h5 class="text-info text-uppercase">Qui sommes nous?</h5>
                <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At molestiae impedit inventore et? Aperiam ipsa animi dolores perferendis est eum voluptatem, optio dolorem eligendi dicta nostrum. Ad laboriosam doloribus voluptatem?</p>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <h5 class="text-info text-uppercase">Contacts</h5>
                <ul>
                    <li class="text-light"><i class="fa fa-home me-1"></i>Canapi</li>
                    <li class="text-light"><i class="fa fa-envelope me-1"></i>dwwm@stage-pole-emploi.fr</li>
                    <li class="text-light"><i class="fa fa-phone me-1"></i>8 52 22</li>
                    <li class="text-light"><i class="fa fa-print me-1"></i>PoleEmploi-NextGen</li>
                </ul>
            </div>
        </div>
        <div class="row bg-dark justify-content-center align-items-center">
            <div class="col-md-4">
                <a href="" class="btn"><i class="fa fab fa-facebook text-light fa-2x"></i></a>
                <a href="" class="btn"><i class="fa fab fa-twitter text-light fa-2x"></i></a>
                <a href="" class="btn"><i class="fa fab fa-instagram text-light fa-2x"></i></a>
                <a href="" class="btn"><i class="fa fab fa-linkedin text-light fa-2x"></i></a>
            </div>
        </div>
        </footer>
    </div>

</body>

</html>