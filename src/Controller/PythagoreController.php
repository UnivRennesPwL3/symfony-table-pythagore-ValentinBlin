<?php

namespace App\Controller;

use App\Action\DisplayPythagoreAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PythagoreController extends AbstractController {
    private $displayPythagoreAction;

    // Injecter l'action via le constructeur
    public function __construct(DisplayPythagoreAction $displayPythagoreAction) {
        $this->displayPythagoreAction = $displayPythagoreAction;
    }

    /**
     * @Route("/pythagore/view", name="pythagore_view")
     */
    public function view(): Response {
        // Exécuter l'action et retourner le résultat dans la vue
        return $this->displayPythagoreAction->execute();
    }
}

