<?php
$title = "Remplissage travaux pratiques";
include "partials/_header.php";
include "functions/fonction_form.php";
include "partials/_sidebar.php";
include "partials/_nav.php";
?>

<p>TRAVAUX PRATIQUES</p>
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
            <td>Titre du TP</td>
            <td>Nombre d'élèves ayant participés</td> 
         
        </tr>

        <tr>
            <td> <input type="text"></td>
            <td colspan="2"> <input type="text"></td>
        </tr>

        <tr>
            <td colspan="3">Objectifs visés</td>          
        </tr>
        <tr>
            <td colspan="3" > <textarea name="obj_vise"></textarea> </td>
        </tr>
        <tr>
        <td colspan="3"><input type="file"></td>
        </tr>
    <tr>
        <td colspan="3">Reférences et énoncés des activités</td>
    </tr>
    <tr>
        <td colspan="3"> <textarea name="ref_enon"></textarea> </td>
    </tr>
    <tr>
        <td colspan="3"><input type="file"></td>
        </tr>
      

        <tr>
            <td>Performances des élèves</td>
            <td>Matériel utilisé pour le TP</td>
            <td>Incidents</td>
        </tr>

        <tr>
            <td> <textarea></textarea> </td>
            <td> <textarea></textarea> </td>
            <td> <textarea></textarea> </td>
        </tr>

        <tr>
             <td><input type="file"></td>
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
    <?php include "partials/_footer.php"; ?>