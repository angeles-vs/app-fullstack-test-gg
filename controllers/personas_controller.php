<?php
// Inicialización de la sesión
session_start();

// Comprobación del indice personas y definición como un array vacio, si no está
if ( !isset($_SESSION['personas']) ) {
    $_SESSION['personas'] = '[]';
}
 
// Importación del modelo y obtención de personas
require_once("models/personas_model.php");
$personas = new personas_model();
$datos_personas = $personas->obtener_personas();

// Orden del array alfabeticamente
usort($datos_personas, function ($a, $b){
    return strtolower($a['nombre']) > strtolower($b['nombre']);
});

// Importación de la vista principal
require_once("views/main.php");


// Procesamiento de adición de persona cuando se da click en el botón Agregar
if ( isset($_POST['guardar_persona']) ){

    // Validación de campos nombre y apellido
    if ( empty($_POST["nombre"]) || empty($_POST["apellidos"]) ){
        header('Location: /formulario-test?msg=0');die;
    }
    //Almacena el nombre y apellido del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
 
    // Guardado de persona con el modelo
    $personas->guardar_persona($nombre,$apellidos);
    
    // Reseteo de post
    unset($_POST['guardar_persona']);

    header('Location: /formulario-test?msg=1');
}

?>