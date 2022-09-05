<?php require('../config/database.php');?>
<?php require('../includes/constants.php');?>
<script>livre = 1</script>
<?php
if(isset($_GET['interlocuteur'])){
/*
	1-images
	2-exe
	3-vlc
	4-document
*/
	global $db;
	//extract($_GET);
	$interlocuteur = $_COOKIE['interlocuteur'];
	$user = $_COOKIE['user'];
	$re = $db->query("SELECT * FROM fichiers WHERE destinataire = '$user' and destinateur='$interlocuteur' ORDER BY temps ASC");
	if($re->rowCount()==0){
		echo "Aucun fichier reçu<br>".$interlocuteur;
	}else{
		while($donnees=$re->fetch()){
			extract($donnees);
			$datez = $donnees['temps'];
            $mois = date("m", "$datez");
            $jour = date('d',"$datez");
            $annee = date('Y', "$datez");
            $heure = date('H', "$datez");
            $minute = date('i', "$datez");
$message = "";
$date = "Envoyé le ".$jour.'/'.$mois.'/'.$annee.' à '.$heure.':'.$minute;
			if($type=='type1'){
				$message='<img class="fichier" src="'.$lien.'" alt="'.$date.'">';
			}
			if($type=='type2'){
				$message='<a class="fichier" href="'.$lien.'"target="_blank" title="'.$date.'">'.$nom.'</a><br>';
			}
			echo $message;
		}
	}
	
}
