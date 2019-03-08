<?php

namespace Classes\Vehicule;

class VoitureDiesel extends Voiture{

  private $pollution;


   public function getPollution(): int 
  {
      return $this->pollution;
  }
  
  
  public function setPollution(int $newPollution): void 
  {
     $this->pollution = $newPollution;
  
  }

  function __construct(string $newMarque, string $newMoteur)
{ 
    echo "Appel du constructeur <br/>" ; 
    $this->marque = $newMarque; 
    $this->moteur = $newMoteur; 
    $this->km = 0;
}

  
public function rouler(int $kilometres ): void{
    echo '<p>J\' avance de ' .  $kilometres   .  'km</p>;';
    $this->km = $this->km + $kilometres;
    $this->pollution = $this->pollution + $kilometres;
    echo '<p>Kilometrage = ' . $this->km . ' ET pollution = ' . $this->pollution . '</p>';
}




}







?>