<?php
include_once 'clases/pokemonpadre.php';
class marcos extends pokemonpadre
{
  private $acierto=100;
  // Funciones
  function __construct()
  {
  }
  public function hambre()
  {
    $hambre = rand(0,50);
    $this->acierto = $this->acierto - $hambre;
    return $this->acierto;
  }
  public function getAcierto()
  {
      return $this->acierto;
  }
  public function setAcierto($acierto)
  {
      $this->acierto = $acierto;
      return $this;
  }
}
 ?>
