<?php
$title = "Remplissage cours";
include "partials/_header.php";
include "fonctions/fonction_form.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
?>

<p>COURS</p>

    <p> journée du: (DATE)</p>
    <form>
        <label for="trimestre">Trimestre:</label>
        <select name="trimestre" id="trimestre">
            <option value="un">Un</option>
            <option value="deux">Deux</option>
            <option value="trois">trois</option>
        </select>
    </form>
    
        <div class="container-sm">
   <form method="POST" action="" enctype="multipart/form-data">
    
        <label for="matiere">Matiere:</label>
            <select name="matiere" id="matiere">
                <option value="mathematique">Mathematique</option>
                 <option value="physique">Physique</option>
               <option value="chimie">Chimie</option>
            </select>
            
            <table>
        <tr>
            <td>Numéro et titre du module</td>
            <td>Titre de la leçon</td>
            <td>Numéro et titre de la séquence didactique</td>
        </tr>

        <tr>
            <td><textarea name="les_titres"></textarea></td>
            <td><textarea name="les_titres"></textarea></td>
            <td><textarea name="les_titres"></textarea></td>
        </tr>
        
        <tr>
            <td colspan="3">Objectifs de la leçon</td>
        </tr>
       
        <tr>
            <td colspan="3">
                    <textarea name="objectifs"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3">Plan de la leçon</td>
        </tr>
        <tr>
            <td colspan="3"> <textarea name="plan"></textarea> </td>
        </tr>
        <tr>
            <td colspan="3">Corpus ou situation problême </td>
        </tr>
        <tr>
            <td colspan="3"> <textarea name="corpus" ></textarea> </td>
        </tr>
    
        <tr>
            <td>Fiche de préparation</td>
            <td>Fiche de déroulement</td>
            <td>Activités d'apprentissage</td>
        </tr>
        
        <tr>
            <td ><textarea name="les_titres"></textarea></td>
            <td ><textarea name="les_titres"></textarea></td>
            <td ><textarea name="les_titres"></textarea></td>
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
            <td colspan="3"> <textarea name="exo_dapp"></textarea> </td>
        </tr>
        <tr>
        <td colspan="3"><input type="file"></td>
        </tr>
        <tr>
            <td colspan="3">Devoirs à faire à la maison</td>
        </tr>
        <tr>
            <td colspan="3"> <textarea name="dafalm" ></textarea> </td>
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
    
    <?php include "partials/_footer.php"; ?>