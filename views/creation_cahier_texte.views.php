
<?php
$rec_enseignant = $bdd->query("SELECT * FROM ens_cens WHERE matri_censeur = 'abc'");
$query = $bdd->query("SELECT * FROM classes ");
    $run_query =  $query->rowCount();

?>
<?php
$rec_classe = $bdd->query("SELECT * FROM classes WHERE matri_censeur_charge = '21p340' ");
$rec_eleve = $bdd->query("SELECT * FROM eleve WHERE matr_cens_charge = 'bgc' ");
$rec_enseignant = $bdd->query("SELECT * FROM enseignant WHERE  	id_censeur = 'abc'");

?>
  

<div class="hello">
  <p align = "center">Veuiller remplir ces informations </p>
    <form method="POST" action="" enctype="multipart/form-data">
       <table align="center">
         <tr>
           <td align= "left">Classe :</td>

           <td>
            <select name="classroom" id="classroom">
            
              <option value="">choisissez la classe beneficiaire</option>
            
            <?php 
            if($run_query > 0){
            while($resultat = $query->fetch()){?>
  
               <option value='<?= $resultat['id']; ?>'><?= $resultat['nom_classe']; ?></option>";
          <?php    }
            }else{?>

                 <option value=""> <?php echo "Country not available"; ?></option>';
                 <?php
            }
            ?>
            </select>
          
          </td>
         </tr>

          <tr>
             <td align= "left">Nombre d'élève :</td>
              <td>
              <select id="nbreleves">
              <?php 
                $nbre = 0;
                 while($nbre < 20)
                 {
                  $nbre++; ?>
                    <option value="<?php echo $nbre; ?>"><?php echo $nbre; ?></option>
            <?php }?>
               </select>
               </td>
         </tr>  

        <tr>

          <td align= "left">Chef de classe :</td>
          
          <td>
          <select name="student" id="student">
            <option value="">Select one student</option>
          </select>
          </td>

        </tr>
<tr>
<td align="left">Enseignant principale:</td>
<td>
  <select id="ens_principal" >
  <?php
while($result = $rec_enseignant->fetch())
{
  $enseignant = $result['matricule_ens']; 
  $rec_e = $bdd->query("SELECT * FROM enseignant WHERE matricule = '$enseignant'");
  $display = $rec_e->fetch();
  ?>
  <option value="<?php echo $display['Nom']; ?>" ><?php echo $display['Nom']; ?></option>
  <?php
  
}?>
  </select>
</td>

</tr>

        <tr>
          <td align= "left"><label for="emploidetemps">Emploi de temps :</label></td>
          <td><input type="file" name="emploidetemps" id="emploidetemps"></td>
       </tr>

      <tr>
          <td align= "left"><label for="fichedeprogression">Fiche de progression :</label></td>
          <td><input type="file" name="fichedeprogression" id="fichedeprogression"></td>
       </tr>

    <tr>
      <td></td>
      <td style="text-align: right;"><input type="submit" name="retour" value="Créer"></td>
    </tr>

</table>
</form>
</div>



<?php include "partials/_footer.php"; ?>

