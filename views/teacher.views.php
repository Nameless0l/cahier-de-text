<?php
$title = "Enseignants";
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
include "functions/affichage_enseignant.php";

?>
<?php
if (!empty($_POST)) {
  $error='Veillez remplir tout les champs';
  if (
    isset($_POST["nom"], $_POST["prenom"], $_POST["matricule"])
    && !empty($_POST["nom"]) && !empty($_POST["matricule"]) && !empty($_POST["prenom"])
  ) {
    SendMesg((int)$_SESSION["user"]["id"],(int)$_POST["id"],$_SESSION["user"]["Nom"],$_POST["message"],$_SESSION["user"]["table"]);
   
  } else {
    die('formulaire incomplet');
  }
}
?>
<div class="col-sm-4"><a onclick="openForm()" href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i>Membre</a></div>

<div class="form-popup" id="myForm">
    <div class="container">
        <div class="row">
            <?php
            $sql = $db->prepare('SELECT * FROM enseignant');
            $result = $sql->execute();
            $enseignants = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($enseignants as $enseignant) {
                enseignant($enseignant['Nom'], $enseignant['Statut'], $enseignant['email']);
            }
            ?>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item" onclick="closeForm()"><a class="page-link" href="#">fermer</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
<script>
    
    function openForm() {
        if (document.getElementById("myForm").style.display == 'none')

        {
            document.getElementById("myForm").style.display = 'block';
        } else

        {
            document.getElementById("myForm").style.display = 'none';
        }
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
<?php include "partials/_footer.php" ?>