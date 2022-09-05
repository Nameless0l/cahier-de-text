<?php
$title = "Classes";
if (!isset($_SESSION["user"])) {
    header("Location: connexion.php");
    die("Vous n'etes pas connectée");
}

include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
?>

<div>
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="partials/apps-calendar.php"><button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span><i class="fa fa-book mr-2"></i> Cahier de texte</span></button></a>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-chart-line me-2"></i>Statistiques Evaluations</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Commentaires</button>
                </li>
            </ul>

        </div>
    </div>
</div>
<div>

</div>

<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/metismenu/metisMenu.min.js"></script>
<script src="assets/lib/simplebar/simplebar.min.js"></script>
<script src="assets/lib/node-waves/waves.min.js"></script>
<script src="assets/lib/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="assets/lib/pace-js/pace.min.js"></script>

<script src="assets/lib/%40fullcalendar/core/main.min.js"></script>
<script src="assets/lib/%40fullcalendar/bootstrap/main.min.js"></script>
<script src="assets/lib/%40fullcalendar/daygrid/main.min.js"></script>
<script src="assets/lib/%40fullcalendar/timegrid/main.min.js"></script>
<script src="assets/lib/%40fullcalendar/interaction/main.min.js"></script>

<!-- Calendar init -->
<script src="assets/js/calendar.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>



<?php include "partials/_footer.php" ?>