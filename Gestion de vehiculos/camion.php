<?php
// Definición de la clase Camion que hereda de la clase Vehiculo
class Camion extends Vehiculo {
    // Propiedad privada para almacenar la capacidad de carga del camión
    private float $capacidadCarga;

    // Constructor de la clase Camion que recibe marca, modelo, capacidad de carga y color
    public function __construct(string $marca, string $modelo, float $capacidadCarga, string $color = "Negro") {
        // Llama al constructor de la clase padre (Vehiculo) para inicializar marca, modelo y color
        parent::__construct($marca, $modelo, $color);
        // Inicializa la capacidad de carga del camión
        $this->capacidadCarga = $capacidadCarga;
    }

    // Método que simula el movimiento del camión
    public function mover() {
        echo "El camión se está moviendo.\n";
    }

    // Método que simula la detención del camión
    public function detener() {
        echo "El camión se ha detenido.\n";
    }

    // Método que devuelve información sobre el camión, incluyendo la capacidad de carga
    public function obtenerInformacion(): string {
        // Llama al método obtenerInformacion de la clase padre y agrega la capacidad de carga
        return parent::obtenerInformacion() . ", Capacidad de carga: {$this->capacidadCarga} toneladas";
    }

    // Método para establecer la capacidad de carga del camión
    public function setCapacidadCarga(float $capacidadCarga): self {
        $this->capacidadCarga = $capacidadCarga;
        return $this; // Permite encadenar métodos
    }

    // Método para obtener la capacidad de carga del camión
    public function getCapacidadCarga(): float {
        return $this->capacidadCarga;
    }
}
?>