<?php

require 'autoloader.php';

//// Logique
// Instanciation de "Connection"

use Classes\Database\Connection;


// Appel de la méthode "preparedQuery" de Connection
$connection = new Connection();
$query = "SELECT * FROM product WHERE id = :idCustom";
$product = $connection->preparedQuery($query);

//var_dump($product);

//// HTML
// header
 include 'header.php'; 

?>

<main class="container">

 
<!-- Affichage des propriétés du produit -->
   <h1><?= $product[0][1] ;?></h1>
   <p><?= $product[0][2] ;?></p>




</main>










<!-- footer -->
<?php include 'footer.html' ?>
















