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
            position: relative;
        }
        @media screen and (max-width: 750px){
            #aside-left{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark text-light ">
            <a href="" class="btn"><i class="fa fa-laptop fa-2x text-light"></i></a>
            <a href="#nav" class="btn bg-light navbar-toggler mx-2" data-bs-toggle="collapse">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Pour espacer les deux ements de chaque cote -->
            <div class="collapse navbar-collapse justify-content-between" id="nav">
                <ul class="navbar-nav px-2">
                    <!-- //li.nav-item>a.nav-link*5 -->
                    <li class="nav-item"><a href="index.php" class="nav-link text-light fw-bold text-uppercase">Accueil</a></li>
                    <!-- <li class="nav-item"><a href="article.php" class="nav-link text-light fw-bold text-uppercase">Article</a></li> -->
                    <li class="nav-item"><a href="article_ajax.php" class="nav-link text-light fw-bold text-uppercase">Article</a></li>
                    <li class="nav-item"><a href="client_ajax.php" class="nav-link text-light fw-bold text-uppercase">Client</a></li>
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
                <!-- <div action=""> -->
                    <div>
                    <div class="input-group">
                        <input onkeydown="touch(event)" type="text" id="mot"name="mot" class="form-control mx-2" placeholder="Search">
                        <a href="javascript:chercher()" class="btn bg-light"><i class="fa fa-search"></i></a>
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
                    </div>
                    <!-- <form action=""></form> -->
                <!-- </form> -->
            </div>
        </nav>
    </body>