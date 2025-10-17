<h1 class = "text-center"><?= $unObjet->getNumero(). " - ".$unObjet->getNomCommun(); ?></h1>
<br/>

<p id="principal" style="text-align: center">
    <img src="photos/<?= $unObjet->getNumero()?>.jpg" alt="photo de l'objet"  />
    <br />
    <br /> 
    <h2>
        <?= "Constellation : ". $unObjet->getConstellation(); ?> <br />
        <?= "Type d'objet : ". $unObjet->getTypeObjet()->getLibelle(); ?> <br />
        <?= "Période de visibilité : ". $unObjet->getPeriodeVisibilite(); ?> <br />
        <?= "Magnitude : ". $unObjet->getMagnitude(); ?> <br />
        <?= "Diamètre apparent : ". $unObjet->getDiametreApparent(); ?> <br />
    </h2>
</p>