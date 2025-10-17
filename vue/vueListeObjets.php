<div class="container">
    <br/>
    <h1 class = "text-center">Liste des objets de Messier</h1>
    <br/><br/>
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
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
                    for ($i = $debut; $i < $fin; $i++) 
                    {
                ?>     
                        <tr>
                            <td scope='row'><?= $listeObjets[$i]->getNumero() ?></td>
                            <td><?= $listeObjets[$i]->getNomCommun() ?></td>
                            <td><?= $listeObjets[$i]->getTypeObjet()->getLibelle() ?></td>
                            <td><img src='photos/<?= $listeObjets[$i]->getNumero() ?>p.jpg' alt='photo'></td>                                
                            <td><a class='nav-link' href='./?action=detail&numero=<?= $listeObjets[$i]->getNumero() ?>'><img src='images/rechercher.png' alt='Afficher le détail'></a></td>
                        </tr>
                <?php
                    } 
                ?>
                </tbody>
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <?php
                        if($precedente){
                            echo  "<li class='page-item'>";
                        }
                        else{
                            echo  "<li class='page-item disabled'>";
                        }
                    ?>
                    <a class="page-link" href="./?action=liste&page=<?= $p1 - 1 ?>">Précédente</a></li>
                  <li class="page-item"><a class="page-link" href="./?action=liste&page=<?= $p1 ?>"><?= $p1 ?></a></li>
                <?php
                    if($p2 <= 19)
                    {
                ?>
                        <li class="page-item"><a class="page-link" href="./?action=liste&page=<?= $p2 ?>"><?= $p2 ?></a></li>
                <?php
                    }
                  
                    if($p3 <= 19)
                    {
                ?>
                        <li class="page-item"><a class="page-link" href="./?action=liste&page=<?= $p3 ?>"><?= $p3 ?></a></li>
                <?php
                    } 
                    
                    if($suivante){
                        echo  "<li class='page-item'>";
                    }
                    else{
                        echo  "<li class='page-item disabled'>";
                    }
                ?>

                    <a class="page-link" href="./?action=liste&page=<?= $p3 + 1 ?>">Suivante</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>