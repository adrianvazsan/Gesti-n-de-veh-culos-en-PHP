<?php
// Definición de una clase abstracta llamada Vehiculo
abstract class Vehiculo {
    // Propiedades protegidas de la clase
    protected string $marca;  // Marca del vehículo
    protected string $modelo; // Modelo del vehículo
    protected string $color;  // Color del vehículo

    // Constructor de la clase que inicializa las propiedades
    public function __construct(string $marca, string $modelo, string $color = "Negro") {
        $this->marca = $marca;       // Asigna la marca
        $this->modelo = $modelo;     // Asigna el modelo
        $this->color = $color;       // Asigna el color, con un valor por defecto "Negro"
    }

    // Método abstracto que debe ser implementado en las clases que hereden de Vehiculo
    abstract public function mover();

    // Método abstracto que debe ser implementado en las clases que hereden de Vehiculo
    abstract public function detener();

    // Método que devuelve una cadena con la información del vehículo
    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
    }
}
?>