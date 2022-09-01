<?php
//lien du fichier dans lequel se trouve votre page
$fichier = "index.php";
//lien image (GIF) à afficher lors du chargement
// $gif = "";
/***********************************************************************
Vous pouvez ajouter de la CSS et de l'HTML pour rendre la page plus joli
************************************************************************/

?>
<!DOCTYPE HTML>

<html>
	<head>
		
		<script type="text/javascript">
			function getXMLHttpRequest() {
				var xhr = null;
				
				if (window.XMLHttpRequest || window.ActiveXObject) {
					if (window.ActiveXObject) {
						try {
							xhr = new ActiveXObject("Msxml2.XMLHTTP");
						} catch(e) {
							xhr = new ActiveXObject("Microsoft.XMLHTTP");
						}
					} else {
						xhr = new XMLHttpRequest(); 
					}
				} else {
					alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest... Nous vous conseillons Safari ou Google Chrome.");
					return null;
				}
				
				return xhr;
			}



			function loadData()
			{
				var xhr = getXMLHttpRequest();
				xhr.onreadystatechange = function() {
				        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
				                document.getElementById('data').innerHTML = xhr.responseText; // Données textuelles récupérées
				        }
				};

				xhr.open("GET", "<?php echo $fichier; ?>", true);
				xhr.send(null);
			}
			var time_set=setTimeout("loadData()", 5000);


		</script>
	</head>

	<body>

		<div id="data"><img src="<?php echo $gif; ?>" alt="" /></div>


	</body>
</html>
