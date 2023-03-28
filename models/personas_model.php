<?php

/* Clase personas */
class personas_model
{
    private $nombre;
    private $apellidos;   

    public function guardar_persona( $nombre, $apellidos ){

        $this->nombre = $nombre;
        $this->apellidos = $apellidos;

        // Obtenemos personas
        $personas  = $this->obtener_personas();

        // Insertamos nueva persona
        $personas[] = [
            "nombre"=> $nombre,
            "apellidos" => $apellidos
        ];

        // Guardamos en sesión
        $_SESSION['personas'] = json_encode($personas);

        return true;        
    }
    public function obtener_personas()
    {
        return json_decode( $_SESSION['personas'], TRUE);
    }
}