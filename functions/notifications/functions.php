<?php require('../config/database.php');?>
<?php require('../includes/constants.php');?>
<?php
$user = $_COOKIE['user'];
global $db;
$time = time();
$re = $db->query("SELECT * FROM connecte WHERE pseudo = '$user'");
if ($re->rowCount()==0){
    $db->query("INSERT INTO connecte VALUES ('$user', '$time')");
}else{
    $db->query("UPDATE connecte SET ip = '$time' WHERE pseudo = '$user'");
}