<?php
$title = "Remplissage du cahier de texte";
include "../partials/_header.php";
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
<br>
<br>
<br>
<p>------------------------------------------------------------------------------------------------------------------</p>
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
    <br>
<br>
<br>
<p>------------------------------------------------------------------------------------------------------------------</p>

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
    <br>
<br>
<br>
<p>------------------------------------------------------------------------------------------------------------------</p>

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
    
    <?php include "../partials/_footer.php"; ?>