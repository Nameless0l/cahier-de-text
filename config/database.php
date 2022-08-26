<?php
	$bdd = new PDO("mysql:host=127.0.0.1;dbname=cahier_de_texte;charset=utf8", "root", "");
?>
<?php
ignore_user_abort(true);
	if(!defined('DB_HOST'))define('DB_HOST', 'localhost');
	if(!defined('DB_NAME'))define('DB_NAME', 'cahier_de_texte');
	if(!defined('DB_USERNAME'))define('DB_USERNAME', 'root');
	if(!defined('DB_PASSWORD'))define('DB_PASSWORD', '');	

	try{
	
		$db = new PDO("mysql: host =".DB_HOST."; dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
		
		$db ->exec("SET NAMES utf8");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	
	}catch(PDOException $e){
	
		die('Erreur: '. $e->getMessage());
		
	}
	?>
	