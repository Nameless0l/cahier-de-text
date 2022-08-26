<?php include 'config/database.php' ?>
<?php
	
	if(!defined('not_empty')){
		function not_empty(array $tab){
			if(count($tab) !=0 ){
				for($i=0; $i<count($tab); $i++){
					if( empty($tab[$i]) || trim($tab[$i]) == "" ){
						return false;
					}
				}
				return true;
			}
			return false;
		
		}
	}
	
	if(!defined('is_already_in_use')){
	
		function is_already_in_use( $value, $field='email',$table='users'){
		
			global $db;			
			
			$q = $db->prepare("SELECT id FROM $table WHERE $field=?");
			$q->execute([$value]);
			
			$count = $q->rowCount();
			
			$q->closeCursor();
			
			return $count;
		}
	
	}