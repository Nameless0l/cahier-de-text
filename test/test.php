<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $r="J'apprend à coder";
      if(preg_match("/[a-z]/i",$r)){
        echo 'expression trouvé <br/>';
      }  
      else echo 'expression non trouvée <br/>'; 
    ?>
    
</body>
</html>