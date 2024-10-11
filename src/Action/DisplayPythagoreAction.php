<?php

namespace App\Action;

use App\Utility\PythagoreUtility;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment; // Importation de Twig

class DisplayPythagoreAction {
    private $pythagoreUtility;
    private $twig;

    // Injection des dépendances via le constructeur
    public function __construct(PythagoreUtility $pythagoreUtility, Environment $twig) {
        $this->pythagoreUtility = $pythagoreUtility;
        $this->twig = $twig;
    }

    public function execute(): Response {
        // Utilisation de PythagoreUtility pour générer le contenu HTML
        $htmlResponse = $this->pythagoreUtility->display();

        // Rendu du template Twig avec les données
        return new Response($this->twig->render('displayPythagore.html.twig', [
            'htmlResponse' => $htmlResponse,
        ]));
    }
}
