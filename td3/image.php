<?php
header("Content-type: image/jpeg");

$width = 400;
$height = 200;
$scale = 2;
$font = 5;
$nb = 6;
$data = array('22', '85', '45', '36', '32', '55');
$titles = array('un', 'deux', 'trois', 'quatre', 'cinq', 'six');


$labelwidth = imagefontwidth($font) * 3 + 1;

// Crée une image de 200 pixels de large par 300 de haut.
$image = imagecreate($width, $height);
// Crée une couleur bleu utilisable dans l'image.
$bgcolor = imagecolorallocate($image, 0x00, 0x00, 0xFF);
$redcolor = imagecolorallocate($image, 0xFF,0x00,0x00);
$greencolor = imagecolorallocate($image, 0x00,0xFF,0x00);
$whitecolor = imagecolorallocate($image,0xFF,0xFF,0xFF);
$blackcolor = imagecolorallocate($image,0x00,0x00,0x00);
// Utilise la couleur bleu crée comme couleur de fond.
imagefill($image, 0, 0, $bgcolor);

//On crée la belle grille blanche
imageline($image, 30, 0, 30, 200, $whitecolor);
imageline($image,0, 20, 400, 20, $whitecolor);
imageline($image, 0, 40, 400, 40, $whitecolor);
imageline($image, 0, 60, 400, 60, $whitecolor);
imageline($image, 0, 80, 400, 80, $whitecolor);
imageline($image, 0, 100, 400, 100, $whitecolor);
imageline($image, 0, 120, 400, 120, $whitecolor);
imageline($image, 0, 140, 400, 140, $whitecolor);
imageline($image, 0, 160, 400, 160, $whitecolor);
imageline($image, 0, 180, 400, 180, $whitecolor);

//On ajoute les libellés
// Écrit le texte à partir du point (x, y).
imagestring($image, $labelwidth, 1, 0, 100, $redcolor);
imagestring($image, $labelwidth, 2, 20, 90, $redcolor);
imagestring($image, $labelwidth, 2, 40, 80, $redcolor);
imagestring($image, $labelwidth, 2, 60, 70, $redcolor);
imagestring($image, $labelwidth, 2, 80, 60, $redcolor);
imagestring($image, $labelwidth, 2, 100, 50, $redcolor);
imagestring($image, $labelwidth, 2, 120, 40, $redcolor);
imagestring($image, $labelwidth, 2, 140, 30, $redcolor);
imagestring($image, $labelwidth, 2, 160, 20, $redcolor);
imagestring($image, $labelwidth, 2, 180, 10, $redcolor);

//On calcule la taille des rectangles
$recwidth = (($width - $labelwidth) / $nb) - 10;

//On trace les belles barres
imagefilledrectangle($image, 50, 110, 50 + $recwidth, 200, $greencolor);
imagefilledrectangle($image, 110, 100, 110 + $recwidth, 200, $greencolor);
imagefilledrectangle($image, 170, 10, 170 + $recwidth, 200, $greencolor);
imagefilledrectangle($image, 230, 60, 230 + $recwidth, 200, $greencolor);
imagefilledrectangle($image, 290, 20, 290 + $recwidth, 200, $greencolor);
imagefilledrectangle($image, 350, 80, 350 + $recwidth, 200, $greencolor);

$labelx = 50 + (($recwidth) / 2) - (imagefontheight($font) / 2);
$labely = 200 - 10; // Pour ne pas écrire immédiatement en bas.
$labelx2 = 110 + (($recwidth) / 2) - (imagefontheight($font) / 2);
$labelx3 = 170 + (($recwidth) / 2) - (imagefontheight($font) / 2);
$labelx4 = 230 + (($recwidth) / 2) - (imagefontheight($font) / 2);
$labelx5 = 290 + (($recwidth) / 2) - (imagefontheight($font) / 2);
$labelx6 = 350 + (($recwidth) / 2) - (imagefontheight($font) / 2);
imagestringup($image, $labelwidth, $labelx, $labely, $titles[0] . ':' . $data[0], $blackcolor);
imagestringup($image, $labelwidth, $labelx2, $labely, $titles[1] . ':' . $data[1], $blackcolor);
imagestringup($image, $labelwidth, $labelx3, $labely, $titles[2] . ':' . $data[2], $blackcolor);
imagestringup($image, $labelwidth, $labelx4, $labely, $titles[3] . ':' . $data[3], $blackcolor);
imagestringup($image, $labelwidth, $labelx5, $labely, $titles[4] . ':' . $data[4], $blackcolor);
imagestringup($image, $labelwidth, $labelx6, $labely, $titles[5] . ':' . $data[5], $blackcolor);

// Crée le fichier jpeg à envoyer à partir de l'image crée.
imagejpeg($image);


?>
