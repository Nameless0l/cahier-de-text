<?php
require 'config/database.php';
// require 'functions/ajout_cours.php';
$elements = matiere_et_heure($_SESSION["user"]["id"]);
?>

<div class="container text-center">
    <div class="row">
        <?php foreach ($elements as $emplopie_de_temps) : ?>

            <div class="card p-2 m-2" style="width: 18rem;">
                <img src="" class="card-img-top" alt=<?php echo $_SESSION["user"]["Nom"]; ?>>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $emplopie_de_temps['nom_classe']   ?></h5>
                    <p class="card-text"><?php echo "Cours de " . $emplopie_de_temps['nom_matiere'] . " en " . $emplopie_de_temps['nom_classe'] . " les " . $emplopie_de_temps['horaire']   ?></p>
                    <?php $num = $emplopie_de_temps['id_classe'];
                    echo '<a href="classes.php?id=' . $num . '" class="btn btn-outline-info ">' . 'Afficher le cahier' . '</a>'; ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>