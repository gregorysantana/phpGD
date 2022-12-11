<?php
// Crear una nueva imagen de 200x200 píxeles
$im = imagecreatetruecolor(200, 200);

// Llenar la imagen con un color de fondo rojo
$red = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 0, 0, $red);

// Dibujar una línea verde de (0,0) a (199,199)
$green = imagecolorallocate($im, 0, 255, 0);
imageline($im, 0, 0, 199, 199, $green);

// Establecer el tipo de contenido de la imagen como una imagen PNG
header('Content-type: image/png');

// Mostrar la imagen en el navegador
imagepng($im);

// Liberar la memoria utilizada por la imagen
imagedestroy($im);
