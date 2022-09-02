<?php require('../config/database.php');?>
<?php require('../includes/constants.php');?>
<script>livre = 1</script>
    <script>
        var user = "<?php echo $_COOKIE['user'] ?>";
        function inviter(a) {
            var  la= a;
            // var iddentifieur =document.getElementById("inviter"+a).id;
            $('#inviter').load("functions/inviter.php?apel=inviter&id="+la+"&user="+user).fadeIn("Slow");
        }
        function discuter(a) {
            $('#discuter'+a).load("search.php?apel=inviter&id="+a+"&user="+user).fadeIn("Slow");
        }
        if (undefined){


        function inviteraa(a) {
var la =a;
            $("#center").load("functions/inviter.php?apel=inviter&id="+la).fadeIn("Slow");
            console.log("Envoyée ! à "+a);
        }
        }
    </script>
<?php


if (isset($_GET['apel'])) {
    $apel = $_GET['apel'];
    $user = $_COOKIE['user'];
    global $db;
//fonction de recherche

    if ($apel=='recherche'){
//echo $_GET['user'].' et text = '.$_GET['text'];
        $user = $_GET['user'];
        extract($_GET);

        $resultat = $db->query("SELECT * FROM has WHERE pseudo LIKE '%$text%'");

        function read_user($resultat, $text){
            global $db;
            $user = $_GET['user'];

            if ($resultat->rowCount() == 0) {
                echo '<br> <div id="test" class=" btn-lg jumbotron" style="padding: 2mm; background-color: #3995ff; margin-bottom: 2mm; width:98%;">Aucun resultat pour <span>" ' . $text . ' "</span>essayez avec un pseudonyme</div><br>';
            } else {
                echo '<br><div class="search-1"> <div class="btn-lg jumbotron" style="padding: 2mm; background-color: #3995ff; margin-bottom: 2mm; width:98%; margin: auto;">Resultats de la recherche pour <span>" ' . $text . ' "</span></div><br>';

                while ($donnees = $resultat->fetch()) {
                    extract($donnees);
//                $user = USER_PSEUDO;

                    //Test d'amitiÃƒÂ©
//                    $pseudo1 = $donnees['pseudo'];

                    $testamitie1 = $db->query("SELECT * FROM amis WHERE envoyeur = '$pseudo' AND recepteur = '$user'");
                    $testamitie2 = $db->query("SELECT * FROM amis WHERE envoyeur = '$user' AND recepteur = '$pseudo'");
                    $amitie1 = $testamitie1->fetch();
                    $amitie2 = $testamitie2->fetch();
                                        
                   
                    if ($testamitie1->rowCount() == 0 and $testamitie2->rowCount() == 0) {
                        $textDiscuss = "Envoyer une invitation";
                    }

                    if ($testamitie1->rowCount() != 0 or $testamitie2->rowCount() != 0) {
                        $divDiscuss = "<div onclick='discuss($id)' class='btn  alert-info' id='discuter$id'>";
                        if ($testamitie1->rowCount() != 0){
                            if ($amitie1['envoyeur']==$user and $amitie1['etat']==0){
                                $textDiscuss = "invitation Envoyée !";
                            }
                            if ($amitie1['envoyeur']==$pseudo and $amitie1['etat']==0){
                                $textDiscuss = "Accepter l'invitation";
                            }
                            if ($amitie1['etat']==1){
                                $textDiscuss="Lancer une discution";
                            }
                        }
                        if ($testamitie2->rowCount() != 0){
                            if ($amitie2['envoyeur']==$user and $amitie2['etat']==0){
                                $textDiscuss = "invitation Envoyée !";
                            }
                            if ($amitie2['envoyeur']==$pseudo and $amitie2['etat']==0){
                                $textDiscuss = "Accepter l'invitation";
                            }
                            if ($amitie2['etat']==1){
                                $textDiscuss="Lancer une discution";
                            }


                        }

                    }
					if ($textDiscuss=="invitation Envoyée !"){
                        $divDiscuss = "<div class='btn  alert-success display-1' id='confirm$id'>";
                        $imgDiscuss = '<img src="assets/image/New_Folder/no.png" class="img-reduce">';
                    }
                    if ($textDiscuss=="Accepter l'invitation"){
                        $divDiscuss = "<div onclick='confirm($id)' class='btn  alert-success display-1' id='confirm$id'>";
                        $imgDiscuss = '<img src="assets/image/New_Folder/check.png" class="img-reduce">';
                    }
                    if ($textDiscuss=="Lancer une discution"){
                        $divDiscuss = "<div onclick='discuss($id)' class='btn  alert-danger display-1' id='discuss$id'>";
                        $imgDiscuss = '<img src="assets/image/New_Folder/ic_menu_start_conversation.png" class="img-reduce">';
                    }
                    if ($textDiscuss=="Envoyer une invitation"){
                        $divDiscuss = "<div onclick='inviteraa($id)' class='btn  alert-info display-1' id='inviter$id'>";
                        $imgDiscuss = '<img src="assets/image/New_Folder/invite.png" class="img-reduce-2">';
                    }

					$divContainer = "<div class='search-result-total'>";
                    $divContainerLeft = "<div class='search-result-left'>";
                    $divContainerRight = "<div class='search-result-right'>";
                    $divImg = "<div class='search-result-image'> ";
                    
                    $divNames = "<div class='search-result-names'>";
                    $divClose = "</div>";
                    $description = "Aucne description";
                    $reste = $db->query("SELECT * FROM profil WHERE pseudo = '$pseudo'");
					$photoF = $photo;
                    if($reste->rowCount()!=0){
                    	$done = $reste->fetch();
                    	extract($done);
                    	$divPays = "<div class='pays'><b> Pays de residence: </b>".$pays.$divClose;
                    	$divVille = "<div class = 'ville'><b> Ville de residence: </b>".$ville.$divClose;
                    	$divEmploi = "<div class ='emploi'><b>".$emploi."</b>".$divClose;
						if(trim($photo)!='')$photoF = 'functions/tmp/profils/'.$photo;
                    	$divTelephone = "<div class = 'telephone'><b> Telephone: </b>".$telephone.$divClose;
                    	$divCompte="<div class = 'compte'><b> Adresse Electronique: </b>".$compte.$divClose;
                    	$divBiographie = "<div class = 'biographie'> <b>Biographie: </b>".$biographie.$divClose;
                    	if($textDiscuss=="Lancer une discution"){
                    		$description = $divPays.$divVille.$divTelephone.$divCompte.$divBiographie.'<br>'.$divEmploi;
                    	}else{
                    		$description = $divPays.$divVille.$divCompte.$divBiographie.'<br>'.$divEmploi;
                    	}
                    }
                    $img = "<img class='img-circle' src='$photoF'> </img>";

                    $profil = $divImg . $img . $divClose;
                    $names = $divNames . $nom . ' ' . $prenom . '<br>' . $pseudo . $divClose;
                    $discuss = $divDiscuss . $textDiscuss.$imgDiscuss . $divClose;
                    $content = $divContainer.$divContainerLeft . $profil . $names . $discuss . $divClose.$divContainerRight.$description.$divClose.$divClose;


                    if ($pseudo != $user) {
                        echo $content;
                    }
                }
                echo '</div>';

            }

        }
        read_user($resultat, $text);
    }
}


