<?php
include_once 'clases/pokemonpadre.php';
class salva extends pokemonpadre
{
  private $calvicie = 0;
  function __construct()
  {
    $this->calvicie();
  }
  public function calvicie()
  {
    $this->calvicie = rand(25,75);
    return $this->calvicie;
  }
  public function getcalvicie()
  {
      return $this->calvicie;
  }
  public function setcalvicie($calvicie)
  {
      $this->calvicie = $calvicie;
      return $this;
  }
}
 ?>
