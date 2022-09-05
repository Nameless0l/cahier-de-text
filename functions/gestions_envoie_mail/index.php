<?php


function SendMesg($id_sender, $id_receiver, $sender_name,$message,$statut_expediteur)
{
    require 'config/database.php';
    $message = 'Pas à jour' ;
    // global $db;
    $statut='NON_LU';


    $sql="INSERT INTO notif(id_expediteur,id_recepteur,notifications,nomExpediteur,statut_expediteur,statut) 
    VALUES('$id_sender','$id_receiver','$message','$sender_name','$statut_expediteur','$statut') ";
    $query=$db->prepare($sql);
    $query->execute();

}
