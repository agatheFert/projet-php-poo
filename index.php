<?php

// les inclusions


require_once ('autoloader.php');
echo 'Bonjour fichier index';


// Creation de l'objet
$hamac = new Product();
$voyage = new Category();

// Changement du nom de l'objet Hamac
$hamac->name = 'Hamac';
$hamac->description = 'Pour se reposer';
$hamac->price = 150;
var_dump ($hamac);



// Creation de l'objet
$parasol = new Product();
$parasol->setName = ('Parasol');
$parasol->setDescription = ('Pour se protéger du soleil');
$parasol->setPrice = (100);
var_dump ($parasol);

// Affichage d'une propriete (price) du parasol
echo '<p>' . $parasol->price . '€</p>';

echo '<p>' . $parasol->displayPrice() . '</p>';

// Affichage d'une constante : par rappot a l'objet 
echo '<p> nombre de vues par defaut des produits : ' . $hamac::DEFAULT_NB_VIEWS . '</p>';

// Affichage d'une constante : par rappot a la constante
echo '<p> nombre de vues par defaut des produits : ' . Product::DEFAULT_NB_VIEWS . '</p>';


// Recuperer 





?>

