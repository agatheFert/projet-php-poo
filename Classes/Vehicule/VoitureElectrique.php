<?php

namespace Classes\Vehicule;

class VoitureElectrique extends Voiture{

    private $energie = 100;


     /**
     * Surcharge : il perd de l'énergie en roulant
     * @param int $kilometres
     */
    public function rouler(int $kilometres): void
    {
        // On augmente les kilomètres
        $this->km = $this->km + $kilometres;
        // On perd de l'énergie
        $this->setEnergie($this->energie - $kilometres);

        // On vérifie qu'il nous reste de l'énergie pour rouler
        if($this->energie < $kilometres) {
            //echo 'Plus d\'énergie';
            throw new \Exception("Plus d\'energie");
        } else {
            // Affichage
            echo '<p>Kilométrage = '. $this->km .', énergie : '. $this->energie .'</p>';
        }
  }



    
    public function getEnergie(): int 
    {
        return $this->energie;
    }    
    




    // si on abesoin de faire des calculs sur la variable
    public function setEnergie(int $newEnergie): void 
    {
       if ($newEnergie < 0 ){
           $this->energie = 0;
       } elseif ($newEnergie > 100 ){
           $this->energie = 100;
       }       
       else {
        $this->energie = $newEnergie;
       }     
    }







}







?>