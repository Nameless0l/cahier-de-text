<?php
require 'functions/gestions_envoie_mail/index.php';
require 'config/database.php';
$sql = $db->prepare('SELECT * FROM enseignant');
            $result = $sql->execute();
            $i=1;
            $enseignants = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($enseignants as $enseignant){
               
                $table=[

                    "index"=>$i,
                    // "id_censeur"=>$enseignant[""],
                    "id_reciever"=>$enseignant["id"],
                    "sender_name"=>$enseignant["Nom"],
                    // "message"=>$enseignant[""],
                    "statut_sender"=>"enseignant",
                ];
                $ydh[$i]=[
                    $table
                ];
                $i++;
                // SendMesg(3,(int)$table["id_reciever"],"Mbassi","Notificationdd","Censeur");
                // var_dump((int)$table["id_reciever"]);
}           
var_dump($ydh);
?>