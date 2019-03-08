<?php include 'header.php'; ?>


<?php

require 'autoloader.php';


use Classes\Database\Connection;




$connection = new Connection();
$arrayProducts = $connection->query('SELECT * FROM product');
//var_dump($arrayProducts);


?>

<main class="container">

<?php foreach ($arrayProducts as $oneProduct) : ?>

<?php // var_dump($oneProduct); ?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $oneProduct['name'] ;?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $oneProduct['price'] . "€";?></h6>
    <p class="card-text"><?= $oneProduct['description'] ;?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


<?php endforeach ?>



</main>








<?php include 'footer.html' ?>