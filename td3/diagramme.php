<?php
header('Content-type: image/jpeg'); // Au départ.

$diameter = 50; // Diamètre du cercle.
$font = 5; // Police de la légende.
$fontheight = imagefontheight(font); // Calculé avec imagefontheight.
$nb = 6; // Nombre de valeurs à mettre dans le cercle.
$width = $diameter + 20; // Pour les marges.
$height = $diameter + 40 + ($nb * $fontheight); //Pour les marges.
$xcentre = $diameter / 2 + 10;
$ycentre = $diameter / 2 + 10;

//Création de l'image
$image = imagecreate($width,$height);
//Créatiobn des couleurs
$bgcolor = imagecolorallocate($image,0x00,0x00,0xFF);
$bordercolor = imagecolorallocate($image,0xFF,0xFF,0xFF);
$textcolor = imagecolorallocate($image,0x00,0xFF,0x00);
$c1 = imagecolorallocate($image,0xFF,0x00,0x00);
$c2 = imagecolorallocate($image,0x05,0x05,0x05);
$c3 = imagecolorallocate($image,0x0A,0x0A,0x0A);
$c4 = imagecolorallocate($image,0x0A,0x02,0x0C);
$c5 = imagecolorallocate($image,0x18,0x05,0xF1);
$c6 = imagecolorallocate($image,0x69,0x69,0x69);
$nbcolor = imagecolorallocate($image,0xAA,0xAB,0x00);

imagefill($image,0,0,$bgcolor);

$initdegree = round($degree);
$degree += (($diagramvalue / 100) * 360);
$finaldegree = round($degree);
// On choisit une couleur pour la part du diagramme circulaire.
// $i vaut 0 pour la première valeur, 1 pour la suivante, etc.
switch($i)
{
    case 0:
        $slicecolor = $c1;
        break;
    case 1:
        $slicecolor = $c2;
        break;
    case 2:
        $slicecolor = $c3;
        break;
    case 3:
        $slicecolor = $c4;
        break;
    case 4:
        $slicecolor = $c5;
        break;
    case 5:
        $slicecolor = $c6;
        break;
}
imagearc($image, $xcentre, $ycentre, $diameter, $diameter, $initdegree, $finaldegree, $slicecolor);

imagearc($image, $xcentre, $ycentre, $diameter, $diameter, $initdegree, $finaldegree, $slicecolor);
// La fonction floor(...) permet d’obtenir l’arrondi par défaut.
$arcx = floor($xcentre + cos(deg2rad($initdegree)) * ($diameter / 2));
$arcy = floor($ycentre + sin(deg2rad($initdegree)) * ($diameter / 2));

imageline($image, $xcentre, $ycentre, $arcx, $arcy, $slicecolor);

$arcx2 = floor($xcentre + cos(deg2rad($finaldegree)) * ($diameter / 2));
$arcy2 = floor($ycentre + sin(deg2rad($finaldegree)) * ($diameter / 2));
imageline($image, $xcentre, $ycentre, $arcx2, $arcy2, $slicecolor);

imagejpeg($image);
?>