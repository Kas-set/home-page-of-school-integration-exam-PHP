<?php
    session_start();
    if (!$_SESSION['isLogin']) {
        if(isset($_SESSION['nom']) && !empty($_SESSION['nom'])){
          $username = $_SESSION['nom'];
        }
      # code...
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-white sticky-top">
        <div class="container px-container">
          <a class="navbar-brand" href="#" style="display: flex; flex-direction:row; gap:5px;">
            <img style="height: 100%; width:63px;"src="./images/logo.jpeg" alt="">
            <span class="fw-bold"" style=" font-size:12px ;display: flex; flex-direction:column; height:60px;">
                <span>Institut</span>
                <span>Africaine</span>
                <span>d'Informatique</span>        
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto  fw-bold ">
                <li class="nav-item <?php if(isset($username)){echo'';}else{echo'd-none';} ?>">
                    <a class="nav-link " href="#" id="postuler "> Postuler au concours
                    </a>
                </li>
              <li class="nav-item <?php if(isset($username)){echo'';}else{echo'd-none';} ?>">
                <a class="nav-link" href="#">
                    Consulter sa Candidature
                </a>
              </li>
              <li class="nav-item dropdown <?php if(isset($username)){echo'';}else{echo'd-none';} ?>">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">                  
                    <!-- <i class="fa-regular fa-user"></i> -->
                    <?php if(isset($username)){echo $username;}else{echo'NOM &PRENOM ';} ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item bg-danger text-white" href="#">Se déconnecter</a></li>
                </ul>
              </li>
              <li class="nav-item <?php if(!isset($username)){echo'';}else{echo'd-none';} ?>">
                <a class="nav-link" href="#">
                    <i class="fa-regular fa-user"></i>

                    Se connecter
                </a>
              </li>
              <li class="nav-item <?php if(!isset($username)){echo'';}else{echo'd-none';} ?>">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-user-plus"></i>

                    Créer un compte 
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <header class="my-0 ">
        <div class="bgImage"></div>
        <div class="content align">
            <h2 class="text-light">Candidature pour l'année <span class="text-primary">2024</span></h2>
            <p class="text-white">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, et, maiores quod dolorum id quasi totam quaerat, fugit blanditiis itaque ipsam odit magni! Error sint magnam nostrum doloribus aliquid provident.
            </p>
            <button class="btn btn-outline-primary text-white fs-2 mt-5">POSTULER AUJOURD'HUI</button>
        </div>
    </header>

    <section class="p-4 py-5 h-auto bgInf ">
        <div class="container py-2  rounded shadow">
            <h3 class="text-center text-decoration-underline">INFORMATIONS RELATIVES AU CONCOURS</h3>
            <div class="container">
                 <!-- tables des des matieres -->
                 <div>
                    <table class="table fs-4">
                    <thead>
                        <tr>
                            <th>MATIERE</th>
                            <th>COEFF</th>
                            <th>DUREE</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>MATH</td>
                        <td>4</td>
                        <td>2H</td>
                    </tr>

                </table>
                </div>

                <table class="table fs-4 mt-4">                    
                    <tr>
                        <td>
                            <th>
                                DATE DU CONCOURS
                            </th>
                        </td>
                        <td>
                            <span>10/06/2024</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <th>
                                LIEU DU CONCOURS
                            </th>
                        </td>
                        <td>
                            <span class="text-center">IAI-TOGO Lomé <span class="ml-4 border rounded shadow h-100 w-100"> <a class="btn btn-outline-black container " href="#"> CLIKER POUR ACCEDER A LA LOCALISATION</a> </span>  </span>                               
                        </td>
                        <td class="">
                            <span>UNIVERSITE DE KARRA<span class="ml-4 border rounded shadow"> <a class="btn btn-outline-black container " href="#"> CLIKER POUR ACCEDER A LA LOCALISATION</a> </span>  </span>                               
                        </td>
                        <td>

                        </td>
                    </tr>
                
                    <tr>
                        <td>
                            <th>HEURE</th>
                        </td>
                        <td>
                            10:45
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="  p-4  px-auto  bg-light  h-auto">
        <div class="container row  section1Container ">
            <div class="col-md-6 mb-4 ">
                <!-- Colonne pour le lien YouTube aligné à gauche -->
                <div class="embed-responsive embed-responsive-16by9 border h-100 shadow ">
                    <iframe class="embed-responsive-item w-100 h-100 rounded shadow" src="https://www.youtube.com/embed/mn83d9pPGR4" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 mb-0">
                <div class="col-lg-6 mb-0">
                    <!-- Colonne pour le paragraphe au-dessus du bouton aligné à droite -->
                    <div class="position-relative ">
                        <p class=" details  fs-4  px-3  border-start border-5 border-success align-items-center ">
                            Ouvert aux étudiants déjà titulaires du BAC, avec un  niveau Bac, le concours d'entrée à l'IAI-TOGO donne accès à des informations d'Informaticiens dans deux filières variées et à des doubles diplômes d'excellence.
                        </p>
                        <button class="btn btn-success p-2 shadow">CANDIDATER AU CONCOURS</button>
                    </div>
                </div>        
            </div>
    </section>
    <section class="section2 h-auto">
        <div class="container mt-5">
            <div class="row">
              <div class="col-md-6">
                <div class="border p-3 mb-3 fs-3 bg-light rounded">
                  <h4 class="text-center py-2 fs-2 border-5 border-success  border-bottom shadow">Pour qui ?</h4>
                  <p class="text-center ">
                    Vous êtes déjà titulaire du Bac, de Série Scientifique ou Industrielle?
                  </p>
                  <p class="text-center">A la recherche d'un centre de formation qui vous mette dans des conditions du terrain?</p>
                  <a class="btn btn-outline-success d-flex justify-content-center fs-3 shadow" href="#postuler">Postuler au concours d'entrée à l'IAI-TOGO</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="border p-3 mb-3 fs-3 bg-light rounded">
                  <h4 class="text-center fs-2 border-5 border-success border-bottom shadow">Encadrement par des Professeurs Expérimentés :</h4>
                  <p class="text-center ">
                    Nos professeurs ne sont pas seulement des éducateurs, ce sont des guides passionnés qui apportent leur expertise et leur expérience du terrain dans chaque salle de classe.
                  </p>
                  <a class="btn btn-outline-success d-flex justify-content-center fs-3 shadow" href="#postuler">Postuler au concours d'entrée à l'IAI-TOGO</a>
                </div>
              </div>
            </div>
            <div class="pt-4 ">
                <h4 class="text-center bg-light text-success py-2 fs-2  shadow-lg diplomeInfoTitre">IAI vous offre des opportunités</h4>

            </div>
            <div class="row p-2">
              <div class="col-md-4 ">
                <div class="border p-3 diplomeInfo rounded">
                  <h4 class="text-center text-success fw-bold ">DIPLOME DE GENIE LOGICIELE ET SYSTEME D'INFORMATIONS</h4>
                </div>
              </div>
              <div class="col-md-4">
                <div class="border p-3  diplomeInfo rounded">
                  <h4 class="text-center  text-success fw-bold">DIPLOME D'ADMINISTRATIONS SYSTEME RESEAUX</h4>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="border p-3  diplomeInfo rounded">
                  <h5 class="text-center  text-success fw-bold">PARCOURS INGENIEURS DE TRAVEAUX INFORMATIQUES ET DE LICENCE PROFESSIONNELLE </h5>
                </div>
              </div>
            </div>
          </div>

    </section>
    <footer class="d-flex align-items-center justify-content-center  pt-5 pb-0 flex-column ">
      <div class="container w-100 row d-flex align-content-center justify-content-center  ">
        <!-- Logo -->
        <div class="col-md-2 ">
          <img class=" h-100 w-100"  src="./images/logo.jpeg" alt="Logo">
        </div>

         <!-- Contact -->
        <div class="col-md-2">
          <h5>Contact</h5>
          <p>Votre adresse</p>
          <p>Votre numéro de téléphone</p>
          <p>Votre adresse e-mail</p>
        </div>

        <!-- À propos -->
        <div class="col-md-2">
          <h5>À propos</h5>
          <p>Quelque chose à propos de votre entreprise</p>
         </div>

          <!-- Liens rapides -->
          <div class="col-md-2">
            <h5>Liens rapides</h5>
            <ul>
              <li><a href="#">Accueil</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Produits</a></li>
            </ul>
        </div>

          <!-- Réseaux sociaux -->
        <div class="col-md-4">
          <h5>Réseaux sociaux</h5>
          <a href="#" target="_blank"><img src="icone_facebook.png" alt="Facebook"></a>
          <a href="#" target="_blank"><img src="icone_twitter.png" alt="Twitter"></a>
          <a href="#" target="_blank"><img src="icone_instagram.png" alt="Instagram"></a>
        </div>

      </div>
      <div class="h-100 w-100  mb-0 h-auto mt-3 d-flex justify-content-center align-items-center"id="lastDiv">
        <h4 class="text-light text-6">Copyright © 2023 GodwinKassa. All rights reserved.</h4>
       </div>
    </footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html> 