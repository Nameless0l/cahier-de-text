<!-- <?php
require 'config/database.php';
$rec_classe = $bdd->query("SELECT * FROM classes WHERE matri_censeur_charge = '21p340' ");
$rec_eleve = $bdd->query("SELECT * FROM eleve WHERE matr_cens_charge = 'bgc' ");
$rec_enseignant = $bdd->query("SELECT * FROM enseignant WHERE  	id_censeur = 'abc'");
?> -->
<?php
class UpdateProfile
{
   
   public $nom;
   public $prenom;
   public $datetime;
   public $email;
   public $password;
   public $avatar;
   public $table;

   public function update()
   {
   }
}

class DbInteraction
{
   public $firstname;
   public $lastname;
   public $matricule;
   public $id;
   public $user;
   public $email;
   public $password;
   public $table;

   public function enseignant_censeur()
   {
      $db = '';
   }

   public function ajout_enseignant($matricule, $email, $classe,)
   {
      require 'config/database.php';
      $nom = strip_tags($_POST["nom"]);
      $prenom = strip_tags($_POST["prenom"]);
      $matricule = strip_tags($_POST["matricule"]);
      $email = strip_tags($_POST["email"]);
      $ville = strip_tags($_POST["ville"]);
      $quartier = strip_tags($_POST["quartier"]);
      $matieres = strip_tags($_POST["matieres"]);

      $pass = password_hash("Nameless", PASSWORD_ARGON2ID);
      $sql1 = "INSERT INTO enseignant (Nom,Prenom,matieres,matricule,ville,quartier,mot_de_pass,email) VALUES(
         :nom, :prenom,:matieres,:matricule,:ville,:quartier,'$pass',:email)";
      
       $query = $db->prepare($sql1);

    $query->bindValue(":nom", $nom, PDO::PARAM_STR);
    $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $query->bindValue(":matieres", $matieres, PDO::PARAM_STR);
    $query->bindValue(":matricule", $matricule, PDO::PARAM_STR);
    $query->bindValue(":email", $email, PDO::PARAM_STR);
    $query->bindValue(":ville", $ville, PDO::PARAM_STR);
    $query->bindValue("quartier", $quartier, PDO::PARAM_STR);
    

    $query->execute();
    
   }
   public function ajout_cahier($matricule)
   {
   }

   public function affiche_enseignant($matricule_censeur, $id_enseignant){



   }
}


//  INSERT iNTO enseignant (Nom ,Prenom,class,)

?>
