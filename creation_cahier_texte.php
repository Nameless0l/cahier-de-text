<?php
session_start();
include "config/database.php";
?>  
<?php
$title = "création cahier de texte";
include "partials/_header.php";
include "functions/fonction_form.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
?>
<?php include "views/creation_cahier_texte.views.php"; ?>


<script type="text/javascript">
$(document).ready(function(){
    $('#classroom').on('change',function(){
        var classeID = $(this).val();
        if(classeID){
            $.ajax({
                type:'POST',
                url:'views/ajaxFile.php',
                data:'id='+classeID,
                success:function(html){
                    $('#student').html(html);
                    
                }
            }); 
        }else{
            $('#student').html('<option value="">Select country first</option>');
        }
    });
});
</script>
<?php


if(isset($_POST["retour"]))
{
  $classe = htmlspecialchars($_POST["classroom"]);

  $nbreleve = htmlspecialchars($_POST["nbrleve"]);

  $chef_classe = htmlspecialchars($_POST["chefe"]);

  $prof_principal = htmlspecialchars($_POST["prof_principal"]);
  if(!empty($_FILES))
  {
    $emploidetemps = uploade_files_pdf("emploidetemps");
    $fichedeprogression = uploade_files_pdf("fichedeprogression");
  }  

  if(!empty($_POST["classroom"]) AND !empty($_POST["chefe"]) AND !empty($_POST["prof_principal"]) AND !empty($_POST["nbrleve"]))
  {
        $ins_enseignant = $db -> prepare("INSERT INTO cahierdetexte(nom_classe, nbre_eleve, chef_classe, prof_principal, emploi_temps,fiche_progression) VALUES(?,?,?,?,?,?)");
        $ins_enseignant -> execute(array($classe,$nbreleve,$chef_classe,$prof_principal,$emploidetemps,$fichedeprogression));

        $error = "Le cahier a été créé";
  }
  else
  {
    $error = "----------------------veuillez remplir tous les champs";
  }
}

?>
<?php
if(isset($error))
{
  echo $error;
}
elseif(isset($alert))
{
  echo $alert;
}
?>