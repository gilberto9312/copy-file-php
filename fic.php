<?php
function listarArchivos( $path ){
    // Abrimos la carpeta que nos pasan como parámetro
    $dir = opendir($path);
    $aux = array();
    // Leo todos los ficheros de la carpeta
    $i = 0;
    while ($elemento = readdir($dir)){
        // Tratamos los elementos . y .. que tienen todas las carpetas
        if( $elemento != "." && $elemento != ".."){
            // Si es una carpeta
            if( is_dir($path.$elemento) ){
                // Muestro la carpeta
                $aux[$i] = $elemento;
           		$i++;     
            // Si es un fichero
            }
        }
    }
    $fichero = 'prueba.txt';
    $nuevo_fichero = '/prueba.txt';
    foreach ($aux as $key => $value) {
    	if (!copy($fichero, $value . $nuevo_fichero)) {
		    echo "Error al copiar $fichero...\n";
		}else
		echo "completado \n";
    }
}
// Llamamos a la función para que nos muestre el contenido de la carpeta gallery
listarArchivos("./");
?>