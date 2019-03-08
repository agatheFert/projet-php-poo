<?php
namespace Classes\Vehicule;


/** Class Voiture : classe représentant une voiture ... */
class Voiture {


/** @var string ...*/ 
protected $marque;

/** @var string ...*/ 
protected $moteur;

protected $km;

/** MEttre constructeurs : sous proprietes et au-dessus fonctions */
function __construct(string $newMarque, string $newMoteur)
{ 
    echo "Appel du constructeur <br/>" ; 
    $this->marque = $newMarque; 
    $this->moteur = $newMoteur; 
    $this->km = 0;
}

public function getMarque(): string 
{
    return $this->marque;
}


public function setMarque(string $newMarque): void 
{
   $this->marque = $newMarque;

}


public function getMoteur(): string 
{
    return $this->moteur;
}


public function setMoteur(string $newMoteur): void 
{
   $this->moteur = $newMoteur;

}


public function rouler(int $kilometres ): void{
    echo '<p>J\' avance de ' .  $kilometres   .  'km</p>;';
    $this->km = $this->km + $kilometres;
    echo '<p>Kilometrage = ' . $this->km . '</p>';
}




}



?>