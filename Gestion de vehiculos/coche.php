<?php
class Coche extends Vehiculo {
    private int $numeroPuertas;

    public function __construct(string $marca, string $modelo, int $numeroPuertas, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function mover() {
        echo "El coche se está moviendo.\n";
    }

    public function detener() {
        echo "El coche se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Número de puertas: {$this->numeroPuertas}";
    }

    public function setNumeroPuertas(int $numeroPuertas): self {
        $this->numeroPuertas = $numeroPuertas;
        return $this;
    }

    public function getNumeroPuertas(): int {
        return $this->numeroPuertas;
    }
}

?>