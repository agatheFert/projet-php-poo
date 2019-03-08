<?php

namespace Classes;

class Product {
	const DEFAULT_NB_VIEWS = 0;
	
	private $name ;
	private $description ;
    private $price ;
    
    public function displayPrice() {
		return 'Le prix : ' .$this->price . '€' ;
    }
	
	public function getName() : string
    {	
    // $this->name;  name est le $name de la propriete
    return $this->name;	
    }
    // :void  -> ne doit rien retourner 
    // si je fais un return de cette fonction j'aurai un message d'erreur qui dira "cete fonction ne doit rien retourner"
    public function setName(string $nouveauNom):void {
   	$this->name = $nouveauNom;
    }
	
	public function getDescription() : string
    {	
    return $this->description;	
    }
    public function setDescription(string $newDescription):void {
   	$this->description = $newDescription;
    }    
    
    public function getPrice(): float
    {
        return $this->price;
    }
	
    public function setPrice(float $newprice):void {
		
	if($newprice < 0){
		die('Le prix doit etre superieur à 0');
    }		
   	$this->price = $newprice;
    }	
	
	
	

}