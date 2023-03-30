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
include 'functions/affichage_enseignant.php';
include 'functions/Update.user.php';
// include 'functions/gestions_envoie_mail/index.php'


?>

<div class="row mt-5">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold"><?= $_SESSION["user"]["Nom"] ?></h3>
        <p> Derniere connexion:<?php 
        echo $_SESSION["user"]["derniere_connexion"] ;
        // print_teacher_of_censor($_SESSION["user"]["id"]);

        ?></p>
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
<?php if($_SESSION["user"]["table"]==='censeur'): ?>
    <?php require 'index.views.censeur.php'; ?>
<?php endif ?>
<?php if($_SESSION["user"]["table"]==='enseignant'): ?>
    <?php require 'index.views.enseignant.php'; ?>
<?php endif ?>
<?php if($_SESSION["user"]["table"]==='parent'): ?>
    <?php require 'index.views.parent.php'; ?>
<?php endif ?>

<script>
    function openForm() {

  if (document.getElementById("myForm").style.display == 'none')

  { document.getElementById("myForm").style.display = 'block'; }

  else

  { document.getElementById("myForm").style.display = 'none'; }

}
const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = `New message to ${recipient}`
  modalBodyInput.value = recipient
})

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
<!-- <script src="https://cdn.jsdelivr.netr/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
<?php include "partials/_footer.php"; ?>