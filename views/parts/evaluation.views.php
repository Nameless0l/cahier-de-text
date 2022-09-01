<?php
$title = "Remplissage evaluation";
include "partials/_header.php";
include "functions/fonction_form.php";
include "partials/_sidebar.php";
include "partials/_nav.php";
?>
<p>Evaluation</p>
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
            <td><label for="evaluation">Type d'évaluation :</label></td>
            <td>
                <select id="evaluation" name="evaluation">
                    <option value="contrôle">Contrôle</option>
                    <option value="sequence">Séquence</option>
                    <option value="chimie">Chimie</option>
                </select>
            </td>
        </tr>

    <tr>
        <td colspan="3">Epreuve</td>
    </tr>

    <tr>
        <td colspan="3"> <textarea name="epreuve"></textarea> </td>
    </tr>
    <tr>
        <td colspan="3"><input type="file"></td>
        </tr>
    <tr>
        <td colspan="3">Correction</td>
    </tr>
    <tr>
        <td colspan="3"> <textarea name="correction"></textarea> </td>
    </tr>
    <tr>
        <td colspan="3"><input type="file"></td>
        </tr>
    <tr>
        <td colspan="3">Incidence sur le processus d'évaluation</td>
    </tr>
    <tr>
        <td colspan="3"> <textarea name="ISLPD"></textarea> </td>
    </tr>
    <tr>
        <td colspan="3"><input type="file"></td>
        </tr>

    <td><label for="copie_remise">Copie remise :</label></td>
            <td>
                <select id="copie_remise" name="copie_remise">
                    <option value="oui">OUI</option>
                    <option value="non">NON</option>
                </select>
            </td>
   
            <tr>
                <td>Nombre d'élèves ayant participé</td>
                <td>Nombre de note inférieur à 10/20</td>
                <td>Nombre de note comprise entre 10/20 et 12/20</td>
            </tr>

            <tr> 
                <td><input type="text"> </td> 
                <td><input type="text"> </td> 
                <td><input type="text"> </td> 
        </tr>

        <tr>
            <td>Nombre de note supérieur à 12/20</td>
                <td>Moyenne générale de la classe</td>
                <td>La plus forte note </td>
            </tr>

            <tr> 
                <td><input type="text"> </td> 
                <td><input type="text"> </td> 
                <td><input type="text"> </td>  
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