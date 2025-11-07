<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- Lien vers l'URL Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
             <a class="navbar-brand" href="./?action=accueil">Accueil</a>
             
             <img src="images/catalogue.jpg" alt="Le catalogue Messier">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample01">
              <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                  <a class="nav-link" href="./?action=liste&page=1">Liste des objets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./?action=recherche&critere=numero">Recherche par numéro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=recherche&critere=constellation">Recherche par constellation</a>
                <li class="nav-item">
                  <a class="nav-link" href="./?action=Apropos">A propos</a>
                </li>                
                
              </ul>
              
            </div>
          </nav>
    
        <div class="container-fluid">