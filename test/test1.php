<!DOCTYPE html>
<html>
<body>
<?php
ignore_user_abort(true);
	if(!defined('DB_HOST'))define('DB_HOST', 'localhost');
	if(!defined('DB_NAME'))define('DB_NAME', 'cahier_de_texte');
	if(!defined('DB_USERNAME'))define('DB_USERNAME', 'root');
	if(!defined('DB_PASSWORD'))define('DB_PASSWORD', '');	

	try{
	
		$db = new PDO("mysql: host =".DB_HOST."; dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
		
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	
	}catch(PDOException $e){
	
		die('Erreur: '. $e->getMessage());
		
	}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> nom: ". $row["nom"]. " profession ". $row["profession"]. " " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
?>
</body>
</html>
<?php
include 'config/database.php';



function enseignant($nom, $profession, $email)
{
    echo '
            <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="assets/images/WhatsApp Image 2022-09-09 at 06.23.12(1).jpeg" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>' . $nom . '</h4>
                                <p class="text-muted">' . $profession . '<span>| </span><span><a href="#" class="text-pink">' . $email . '</a></span></p>
                            </div>
                            <button  class="btn btn-warning mt-3 btn-rounded waves-effect w-md waves-light col-md-6 mx-auto">Notifier</button>
                        </div>
                </div>
            </div>
        ';
}



function enseig($nom, $update)
{
    echo '
    <tr>
    <td>
        <div class="d-flex">
            <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
            <div>
                <div class="font-weight-bold mt-1">' . $nom . '</div>
            </div>
        </div>
    </td>
    <td>
        <div class="font-weight-bold text-danger  mt-1">Cahier de Texte ' . $update . '
        </div>
    </td>
    <td>    
        <div class="font-weight-bold  mt-1">07 Nov 2022</div>
    </td>
    <td> 
      
    <button onclick="openForm()" type="button" class="btn btn-warning mt-3 btn-rounded waves-effect w-md waves-light mx-auto" type="submit">Notifier</button>
    <form id="myForm" method="post" class="hidden">
    <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Matricule</label>
    <input type="text" name="matricule" class="form-control" id="validationCustom01" required="required" placeholder=" Matricule ici">
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nom de l\'enseignant</label>
    <input type="text" name="nom" class="form-control" id="validationCustom01" required="required" placeholder="Nom ici">
  </div>
  <button  type="submit" class="btn btn-warning mt-3 btn-rounded waves-effect w-md waves-light col-md-6 mx-auto" type="submit">Envpyer</button>
    </form>   
    </td>
    </tr>
';
}

