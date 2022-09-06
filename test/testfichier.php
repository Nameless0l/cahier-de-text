<?php


// include dirname(__DIR__).DIRECTORY_SEPARATOR. '_footer.php';
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'fichier.txt' ;
file_put_contents($fichier , 'Salut mes gents comment vous allez? ');


?>