<?php

class Cart {

    private array $items;

    public function __construct() {
        $this->items = array();
    }

    public function add(int $id) {
        if (!isset($this->items[$id])) {
            $this->items[$id] = 1;
        } else {
            $this->items[$id]++;
        }
    }

    public function update(int $id, int $quantity) {
        if (isset($this->items[$id])) {
            $this->items[$id] += $quantity;
        } else {
            $this->items[$id] = $quantity;
        }
    }

    public function delete(int $id) {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
    }

    public function displayCart() {
        echo "<table>";
        echo "<tr><th>ID</th><th>Quantité</th></tr>";
        foreach ($this->items as $id => $quantity) {
            echo "<tr><td>$id</td><td>$quantity</td></tr>";
        }
        echo "</table>";
    }
}

// Exemple d'utilisation
$cart = new Cart();

$cart->add(123);
$cart->add(456);
$cart->update(456, 2);
$cart->delete(123);

$cart->displayCart();


?>