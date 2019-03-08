<?php

use Classes\Product;
use Classes\Category;

// les inclusions


require_once ('autoloader.php');
echo 'Bonjour fichier index';


// Creation de l'objet
$hamac = new Product();


// Changements  de l'objet Hamac
$hamac->setName('Hamac');
$hamac->setDescription('Pour se reposer');
$hamac->setPrice(155);
var_dump ($hamac);



// Creation de l'objet
$parasol = new Product();
// Changements de l'objet Parasol
$parasol->setName('Parasol');
$parasol->setDescription('Pour se protéger du soleil');
$parasol->setPrice(10.5);
var_dump ($parasol);

// Affichage d'une propriete (price) du parasol
echo '<p>' . $parasol->getPrice() . '€</p>';

// Appel d'une méthode du parasol
echo '<p>' . $parasol->displayPrice() . '</p>';
echo '<p>' . $hamac->displayPrice() . '</p>';

// Affichage d'une constante : par rappot a l'objet 
echo '<p> nombre de vues par defaut des produits : ' . $hamac::DEFAULT_NB_VIEWS . '</p>';

// Affichage d'une constante : par rappot a la Class
echo '<p> nombre de vues par defaut des produits : ' . Product::DEFAULT_NB_VIEWS . '</p>';


// Recuperer 



$voyage = new Category();

?>

