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

   public function ajout_enseignant($id_censeur, $nom, $prenom, $matricule, $email, $ville, $quartier, $matieres,$classes)
   {
      require 'config/database.php';

      global $db;

      $pass = password_hash("Nameless", PASSWORD_ARGON2ID);
      $sql1 = "INSERT INTO enseignant (Nom,Prenom,matieres,matricule,ville,quartier,mot_de_pass,email,classes) VALUES(
         :nom, :prenom,:matieres,:matricule,:ville,:quartier,'$pass',:email,:classe)";

      $query = $db->prepare($sql1);

      $query->bindValue(":nom", $nom, PDO::PARAM_STR);
      $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
      $query->bindValue(":matieres", $matieres, PDO::PARAM_STR);
      $query->bindValue(":matricule", $matricule, PDO::PARAM_STR);
      $query->bindValue(":classe", $classes, PDO::PARAM_STR);
      $query->bindValue(":email", $email, PDO::PARAM_STR);
      $query->bindValue(":ville", $ville, PDO::PARAM_STR);
      $query->bindValue("quartier", $quartier, PDO::PARAM_STR);

      $query->execute();
      
      $sql2  = "SELECT * FROM enseignant WHERE email= :email";

      $query = $db->prepare($sql2);

      $query->bindValue(":email", htmlentities($email), PDO::PARAM_STR);
      $query->execute();
      $id = $query->fetch();

      if(!$id) die("acces impossible");
      $id_enseignant = $id["id"];

      $sql3 = "INSERT INTO censeur_enseignant(id_enseignant,id_censeur) VALUES($id_enseignant,$id_censeur)";
      $query = $db->prepare($sql3);
      $query->execute();

      
   }

   function print_teacher_of_censor($id_censor)
   {
      include "config/database.php";
      $sql = "SELECT * FROM censeur_enseignant WHERE id_censeur=$id_censor";

      $query = $db->prepare($sql);
      $query->execute();
      $id_censeur_table = $query->fetchAll();
      // die($id_censeur_table);
      var_dump($id_censeur_table);
   }

   public function ajout_cahier($matricule)
   {
      include
      $sql2  = "SELECT * FROM enseignant WHERE email= :email";

      $query = $db->prepare($sql2);

      $query->bindValue(":email", htmlentities($email), PDO::PARAM_STR);
      $query->execute();
      $id = $query->fetch();

      if(!$id) die("acces impossible");
      $id_enseignant = $id["id"];

      $sql3 = "INSERT INTO censeur_enseignant(id_enseignant,id_censeur) VALUES($id_enseignant,$id_censeur)";
      $query = $db->prepare($sql3);
      $query->execute();
   }
}



//  INSERT iNTO enseignant (Nom ,Prenom,class,)
