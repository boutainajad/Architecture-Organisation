<?php
namespace App\NiveauMoyen\Composition;

class Commande {
    private array $produits = [];
    public const TVA = 0.2;

    public function ajouterProduit(Produit $produit): void {
        $this->produits[] = $produit;
    }

    public function calculerTotal(): float {
        return array_reduce($this->produits, fn($total,$p) => $total + $p->getPrix(), 0);
    }

    public function calculerTotalTTC(): float {
        return $this->calculerTotal() * (1 + self::TVA);
    }
}
