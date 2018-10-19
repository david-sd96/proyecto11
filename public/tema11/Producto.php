<?php
/**
 *  Clase Producto
 */
class Producto implements iEnCarrito
{
  use MasMenos;

  private $nombre;

  private $iva;
  private $cantidad = 1;

  public function mostrar()
  {
    return "<p><span>({$this->cantidad}x)</span> {$this->nombre}: {$this->precio} &euro; + {$this->iva}%</p>";
  }

  public function precio()
  {
    return $this->precio* $this->cantidad;
  }

  public function precioIva()
  {
    return round($this->precio*$this->cantidad*(1+$this->precio*$this->iva/100),2);
  }

  public function __construct($nombre, $precio, $iva=21)
  {
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->iva = $iva;

  }

  public function permiteUnidades()
  {
    return true;
  }
}
?>
