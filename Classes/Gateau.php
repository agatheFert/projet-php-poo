<?php

namespace Classes;

class Gateau
{
  public static $nbEated = 0;
  

  private static $nbEated = 0;
  public static function getNbEated(): int {
      return self::$nbEated;
  }
  public static function setNbEated(int $nb): void {

    self::$nbEated = self::$nbEated + $nb;
  }
  

}




?>