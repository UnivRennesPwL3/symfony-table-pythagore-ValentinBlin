<?php

namespace App\Action;

use App\Utility\PythagoreUtility;
use Symfony\Component\HttpFoundation\Response;

class DisplayPythagoreAction {
    private $pythagoreUtility;

    public function __construct() {
        $this->pythagoreUtility = new PythagoreUtility();
    }

    public function execute($twig): Response {
        $htmlResponse = $this->pythagoreUtility->display();

        return new Response($twig->render('displayPythagore.html.twig', ['htmlResponse' => $htmlResponse,]));
    }
}

?>