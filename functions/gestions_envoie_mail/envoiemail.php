<?php


$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message=
'<html>
<body>
    <div align="center">
    Jai envoyé ce avec php
    </div>
</body>
</html>
'
;

mail("wwwmbassiloic@gmail.com","Salut test",$message,$header);

?>