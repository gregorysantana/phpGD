# phpGD
Hacer gráficas con PHP utilizando la biblioteca de PHP llamada GD

Para hacer gráficas con PHP, puedes utilizar la biblioteca de PHP llamada GD. Primero, asegúrate de que tienes la biblioteca <code>GD</code> instalada y habilitada en tu servidor. Luego, puedes utilizar la función <code>imagecreatetruecolor()</code> para crear una nueva imagen y la función <code>imagefill()</code> para llenarla con un color de fondo.

A continuación, puedes utilizar las funciones de dibujo de GD, como <code>imageline()</code> y <code>imagerectangle()</code>, para dibujar elementos en la imagen. Finalmente, puedes utilizar la función <code>header()</code> para establecer el tipo de contenido de la imagen y la función <code>imagepng()</code> o <code>imagejpeg()</code> para mostrar la imagen en el navegador.

En <code>index.php</code> tienes un ejemplo de código que muestra cómo hacer una gráfica de líneas en PHP utilizando la biblioteca GD.

Este código crea una nueva imagen de 200x200 píxeles, la llena con un color de fondo rojo y luego dibuja una línea verde de (0,0) a (199,199). La imagen se muestra en el navegador como una imagen PNG.
