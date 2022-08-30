<?php
$title = "Accueil";
if (!isset($_SESSION["user"])) {
    header("Location: connexion.php");
    die("Vous n'etes pas connectée");
}
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
include "config/database.php";
include 'functions/affichage_enseignant.php'


?>

<div class="row mt-5">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold"><?= $_SESSION["user"]["Nom"] ?></h3>
        <p> Derniere connexion:<?= $_SESSION["user"]["derniere_connexion"] ?></p>
    </div>
    <div class="col-sm-6">
        <div class="d-flex align-items-center justify-content-md-end">
            <div class="mb-3 mb-xl-0 pr-1">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2 "></i><span class="">7 Derniers Jours</span></a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="#" class="dropdown-item ">Mois Dernier</a>
                        <a href="#" class="dropdown-item ">Trimestre Dernier</a>
                        <a href="#" class="dropdown-item ">Progression Annuelle</a>
                    </div>
                </div>
            </div>
            <div class="pr-1 mb-3 mr-2 mb-xl-0">
                <button type="button" class="btn btn-warning bg-white btn-icon-text border">Exporter</button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>Info</button>
            </div>
        </div>
    </div>
</div>
<div class="container" ?>
    <div class=" d-flex justify-content-around flex-wrap">
        <div class="card col-md-6" style="border:none">
            <div class="card-body ">
                <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title mb-3"></h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>
                                Nom
                            </th>
                            <th>
                                Progress
                            </th>
                            <th>
                                Deadline
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = $db->prepare('SELECT * FROM enseignant');
                            $result = $sql->execute();
                            $enseignants = $sql->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($enseignants as $enseignant) {
                                enseig($enseignant['Nom'], "à jour");
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card col-md-6 ml-3" style="border:none">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title mb-3"></h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>
                                Nom
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Deadline
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = $db->prepare('SELECT * FROM enseignant');
                            $result = $sql->execute();
                            $enseignants = $sql->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($enseignants as $enseignant) {
                                enseig($enseignant['Nom'], " Pas à jour");
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-around flex-wrap">
    <div class="card col-md-5 mt-3 " style="border:none">
        <div class="d-flex flex-wrap justify-content-between ">
            <h4 class="card-title mb-1"> Tle D </h4>
            <a href="stats_cours.php#tled" class="mb-1">Voir Tout </a>
        </div>
        <div class="mt-3">
            <label for="">Mathematiques</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">SVT</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Informatique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Physique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
    </div>
    <div class="card col-md-5 mt-3 " style="border:none">
        <div class="d-flex flex-wrap justify-content-between ">
            <h4 class="card-title mb-1"> Tle C </h4>
            <a href="stats_cours.php#tlec" class="mb-1">Voir Tout </a>
        </div>
        <div class="mt-3">
            <label for="">Mathematiques</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">SVT</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Informatique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Physique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "partials/_footer.php"; ?>