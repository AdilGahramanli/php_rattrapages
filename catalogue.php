<?php


class Catalogue extends Item{



    private array $items;

    public function __construct(PDO $pdo, string $sql) {
        // Exécution de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Initialisation du tableau d'items
        $this->items = [];

        // Parcours du résultat et création des objets Item
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $nom = $row['nom'];
            $description = $row['description'];
            $prix = $row['prix'];

            $this->items[] = new Item($name, $description, $price);
        }
    }

    // Méthodes pour accéder aux items du catalogue
    public function getItems(): array {
        return $this->items;
    }

    public function getItemById(int $id): ?Item {
        foreach ($this->items as $item) {
            if ($item->getId() === $id) {
                return $item;
            }
        }
        return null;
    }

    // ... (autres méthodes utiles)
    function displayCatalogue(Catalogue $catalogue): void {
        // Début du code HTML
        echo '<ul>';
    
        // Parcourir les items du catalogue
        foreach ($catalogue->getItems() as $item) {
            // Affichage de chaque item
            echo <<<HTML
            <li>
                <h3>{$item->getNom()}</h3>
                <p>{$item->getDescription()}</p>
                <span class="prix">{$item->getPrix()} €</span>
            </li>
            HTML;
        }
    
        // Fin du code HTML
        echo '</ul>';
    }
    
}

// Création du catalogue
// $catalogue = new Catalogue($pdo, $sql);

// // Affichage du catalogue
// displayCatalogue($catalogue);





?>