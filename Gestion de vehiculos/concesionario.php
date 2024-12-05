<?php
// Definición de la clase Concesionario
class Concesionario {
    // Método para mostrar información de un vehículo
    public function mostrarVehiculo(Vehiculo $vehiculo) {
        echo $vehiculo . "\n"; // Imprime la representación del vehículo
    }
}

// Creación de una instancia de la clase Concesionario
$concesionario = new Concesionario();

// Creación de diferentes tipos de vehículos
$coche = (new Coche("Toyota", "Corolla", 4))->setNumeroPuertas(5); // Crea un coche Toyota Corolla con 5 puertas
$moto = new Moto("Yamaha", "MT-07", 689); // Crea una moto Yamaha MT-07 con un motor de 689 cc
$camion = new Camion("Volvo", "FH", 18.0); // Crea un camión Volvo FH con una capacidad de 18 toneladas
$tesla = new Tesla("Tesla", "Model S", 85); // Crea un Tesla Model S con una batería de 85 kWh
$bicicleta = new Bicicleta("Giant", "Escape 3"); // Crea una bicicleta Giant Escape 3

// Muestra información de cada vehículo usando el método mostrarVehiculo
$concesionario->mostrarVehiculo($coche);
$concesionario->mostrarVehiculo($moto);
$concesionario->mostrarVehiculo($camion);
$concesionario->mostrarVehiculo($tesla);

// Para la bicicleta, se obtiene información de otra manera
echo $bicicleta->obtenerInformacion() . "\n"; // Imprime la información de la bicicleta

// Llamadas a métodos para simular el movimiento y la detención de los vehículos
$coche->mover(); // Hace que el coche se mueva
$coche->detener(); // Detiene el coche
$moto->mover(); // Hace que la moto se mueva
$moto->detener(); // Detiene la moto
$camion->mover(); // Hace que el camión se mueva
$camion->detener(); // Detiene el camión
$tesla->mover(); // Hace que el Tesla se mueva
$tesla->detener(); // Detiene el Tesla
$bicicleta->pedalear(); // Hace que la bicicleta sea pedaleada
?>