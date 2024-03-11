<?php

class ItemSpecifique extends Item {
  private $attribut_specifique;

  function __construct($name, $description, $price, $attribut_specifique) {
    parent::__construct($name, $description, $price);
    $this->attribut_specifique = $attribut_specifique;
  }

  public function getAttributSpecifique() {
    return $this->attribut_specifique;
  }

  public function setAttributSpecifique($attribut_specifique) {
    $this->attribut_specifique = $attribut_specifique;
  }
}

?>
