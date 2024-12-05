<?php
// Definición de la clase Moto que extiende de la clase Vehiculo
class Moto extends Vehiculo {
    // Propiedad privada que almacena la cilindrada de la moto
    private int $cilindrada;

    // Constructor de la clase Moto
    public function __construct(string $marca, string $modelo, int $cilindrada, string $color = "Negro") {
        // Llama al constructor de la clase padre (Vehiculo) para inicializar marca, modelo y color
        parent::__construct($marca, $modelo, $color);
        // Inicializa la propiedad cilindrada con el valor proporcionado
        $this->cilindrada = $cilindrada;
    }

    // Método para simular el movimiento de la moto
    public function mover() {
        echo "La moto se está moviendo.\n";
    }

    // Método para simular la detención de la moto
    public function detener() {
        echo "La moto se ha detenido.\n";
    }

    // Método para obtener información de la moto, incluyendo la información de la clase padre
    public function obtenerInformacion(): string {
        // Llama al método obtenerInformacion de la clase padre y agrega la cilindrada
        return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada}";
    }

    // Método para establecer la cilindrada de la moto
    public function setCilindrada(int $cilindrada): self {
        $this->cilindrada = $cilindrada; // Asigna el valor de cilindrada
        return $this; // Permite el encadenamiento de métodos
    }

    // Método para obtener la cilindrada de la moto
    public function getCilindrada(): int {
        return $this->cilindrada; // Retorna el valor de cilindrada
    }
}
?>