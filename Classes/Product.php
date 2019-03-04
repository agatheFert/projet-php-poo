<?php

class Product {
	const DEFAULT_NB_VIEWS = 0;
	
	private $name ;
	private $description ;
	private $price ;
	
	public function getName() : string
    {	
    return $this->name;	
    }
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
	
	
	public function getPrice() : float
    {	
    return $this->price;	
    }
    public function setPrice(float $price):void {
		
	if($price < 0){
		die('Le prix doit etre superieur à 0');
    }		
   	$this->price = $price;
    }	
	
	
	public function displayPrice() {
		return 'Le prix : ' .$this->price . '€' ;
}

}