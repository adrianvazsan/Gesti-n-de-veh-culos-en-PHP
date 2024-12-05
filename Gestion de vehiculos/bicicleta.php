<?php
// Definición de la clase Bicicleta
final class Bicicleta {
    // Propiedades privadas de la clase
    private string $marca;  // Almacena la marca de la bicicleta
    private string $modelo; // Almacena el modelo de la bicicleta

    // Constructor de la clase, se llama al crear una nueva instancia de Bicicleta
    public function __construct(string $marca, string $modelo) {
        $this->marca = $marca;   // Inicializa la propiedad marca
        $this->modelo = $modelo; // Inicializa la propiedad modelo
    }

    // Método que simula el acto de pedalear
    public function pedalear() {
        echo "La bicicleta está pedaleando.\n"; // Imprime un mensaje indicando que se está pedaleando
    }

    // Método que devuelve información sobre la bicicleta
    public function obtenerInformacion(): string {
        // Retorna una cadena con la información de la bicicleta
        return "Bicicleta - Marca: {$this->marca}, Modelo: {$this->modelo}";
    }
}
?>