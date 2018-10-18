<?php
/**
 *
 */
class Persona
{
  private $nombre;
  private $fechaNac;
  private $trabajo;

  public function verDatos()
  {
    $tabla ="<td>$this->nombre</td><td>$this->fechaNac</td>
      <td>$this->trabajo</td>";
    return $tabla;
  }

  function __construct($nombre, $fechaNac='desconocida', $trabajo='desconocido')
  {
    $this->nombre = $nombre;
    $this->fechaNac = $fechaNac;
    $this->trabajo = $trabajo;
  }
}
?>
