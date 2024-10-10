<?php

<?php

namespace App\Controller;

use App\Action\DisplayPythagoreAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController {
    /**
     * @Route("/pythagore/view", name="pythagore_view")
     */
    public function view() {
        $action = new DisplayPythagoreAction();
        return $action->execute($this->get('twig'));
    }
}

?>