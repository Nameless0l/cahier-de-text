<html>

<head>
    <title>Emploi du temps</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <style type="text/css">
    td {
        text-align: center;
        font: bold small Georgia, "Times New Roman", Times, serif
    }
    </style>
</head>

<body bgcolor="#FFAF5F" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <?php 
function afficher($a_afficher) {
$filtre=array(
"!"=>"<font color=\"#A0A0F0\">Manger</font>",
"<>"=>"<br>",
"t"=>"<br>TP",
"M"=>"Mathématiques",
"P"=>"Physiques",
"S"=>"SVT",
"F"=>"Français",
"A"=>"Anglais",
"D"=>"Allemand",
"H"=>"Histoire-Géographie",
"C"=>"ECJS",
"E"=>"EPS"
);
echo ($a_afficher=="") ? "&nbsp;" : strtr($a_afficher, $filtre) ;
}
$jours=array(
"Lundi"=>array("", "", "H<>225", "F<>321", "!", "a;bH<>225", "M<>300", "", ""),
"Mardi"=>array("a;bP<>210", "F<>320", "F<>320", "P<>311", "!", "Pt", "Pt", "St", "St"),
"Mercredi"=>array("S<>311", "S<>311", "D<>122", "A<>321", "!", "", "", "", ""),
"Jeudi"=>array("", "", "H<>221", "F<>223", "!", "M<>306", "M<>306", "E", "E"),
"Vendredi"=>array("aD<>225;b", "a;bD<>225", "P<>211", "!", "M<>306", "aM<>306;bC<>326", "A<>320", "M<>306", "")
);
$largeur=(100/count($jours));
while ($largeur*count($jours)>95) { $largeur--; }
echo "<td width=\"".(100-$largeur*count($jours))."%\">\n<table width=\"100%\" height=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tr><td height=\"26\"></td></tr>\n";
for ($id_for=9;$id_for<=17;$id_for++) {
echo "<tr><td height=\"66\">$id_for H</td></tr>\n";
}
echo "</table>\n</td>\n";
foreach ($jours as $jour=>$horaires) {
$case=0;
echo "<td width=\"$largeur%\" height=\"100%\">\n<table width=\"100%\" height=\"100%\" border=\"1\" bordercolor=\"#C0F0C0\" cellspacing=\"0\" cellpadding=\"0\">\n<tr><td height=\"26\" bgcolor=\"#CFFFCF\">$jour</td></tr>\n";
foreach ($horaires as $horaire) {
if (($horaire!=$horaires[$case-1])||(!isset($horaires[$case-1]))) {
$hauteur=66;
$id_while=0;
while (($horaire==$horaires[$case+(++$id_while)])&&(isset($horaires[$case+$id_while]))) {
$hauteur+=66;
}
echo "<tr><td height=\"$hauteur\">";
if (substr($horaire, 0, 1)=="a") {
echo "\n<table width=\"100%\" height=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tr>\n<td width=\"50%\" bgcolor=\"#FFB45F\">";
afficher(substr($horaire, 1, strpos($horaire, ";")-1));
echo "</td>\n<td width=\"50%\" bgcolor=\"#FFAA5F\">";
afficher(substr($horaire, strpos($horaire, "b")+1));
echo "</td>\n</tr></table>\n";
} else { afficher($horaire); }
echo "</td></tr>\n";
}
$case++;
}
echo "</table>\n</td>\n";
}
?>
        </tr>
    </table>
</body>

</html>