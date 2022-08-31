<?php
if(isset($_POST['mailform'])){

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src="http://www.primfx.com/mailing/banniere.png"/>
			<br />
			J\'ai envoyé ce mail avec PHP !
			<br />
			<img src="http://www.primfx.com/mailing/separation.png"/>
		</div>
	</body>
</html>
';

mail("primfxtuto@gmail.com", "Salut tout le monde !", $message, $header);
}
?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>