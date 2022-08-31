<?php
session_start();
include "config/database.php";
?>  
<?php
$title = "création cahier de texte";
include "partials/_header.php";
include "functions/fonction_form.php";
include "partials/_sidebar.php";
include "partials/_nav.php";
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

    $('#student').on('change',function(){
        var studentID = $(this).val();
        if(studentID){
            $.ajax({
                type:'POST',
                url:'views/ajaxFile.php',
                data:'id_eleve='+studentID,
                success:function(html){
                    $('#ens_principal').html(html);
                }
            }); 
        }else{
            $('#ens_principal').html('<option value="">Select student first</option>'); 
        }
    }); 

});
</script>
<?php


if(isset($_POST["retour"]))
{
  $classe = intval($_POST["classroom"]);

  $nbreleve = intval($_POST["nbreleve"]);

  $chef_classe = intval($_POST["student"]);

  $prof_principal = intval($_POST["ens_principal"]);
  if(!empty($_FILES))
  {
    $emploidetemps = uploade_files_pdf("emploidetemps");
    $fichedeprogression = uploade_files_pdf("fichedeprogression");
  }  

  if(!empty($_POST["classroom"]) AND !empty($_POST["student"]) AND !empty($_POST["ens_principal"]) AND !empty($_POST["nbreleve"]))
  {
        $ins_enseignant = $db -> prepare("INSERT INTO cahierdetexte(id_classe,id_cens_en_charge, nbre_eleve, id_chef_classe, id_prof_principal, emploi_temps,fiche_progression) VALUES(?,?,?,?,?,?)");
        $ins_enseignant -> execute(array($classe,$_SESSION['user']['id'],$nbreleve,$chef_classe,$prof_principal,$emploidetemps,$fichedeprogression));

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