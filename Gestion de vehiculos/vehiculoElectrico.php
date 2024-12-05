<?php
// Definimos una interfaz llamada VehiculoElectrico que establece dos métodos que deben ser implementados
// por cualquier clase que la use.
interface VehiculoElectrico {
    public function cargarBateria(); // Método para cargar la batería del vehículo eléctrico
    public function estadoBateria(): string; // Método que devuelve el estado de la batería como una cadena
}

// Definimos una clase llamada Tesla que extiende de una clase base llamada Vehiculo
// e implementa la interfaz VehiculoElectrico.
class Tesla extends Vehiculo implements VehiculoElectrico {
    private int $nivelBateria; // Propiedad privada que almacena el nivel de batería del Tesla

    // Constructor de la clase Tesla que recibe la marca, modelo, nivel de batería y color (opcional).
    public function __construct(string $marca, string $modelo, int $nivelBateria, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color); // Llama al constructor de la clase base Vehiculo
        $this->nivelBateria = $nivelBateria; // Inicializa el nivel de batería
    }

    // Método para simular el movimiento del Tesla
    public function mover() {
        echo "El Tesla se está moviendo.\n"; // Imprime un mensaje indicando que el Tesla se mueve
    }

    // Método para simular la detención del Tesla
    public function detener() {
        echo "El Tesla se ha detenido.\n"; // Imprime un mensaje indicando que el Tesla se detiene
    }

    // Método para obtener información del Tesla, incluyendo el nivel de batería
    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Nivel de batería: {$this->nivelBateria}%"; // Devuelve información del vehículo base más el nivel de batería
    }

    // Implementación del método cargarBateria de la interfaz
    public function cargarBateria() {
        $this->nivelBateria = 100; // Establece el nivel de batería al 100%
        echo "Batería cargada al 100%.\n"; // Imprime un mensaje confirmando que la batería está cargada
    }

    // Implementación del método estadoBateria de la interfaz
    public function estadoBateria(): string {
        return "Nivel de batería: {$this->nivelBateria}%"; // Devuelve el nivel actual de batería como una cadena
    }
}
?>