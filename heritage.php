<?php include 'header.php'; ?>


<?php

use Classes\Vehicule\VoitureElectrique;


require 'autoloader.php';

$voiturenormal1 = new \Classes\Vehicule\Voiture('Ferrari', 'moteur Ferrari');

$voiturediesel1 = new \Classes\Vehicule\VoitureDiesel('Nissan', 'Diesel');
var_dump($voiturediesel1);



$voitureelectrique1 = new VoitureElectrique('Tesla', 'Electrique');


?>

<main class="container">
  <h1><?= $voiturenormal1->getMarque();    ?></h1>
  <h1><?= $voiturenormal1->rouler(10);    ?></h1>
  <h1><?= $voiturediesel1->getMarque();    ?></h1>
  <h1><?= $voiturediesel1->rouler(50);    ?></h1>
  <p><strong>voiture electrique :</strong><?= $voitureelectrique1->getMarque();    ?></p>
  <p><strong>voiture electrique :</strong><?= $voitureelectrique1->rouler(10);    ?></p>
  <p><strong>voiture electrique :</strong><?= $voitureelectrique1->rouler(100);    ?></p>


  

</main>

<?php include 'footer.html' ?>
