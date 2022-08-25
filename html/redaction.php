<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=cahier_de_texte;charset=utf8", "root", "");

?>

<!DOCTYPE html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title>Remplissage du cahier de texte</title>
    <link rel="stylesheet" href="document/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"/>
    </head>
<body>
    <div class="container">
   <form method="POST" action="" enctype="multipart/form-data">
    <label for="matiere">Matiere:</label>
    <select name="matiere" id="matiere">
        <option value="mathematique">Mathematique</option>
        <option value="physique">Physique</option>
        <option value="chimie">Chimie</option>
    </select>
    <table>
        
        <tr>
            <td>Titre_leçon</td>
            <td>Grand-titre</td>
            <td>Sous-titre</td>
        </tr>

        <tr>
            <td><textarea name="les_titres"></textarea></td>
            <td><textarea name="les_titres"></textarea></td>
            <td><textarea name="les_titres"></textarea></td>
        </tr>
        
        <tr>
            <td> </td>
        </tr>
       
        <tr>
            <td colspan="3">
                <div>
                    <textarea name="content">Veuiller entrer le resume de votre cours</textarea>
                </div>
            </td>
        </tr>
       
        <tr>
            <td colspan="2">Fiche de préparation</td>
            <td>Fiche de déroulement</td>
        </tr>
        
        <tr>
            <td colspan="2"><textarea name="les_titres"></textarea></td>
            <td><textarea name="les_titres"></textarea></td>
        </tr>
        
        <tr>
            <td colspan="2"><input type="file" name="ficheprepa" ></td>
            <td><input type="file" name="fichederoul" ></td>
        </tr>
        
           
        <tr> 
            <td>
                <label for="evaluation">Evaluation:   </label> 
            <select name="evaluation" id="evaluation">
                <option value="contrôle">Contrôle</option>
                <option value="interro">interro</option>
            </select> </td>
        </tr>

<tr>
    <td>  <textarea name="zone_evaluation">saisissez l'épreuve</textarea> </td>
</tr>

<tr>
    <td><input type="file"></td>
</tr>
        <tr>
            <td></td>
            <td></td>
            <td align="right"><input type="submit" name="envoyer" value="publier"></td>
        </tr>
    </table> 
    </form> 
    </div>
    <script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
<script>
    CKEDITOR.replace('zone_evaluation');
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
    </html>