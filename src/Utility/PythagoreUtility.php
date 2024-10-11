<?php
namespace App\Utility; // Conservez cette ligne pour le namespace

class PythagoreUtility {
    public function display(): string { // Assurez-vous que la méthode retourne une chaîne
        $t1 = range(1, 10); // Génère les nombres de 1 à 10
        $t2 = range(1, 10);
        $output = ""; // Initialisez une variable pour le contenu à afficher

        // Affichage de l'en-tête de la table
        $output .= "|  X  |";
        foreach ($t1 as $n) {
            $output .= sprintf(" %3d |", $n); // Formatage pour une meilleure lisibilité
        }
        $output .= "\n";

        // Séparateur
        $output .= str_repeat("-", 60) . "\n";

        // Affichage du tableau de Pythagore
        foreach ($t2 as $n2) {
            $output .= sprintf("| %3d |", $n2); // Colonne de gauche avec les nombres
            foreach ($t1 as $n1) {
                $output .= sprintf(" %3d |", $n1 * $n2); // Multiplication et formatage
            }
            $output .= "\n";
        }

        return $output; // Retournez le contenu de la table
    }
}
