<?php
include_once 'clases/marcos.php';
// Nuevo objeto
$Manjuc = new marcos();
$Manjuc -> setTipo('Agua');
$Manjuc -> setNombre('Marcos');
$Manjuc -> setAtaque('Surf');
$Manjuc -> poder('gapo');
$Manjuc -> setNivelmax('85');
$Manjuc -> hambre();
echo "<h1>Marcos</h1>";
echo "Nombre: ".$Manjuc->getNombre();
echo "<br>Tipo: ".$Manjuc->getTipo();
echo "<br>Ataque: ".$Manjuc->getAtaque();
echo "<br>Poder: ".$Manjuc->poder();
echo "<br>Ataque: ".$Manjuc->getNivelmax();
echo "<br>Hambre: ".$Manjuc->hambre();
 ?>
 <?php
 include_once 'clases/jose.php';
 // Nuevo objeto
 $Sance = new jose();
 $Sance -> setTipo('psiqo');
 $Sance -> setNombre('jose');
 $Sance -> setAtaque('cigarrillo');
 $Sance -> poder('tirar_chusta');
 $Sance -> setNivelmax('100');
 $Sance -> enmonamiento();
 echo "<h1>jose</h1>";
 echo "Nombre: ".$Sance->getNombre();
 echo "<br>Tipo: ".$Sance->getTipo();
 echo "<br>Ataque: ".$Sance->getAtaque();
 echo "<br>Poder: ".$Sance->poder();
 echo "<br>Ataque: ".$Sance->getNivelmax();
 echo "<br>Empanamiento: ".$Sance->enmonamiento();
  ?>
  <?php
  include_once 'clases/andreu.php';
  // Nuevo objeto
  $Moflalba = new andreu();
  $Moflalba -> setTipo('Planta');
  $Moflalba -> setNombre('andreu');
  $Moflalba -> setAtaque('Veneno');
  $Moflalba -> poder('transformacion_mantis');
  $Moflalba -> setNivelmax('100');
  $Moflalba -> getAutodestruccion();
  echo "<h1>Andreu</h1>";
  echo "Nombre: ".$Moflalba->getNombre();
  echo "<br>Tipo: ".$Moflalba->getTipo();
  echo "<br>Ataque: ".$Moflalba->getAtaque();
  echo "<br>Poder: ".$Moflalba->poder();
  echo "<br>Ataque: ".$Moflalba->getNivelmax();
  echo "<br>Probabilidad de destruccion: ".$Moflalba->getAutodestruccion();
   ?>
   <?php
   include_once 'clases/Salva.php';
   // Nuevo objeto
   $Jaumerex = new salva();
   $Jaumerex -> setTipo('Fuego');
   $Jaumerex -> setNombre('Salva');
   $Jaumerex -> setAtaque('Mordisco');
   $Jaumerex -> poder();
   $Jaumerex -> setNivelmax('100');
   $Jaumerex -> calvicie();
   echo "<h1>salva</h1>";
   echo "Nombre: ".$Jaumerex->getNombre();
   echo "<br>Tipo: ".$Jaumerex->getTipo();
   echo "<br>Ataque: ".$Jaumerex->getAtaque();
     echo "<br>Poder: ".$Jaumerex->poder();
   echo "<br>Ataque: ".$Jaumerex->getNivelmax();
   echo "<br>Hiperactividad: ".$Jaumerex->calvicie();
    ?>
