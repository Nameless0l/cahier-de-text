<?php  
include('../config/database.php');

// global $b;
$output = '';
if(isset($_POST["export"]))
{
    $sql_export = $db->prepare("SELECT * FROM `enseignant`");
    $result = $sql_export->execute();
    $enseignants = $sql_export->fetch();
    if(count($enseignants) > 0)
{
    $output .= '
                  <table class="table" bordered="1">  
                    <tr>  
                         <th>n°</th>  
                         <th>nom </th>  
                       
                         <th>classe</th>
                          
                         <th>matricule</th> 
                         <th>Ville</th>  
                         <th>Quartier</th>
                         <th>Nom du Pere</th> 
                         <th>Nom de La mere</th>                   
                    </tr>
  ';
  $i = 0;
  foreach($enseignants as $enseignant){
    $output .= '
    <tr>  
                         <td > '.$n°.' </td>
                         <td>'.$enseignant["Nom"]  .$enseignant["Prenom"].'</td>  
                         <td>'.$enseignant["Classes"].'</td>  
                          
                         <td>'.$enseignant["matricule"].'</td> 
                         <td>'.$enseignant["ville"].'</td> 
                         <td>'.$enseignant["quartier"].'</td> 
                         <td>'.$enseignant["nom_pere"].'</td>  
                         <td>'.$enseignant["nom_mere"].'</td>    
                        
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=enseignants.xls');
  echo $output;
 }

if ($result === TRUE) {
		header('location:index.php');
    $delete = true;
	  }
	   else {
		echo "Erreur: " . $result . "
	  " . $con->error;
	  }

}

?>