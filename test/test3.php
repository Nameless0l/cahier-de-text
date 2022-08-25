
<?php
$title = "Enseignants";
include "../functions/affichage_enseignant.php";
include "../partials/_header.php";
include "../partials/_sidebar_censeur.php";
include "../partials/_nav_censeur.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<button  onclick="openForm()"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></button>
<!-- <button class="open-button" onclick="openForm()"><a href="#">Open Form</a> </button> -->

<div class="form-popup" id="myForm">
    <div class="container">
        <div class="row">
                <?php
                    $sql = $db->prepare('SELECT * FROM enseignant');
                    $result = $sql->execute();
                    $enseignants = $sql->fetchAll(PDO::FETCH_ASSOC);
                    foreach($enseignants as $enseignant){
                        enseignant($enseignant['nom'], $enseignant['profession'], $enseignant['email'] );
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
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
