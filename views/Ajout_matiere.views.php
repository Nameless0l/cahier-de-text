<?php
require_once 'config/database.php';
require_once 'functions/attribution_matiere.php';

$id_classe = null;
$sql = $db->prepare("SELECT *FROM listeue ");
$result = $sql->execute();
$matieres =  $sql->fetchAll(PDO::FETCH_ASSOC);

$sql1 = $db->prepare("SELECT *FROM enseignant");
$result1 = $sql1->execute();
$enseignants = $sql1->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $db->prepare("SELECT *FROM classes ");
$result2 = $sql2->execute();
$classes = $sql2->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_POST)) {
    $error = 'Veillez remplir tout les champs';
    if (
        isset($_POST["Nom"], $_POST["nom_matiere"], $_POST["nom_classe"])
        && !empty($_POST["Nom"]) && !empty($_POST["nom_matiere"]) && !empty($_POST["nom_classe"])
    ) {
        $id_enseignant =(int) strip_tags($_POST["Nom"]);
        $nom_matiere = strip_tags($_POST["nom_matiere"]);
        $nom_classe = strip_tags($_POST["nom_classe"]);
        $heure = strip_tags($_POST["horaire"]);
        $cycle = strip_tags($_POST['cycle']);
        foreach ($classes as $element) {
            if ($element["nom_classe"] === $nom_classe) {
                $id_classe = (int)$element['id'];
                break;
            }
        }

        attribuer((int)$id_enseignant, $id_classe, $cycle, $nom_matiere, $nom_classe, $heure);
        echo 'REUSSITE DE LA SOIMISSION DES ELEMENTS';
    } else {
        die('formulaire incomplet');
    }
}
?>
<?php
$title = 'Ajout d\'un Enseignant';
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
?>
<div style="margin-top: 3rem ;" class="container mt-10">

    <form class="row g-6 needs-validation" method="post">
        <div class="col-md-6 row g-6">
            <label for="nom_matiere"> Matiere</label>
            <select class="p-2 bg-light border" name="nom_matiere" id="nom_matiere">
                <?php
                foreach ($matieres as $matiere) {
                ?>
                    <option value="<?php echo $matiere["Nom_matiere"]; ?>"> <?php echo $matiere["Nom_matiere"]; ?> </option>;
                <?php             }
                ?>
            </select>
            <label for="Nom"> Choississez l'enseignant </label>
            <select class="p-2 bg-light border" name="Nom" id="Nom">
                <?php
                foreach ($enseignants as $enseignant) {
                ?>
                    <option value="<?php echo $enseignant["id"]; ?>"> <?php echo $enseignant["Nom"]; ?> </option>;
                <?php             }
                ?>
            </select>
        </div>
        <div style="margin-left: 0.5rem ;" class="col-md-6 row g-6 pl-2">
            <label for="nom_classe"> Choississez sa classe pour cette matiere </label>
            <select class="p-2 bg-light border" name="nom_classe" id="nom_classe">
                <?php
                foreach ($classes as $classe) {
                ?>
                    <option value="<?php echo $classe["nom_classe"]; ?>"> <?php echo $classe["nom_classe"]; ?> </option>;
                <?php             }
                ?>
            </select>
            <label for="horaire"> Entrer la plage horaire pour cette matiere </label>
            <input type="text" class="p-2 bg-light border" id="horaire" name="horaire" placeholder="Entrer le jour puis l'heure exemple(lundi:8h30-10h30)">
        </div>
        <div class="col-md-6 row g-6">
            <label for="cycle"> Cycle </label>
            <select class="p-2 bg-light border" name="cycle" id="cycle">
                <option value="Premier cycle">Premier cycle</option>
                <option value="Second cycle">Second cycle</option>
            </select>
        </div>
        <div class="col-12 pt-4">
            <button class="btn btn-primary" type="submit">Valider</button>
        </div>
    </form>
</div>
<?php
include 'partials/_footer.php';
?>