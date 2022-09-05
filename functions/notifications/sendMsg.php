<?php require('../config/database.php');?>
<?php require('../includes/constants.php');?>
<script>livre = 1</script>
<?php

if (isset($_GET['part'], $_GET['message'])){
	if(isset($_GET['type']) and $_GET['type']=='special'){
		die("ok");
	}
    $interlocuteur = $pseudo;
    $user = $_COOKIE['user'];
    $message = $_GET['message'];
    $message = explode("Â§*Â§", "$message");
    $bsd = "";
    foreach ($message as $c){
        $bsd = $bsd.' '.$c;
    }
    $message = $bsd;
    $date = time();
    $piece = "";
    global $db;
    $id = $db->query("SELECT * FROM message ORDER BY id DESC LIMIT 1");
    $donnees=$id->fetch();
    $id = $donnees['id']+1;
    $db->query("INSERT INTO message VALUES ('$id', '$user', '$pseudo', '$message', '$date', '$piece', '0')");
    $donnn = $db->query("SELECT * FROM amis WHERE envoyeur='$user' AND recepteur = '$pseudo' or envoyeur ='$pseudo' AND recepteur = '$user'")->fetch();
    $frequence = $donnn['frequence'] + 1;
    $db->query("UPDATE amis SET frequence = '$frequence' WHERE envoyeur='$user' AND recepteur = '$pseudo' or envoyeur='$pseudo' AND recepteur = '$user'");     
    $discution = $db->query("SELECT * FROM message WHERE destinateur='$user' AND destinataire = '$pseudo' or destinateur='$pseudo' AND destinataire = '$user' ORDER BY temps DESC, id ASC LIMIT 5");
    while ($donnees=$discution->fetch()){
        $datez = $donnees['temps'];
        $mois = date("F", "$datez");
        $jour = date('d',"$datez");
        $annee = date('Y', "$datez");
        $heure = date('H', "$datez");
        $minute = date('i', "$datez");


        $temps = $jour.' '. translate("$mois") . ' ' .$annee. ' à ' . $heure . ':'.$minute;
        if ($donnees['destinateur']==$interlocuteur){
            $classe = 'class="all msg-interloc"';
        }else{
            $classe = 'class="all msg-user"';
        }
        ?>
        <div <?php echo $classe ?>>
            <div class="title"><?php echo $donnees['destinateur'] ?> <br></div >
            <div class="content"><?php echo $message ?><br><br>
                <div class="vide"><?php echo $temps?></div>
            </div >
        </div>
        <br>
        <?php
    }
}
else{
    die("");
}