<?php
include_once 'clases/pokemonpadre.php';
class jose extends pokemonpadre
{
  private $sue = 0;
  private $enmonamiento = 20;
  function __construct()
  {
    $this->enmonamiento();
  }
  public function getSue()
  {
      return $this->sue;
  }
  public function setSue($sue)
  {
      $this->sue = $sue;
      return $this;
  }
  public function setenmonamiento($enmonamiento)
  {
      $this->enmonamiento = $enmonamiento;
      return $this;
  }
  public function getenmonamiento()
  {
      return $this->enmonamiento;
  }
  public function enmonamiento()
  {
    $this->sue = rand(0,99);
    if ($this->sue > 50) {
      $this->enmonamiento = 100;
  }
  return $this->enmonamiento;
  }
}
 ?>
