<br/>
<h1 class="text-center">Recherche d'objets par constellation</h1>
<br/>

<div class="row">
    <div class="col-4 mx-auto text-center">
        <form action="./?action=recherche&critere=<?= $critere ?>" method="POST">

            <?php
                switch ($critere) {
                    case "numero":
            ?>
                        <div class="form-group">
                            <input type="text" class="form-control" name="numeroObj" placeholder="numero" value="<?= $numeroObj ?>" /><br />
                        </div>
            <?php
                        break;
                }
                switch ($critere) {
                    case "constellation":                
            ?>
                        <div class="form-group">
                            <select name="constellation">
                            <?php
                                foreach ($lesConstellations as $uneConstellation)
                                {
                            ?>
                                <option value="<?= $uneConstellation ?>"><?= $uneConstellation ?></option>
                            <?php
                                }
                            ?>                                
                            </select>
                        </div>
            <?php
                        break;
                }
            ?>
            <input type="submit" class="btn btn-success" value="Rechercher" />
            <br/>
        </form>
        <br/><br/>
    </div>
</div>
