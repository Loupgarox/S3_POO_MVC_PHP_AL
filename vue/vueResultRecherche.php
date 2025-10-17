<div class="container">
    <br/>
    <h1 class = "text-center">Résultat de la recherche</h1>
    <br/><br/>
    <div class="row">
        <div class="col-md-8 mx-auto text-center">

        <?php
            switch($critere)
            {
                case 'numero':
                    if(isset($unObjet) && $unObjet != null){                
                ?>
                        <table class="table">
                             <thead>
                                <tr>
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Type objet</th>
                                    <th scope="col">Photo</th>                                 
                                    <th scope="col">Détails</th>                
                               </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope='row'><?= $unObjet->getNumero() ?></td>
                                <td><?= $unObjet->getNomCommun() ?></td>
                                <td><?= $unObjet->getTypeObjet()->getLibelle() ?></td>
                                <td><img src='photos/<?= $unObjet->getNumero() ?>p.jpg' alt='photo'></td>                        
                                <td><a class='nav-link' href='./?action=detail&numero=<?= $unObjet->getNumero() ?>'><img src='images/rechercher.png' alt='Afficher le détail'></a></td>
                            </tr>
                        </tbody>
                        </table>
                <?php
                    } 
                    else{
                        echo "<br/><h2>Objet non référencé !</h2>";
                    }
                    break;
                    
                case 'constellation':
                        
                    if(isset($lesObjets) && $lesObjets != null){                
                ?>
                        <table class="table">
                             <thead>
                                <tr>
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Type objet</th>
                                    <th scope="col">Photo</th>                                 
                                    <th scope="col">Détails</th>                
                               </tr>
                            </thead>
                            <tbody>
                        <?php
                            foreach($lesObjets as $unObjet)
                            {
                        ?>                                 
                            <tr>
                                <td scope='row'><?= $unObjet->getNumero() ?></td>
                                <td><?= $unObjet->getNomCommun() ?></td>
                                <td><?= $unObjet->getTypeObjet()->getLibelle() ?></td>
                                <td><img src='photos/<?= $unObjet->getNumero() ?>p.jpg' alt='photo'></td>                        
                                <td><a class='nav-link' href='./?action=detail&numero=<?= $unObjet->getNumero() ?>'><img src='images/rechercher.png' alt='Afficher le détail'></a></td>
                            </tr>
                        <?php
                            }
                        ?>                             
                            </tbody>
                        </table>
                <?php
                    } 
                    else{
                        echo "<br/><h2>Aucun objet pour cette constellation</h2>";
                    }
                    break;   
            }
            ?>

        </div>
    </div>
</div>