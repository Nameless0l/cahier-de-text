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

// 	<script>
// 	document.multiselect('#testSelect1')
// 		.setCheckBoxClick("checkboxAll", function(target, args) {
// 			console.log("Checkbox 'Select All' was clicked and got value ", args.checked);
// 		})
// 		.setCheckBoxClick("1", function(target, args) {
// 			console.log("Checkbox for item with value '1' was clicked and got value ", args.checked);
// 		});

// 	function enable() {
// 		document.multiselect('#testSelect1').setIsEnabled(true);
// 	}

// 	function disable() {
// 		document.multiselect('#testSelect1').setIsEnabled(false);
// 	}
// </script>