<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="./css/styles.css">
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
    <div class="container-fluid">
        <!-- TODO: résoudre ce problème de blanc sur les côté de la navbar -->
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-md bg-dark text-light ">
                <!-- Permet d'insérer le logo laptop -->
            <a href="#" class="btn">
                <i class="fa fa-laptop fa-2x text-light"></i>
            </a>
            <a href="#nav" class="btn bg-light navbar-toggler mx-2" data-bs-toggle="collapse">
                <i class="fa fa-bars"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-between" id="nav">
                <ul class="navbar-nav px-2">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light fw-bold text-uppercase">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="collaborateur_ajax.php" class="nav-link text-light fw-bold text-uppercase">Collaborateur</a>
                    </li>
                </ul> 
                <!-- TODO espace les deux blocs en laissant un vide entre les deux -->
                <div class="input-group">
                    <a href="" class="mx-2 dropdown-toggle text-light" data-bs-toggle="dropdown">
                        <i class="fa fa-bell text-light fa-2x"></i>
                        <sup class="text-light">(5)</sup>
                    </a>
                        <!-- TODO: ajout de la fonction rechercher -->
                    <input onkeydown="touch(event)" type="text" id="mot"name="mot" class="form-control mx-2" placeholder="Search">
                    <a href="javascript:chercher()" class="btn bg-light">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown">
                        <i class="fa fa-user mr-3"></i>Se Connecter
                    </a>
                </div>
            </div>
        </nav>

        
            
        <div id="section-bs" class="">
            <?=$content?>
        </div>
        <!-- </div> -->
        <!-- TODO: aligner au centre le texte -->
        <footer id="footer" class="fixed-bottom bg-dark">
            <p class="text-light ">Copyright &copy; DWWM 2023</p>
        </footer>
    </div>

</body>

</html>