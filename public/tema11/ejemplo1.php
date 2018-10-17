<?php

/**
 *
 */
class Freelance
{
  private $nombre;
  protected $ocupado;
  private $precioHora = 10;
  private $comienzoTrabajo;
  public static $juegoCaracteres = 'UTF-8';

  public function __construct($nombre, $precioHora)
  {
    $this->nombre = $nombre;
    $this->precioHora = $precioHora;
    $this->ocupado = false;
  }

  public function desarrollar()
  {
    echo '<br>Soy'.$this->nombre."y comienzo a trabajar";
    echo "Uso la codificación ". self::$juegoCaracteres;
    $this->ocupado = true;
    $this->comienzoTrabajo = time();

  }

  public function parar()
  {
    $this->ocupado = false;
    $horasTrabajadas = ceil((time() - $this->comienzoTrabajo) / 3600);
    echo "Terminé de trabajar. Facturo". $horasTrabajadas * $this->precioHora;
  }

  public function __destruct()
  {
    echo 'Soy '.$this->nombre.' y dejo de trabajar';
  }

  public static function diasTrabajo()
  {
    if ($invierno){
      return ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
    } else {
      return ['Lunes','Martes','Miercoles','Jueves','Viernes'];
    }
  }
}
?>
