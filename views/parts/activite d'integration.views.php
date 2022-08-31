<?php
$title = "Remplissage travaux pratiques";
include "partials/_header.php";
include "functions/fonction_form.php";
include "partials/_sidebar.php";
include "partials/_nav.php";
?>

<p>ACTIVITES D'INTEGRATION</p>
    <p> journée du: (DATE)</p>
    <form>
        <label for="trimestre">Trimestre:</label>
        <select name="trimestre" id="trimestre">
            <option value="un">Un</option>
            <option value="deux">Deux</option>
        </select>
    </form>

    <div class="container-sm">
   <form method="POST" action="" enctype="multipart/form-data">

   <table>
        <tr>
            <td>Titre</td>
            <td>Lieu </td>
            <td>Nombres d'élèves ayant participés</td>
        </tr>

        <tr>
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
        </tr>

        <tr>
            <td>Compétences visées</td>
            <td>Situation problême</td>
            <td>Performances des élèves</td>
        </tr>

        <tr>
            <td> <textarea></textarea> </td>
            <td> <textarea></textarea> </td>
            <td> <textarea></textarea> </td>
        </tr>

        <tr>
            <td>Nombres de groupe et repartition</td>
            <td colspan="2">Matériel utilisé</td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td align="right"><input type="submit" name="envoyer" value="publier"></td>
        </tr>

   </table>

   </form>
    </div>

 <?php include "partials/_footer.php"; ?>