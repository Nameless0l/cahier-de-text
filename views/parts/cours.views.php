<?php

$title = "Remplissage cours";

include "functions/fonction_form.php";

require 'functions/ajout_cours.php';
$date = date("Y/m/d");

?>
<p>COURS</p>
<?php
// session_start();


if (!empty($_POST)) {
    $error = 'Veillez remplir tout les champs';
    if (1
        // isset($_POST["titre_lecon"])
        // && !empty($_POST["nom"]) && !empty($_POST["matricule"]) && !empty($_POST["prenom"])
    ) {
        
$vu = false ;
$id = 1;
$id_enseignant = $_SESSION["user"]["id"];
$id_matiere = $id;
$id_classe = strip_tags($_GET['id']);
$trimestre = strip_tags($_POST['trimestre']);
$id_chapitre = 1;
$titre_module = "Les Pst";
$titre_lecon = strip_tags($_POST['titre_lecon']);
$numero_du_module = 12/*$_POST['numero_du_module']*/;
$exo_application = strip_tags($_POST['exo_application']);
$corpus = strip_tags($_POST['corpus']);
$activiteApprentissage = strip_tags($_POST['activitesApprentissage']);
$opjectif_leçon = strip_tags($_POST['opjectif_lecon']);
$plan_leçon  = strip_tags($_POST['plan_lecon']);
$homework = strip_tags($_POST['homework']);

Ajoutcours($id_enseignant, $id_matiere, $id_classe, $trimestre, $id_chapitre, $titre_module, $titre_lecon, $numero_du_module, $exo_application,  $corpus,  $activiteApprentissage, $opjectif_leçon, $plan_leçon, $homework,$vu);
    } else {
        die('formulaire incomplet');
    }
}
?>
<p> journée du: <?= $date ?></p>
<form method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                <label for="trimestre">Trimestre:</label>
                <select name="trimestre" id="trimestre">
                    <option value= 1 >Un</option>
                    <option value= 2 >Deux</option>
                    <option value= 3 >trois</option>
                </select>
            </td>
            <td>
                <label for="matiere">Matiere:</label>
                <select name="matiere" id="matiere">
                    <option value="mathematique">Mathematique</option>
                    <option value="physique">Physique</option>
                    <option value="chimie">Chimie</option>
                </select>
            </td>
        </tr>

    </table>

    <div class="container-sm">

        <table>
            <tr>
                <td>Numéro et titre du module</td>
                <td>Titre de la leçon</td>
                <td>Numéro et titre de la séquence didactique</td>
            </tr>

            <tr>
                <td><textarea name="titre_module"></textarea></td>
                <td><textarea name="titre_lecon"></textarea></td>
                <td><textarea name="titre_sequence_didactique"></textarea></td>
            </tr>

            <tr>
                <td colspan="3">Objectifs de la leçon</td>
            </tr>

            <tr>
                <td colspan="3">
                    <textarea name="opjectif_lecon"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">Plan de la leçon</td>
            </tr>
            <tr>
                <td colspan="3"> <textarea name="plan_lecon"></textarea> </td>
            </tr>
            <tr>
                <td colspan="3">Corpus ou situation problême </td>
            </tr>
            <tr>
                <td colspan="3"> <textarea name="corpus"></textarea> </td>
            </tr>

            <tr>
                <td>Fiche de préparation</td>
                <td>Fiche de déroulement</td>
                <td>Activités d'apprentissage</td>
            </tr>

            <tr>
                <td><textarea name="les_titres"></textarea></td>
                <td><textarea name="les_titres"></textarea></td>
                <td><textarea name="activitesApprentissage"></textarea></td>
            </tr>
            <tr>
                <td><input type="file"></td>
                <td><input type="file"></td>
                <td><input type="file"></td>
            </tr>

            <tr>
                <td colspan="3">Evaluation diagnostique</td>
            </tr>

            <tr>
                <td colspan="3">
                    <textarea name="evaluation_diag"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="file"></td>
            </tr>
            <tr>
                <td colspan="3">Exercices d'application</td>
            </tr>
            <tr>
                <td colspan="3"> <textarea name="exo_application"></textarea> </td>
            </tr>
            <tr>
                <td colspan="3"><input type="file"></td>
            </tr>
            <tr>
                <td colspan="3">Devoirs à faire à la maison</td>
            </tr>
            <tr>
                <td colspan="3"> <textarea name="homework"></textarea> </td>
            </tr>

            <tr>
                <td colspan="3"><input type="file"></td>
            </tr>

            <tr>
                <td>Compétences de la séquence</td>
                <td>Incidents</td>
            </tr>

            <tr>
                <td> <textarea name="objectifs"></textarea> </td>
                <td> <textarea name="objectifs"></textarea> </td>
            </tr>


        <tr>
        <td><input type="file"></td>
        <td><input type="file"></td>
        </tr>
        
        <tr>
            <td></td>
            <td></td>
            <td align="right"><input type="submit" name="envoyer" value="publier"></td>
        </tr>
    </table> 
    </form> 
    </div>
    

            <tr>
                <td><input type="file"></td>
                <td><input type="file"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td align="right"><button type="submit" >Enregistrer</button></td>
            </tr>
        </table>
</form>
</div>

<?php include "partials/_footer.php"; ?>

