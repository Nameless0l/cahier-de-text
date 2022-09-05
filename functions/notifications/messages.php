<?php require '../../config/database.php';?>
<?php require '../../include/constantes.php';?>
<script>livre = 1</script>
<script>
function testt(){
	$("#id").trigger("click");
}

</script>

<?php

if (!isset($_GET['apel'], $_GET['id']) and $_GET['apel']=='discuss'){
    $id = $_GET['id'];
    $user = $_COOKIE['user'];
    global $db;
    $reponse = $db->query("SELECT * FROM has WHERE id = '$id'");
    $donnees = $reponse->fetch();
    $interlocuteur=$donnees['pseudo'];
    setcookie("interlocuteur", "$interlocuteur");

}
else{
	if(isset($_GET['apel'], $_GET['type'], $_GET['pseudo']) and $_GET['type']=='pseudo'){
		$interlocuteur = $_GET['pseudo'];
	}else{
    	die("");
    }
}
?>

<div class="msg-content" id="msgContent">
    <!--    interlocuteur-->
    <div class="msg-inter" id="msgInter">
        <div class="inter-name btn-lg" id="interlocuteur"><?php echo $interlocuteur ?></div><div class="statut"> </div>
    </div>

    <!--    Tchat-->
    <div class="msg-body" id="msgBody">
        <?php
        $pseudo = $interlocuteur;
        $user = $_COOKIE['user'];
        $discution = $db->query("SELECT * FROM message WHERE destinateur='$user' AND destinataire = '$pseudo' or destinateur='$pseudo' AND destinataire = '$user' ORDER BY temps ASC");
        while ($donnees=$discution->fetch()){
            $datez = $donnees['temps'];
            $mois = date("F", "$datez");
            $jour = date('d',"$datez");
            $annee = date('Y', "$datez");
            $heure = date('H', "$datez");
            $minute = date('i', "$datez");
			
			if(trim($donnees['piece'])!=''){

					$message="<img src='".$donnees['piece']."' class='img-reduce'>";
					echo $message;

			}else{

            $temps = $jour.' '. translate("$mois") . ' ' .$annee. ' à ' . $heure . ':'.$minute;
            if ($donnees['destinateur']==$interlocuteur){
            $db->query("UPDATE message set vu = 1 WHERE destinateur = '$interlocuteur' And destinataire = 'user'");
                $classe = 'class="all msg-interloc"';
            }else{
                $classe = 'class="all msg-user"';
            }
            ?>
            <div <?php echo $classe ?>>
                <div class="title"><?php echo $donnees['destinateur'] ?> <br></div >
                <div class="content"><?php echo $donnees['message'] ?><br><br>
                    <div class="vide"><?php echo $temps?></div>
                </div >
            </div>
            <br>
            <?php
            }
        }
        ?>
    </div>

    <!--    zone d'enevoie-->

 	<form id="input-t" enctype="multipart/form-data" method="post" action="functions/sendmsg.php">
 		<div id="input"></div>
    <textarea name="msgText" id="msgText" cols="30" rows="3" class="form-control msgText"></textarea>
<img alt="Envoyer votre message" src="assets/image/sendmsg.png" class="msg-send-btn" onclick="sendmsg('<?php echo $interlocuteur ?>')">
<input type="hidden" id="send" name="send" class="input">
<div onclick='sendimg()' class="btn btn-primary">Envoyer des fichiers</div><div onclick='received()' class="btn btn-primary">Voir les fichiers reçus</div>


 	</form>

 	<!--<input onclick="alerte()" id ="id"class="btn btn-primary" type="file">-->
	
	

	<div id="tt" style="background-color:beige;"></div>

    <!-- <div class="btn btn-lg btn-primary display" onclick="sendmsg('<?php echo $interlocuteur ?>')">Envoyer </div> -->


</div>

<script>
    var autoload1 = setInterval(function () {
        $('#msgInter').load('functions/autoload.php?part=statut&inter='+document.getElementById("interlocuteur").value).fadeIn("Slow");
    }, 5000);
    var autoload2 = setInterval(function () {
        $('#msgBody').load('functions/autoload.php?part=body&inter='+document.getElementById("interlocuteur").value).fadeIn("Slow");
    }, 500);
</script>