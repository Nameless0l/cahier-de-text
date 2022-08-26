<?php
$title = "Accueil";
if(!isset($_SESSION["user"])){
    header("Location: connexion.php");
    die("Vous n'etes pas connectée");
}
include "partials/_header.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";


?>

<div class="row mt-5">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold"><?= $_SESSION["user"]["Nom"] ?></h3>
        <p> Derniere connexion:<?= $_SESSION["user"]["derniere_connexion"]?></p>
        <!-- <?php require_once 'functions/last.seen.php'; ?> -->
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
        <div class="card col-md-5" style="border:none">
            <div class="card-body " >
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
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>
                                            <div class="font-weight-bold mt-1">volkswagen</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">38% </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">07 Nov 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>
                                            <div class="font-weight-bold  mt-1">Land Rover</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">30% </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">08 Nov 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>

                                            <div class="font-weight-bold  mt-1">Bentley </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">25% </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">11 Jun 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>

                                            <div class="font-weight-bold  mt-1">Morgan </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">15% </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">26 Oct 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>

                                            <div class="font-weight-bold  mt-1">volkswagen</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger mt-1">08% </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">07 Nov 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
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
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>
                                            <div class="font-weight-bold mt-1">volkswagen</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">Cahier de Texte Pas a jour
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">07 Nov 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>
                                            <div class="font-weight-bold  mt-1">Land Rover</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">Cahier de Texte Pas a jour
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">08 Nov 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>
                                            <div class="font-weight-bold  mt-1">Bentley </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">Cahier de Texte Pas a jour
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">11 Jun 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>

                                            <div class="font-weight-bold  mt-1">Morgan </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger  mt-1">Cahier de Texte Pas a jour</div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">26 Oct 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
                                        <div>

                                            <div class="font-weight-bold  mt-1">volkswagen</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-danger mt-1">Cahier de Texte Pas a jour </div>
                                </td>
                                <td>
                                    <div class="font-weight-bold  mt-1">07 Nov 2022</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-secondary">Notifier</button>
                                </td>
                            </tr>
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