<?php
class Item {
  public $name;
  public $description;
  public $price;
  public $imageUrl;
  public $weight;
  public $stock;
  public $available;


  public function __construct($name, $description, $price, $imageUrl, $weight, $stock, $available) {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->imageUrl = $imageUrl;
    $this->weight = $weight;
    $this->stock = $stock;
    $this->available = $available;
  }

// Getters et setters

public function getNom(): string {
    return $this->name;
}

public function setNom(string $nom): void {
    $this->name = $nom;
}

public function getDescription(): string {
    return $this->description;
}

public function setDescription(string $description): void {
    $this->description = $description;
}

public function getPrix(): float {
    return $this->price;
}

public function setPrix(float $prix): void {
    $this->prix = $prix;
}
  // Methods

  public function isInStock() {
    return $this->stock > 0 && $this->available === 'yes';
  }
}

function displayItem(Item $item) {
    // Début du bloc HTML
    echo <<<HTML
    <div class="item">
      <h2>{$item->name}</h2>
      <img src="{$item->imageUrl}" alt="{$item->name}">
      <p>{$item->description}</p>
      <p>Prix : {$item->price}€</p>
      <p>En stock : {$item->stock}</p>
      <p>Disponible : {$item->available}</p>
    </div>
    HTML;
    // Fin du bloc HTML
  }

$item= new Item("nom", "description", 5, "imageUrl", 15, 3, true);
displayItem($item);





?>