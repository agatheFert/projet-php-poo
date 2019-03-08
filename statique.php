<?php

require 'autoloader.php';

// fabriquer des gateaux, compter nombre gateaux
var_dump(Gateau::$nbEated);
var_dump(Gateau::getNbEated());
Gateau::$nbEated++;
var_dump(Gateau::$nbEated);
var_dump(Gateau::getNbEated());















?>