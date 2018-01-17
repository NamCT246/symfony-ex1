<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Button;

class MainController extends Controller
{
    /**
     * @Route("/", name="secret")
     */
    public function index()
    {
        $button = new Button();
      
        if (!isset($_SERVER["QUERY_STRING"])) {
            $button->setText('Hello world');
            $text = $button->getText();
        } else {
            $button->setText('This is a new Hello world text');
            $text = $button->getText();
        }

        // Let's keep the index.php as original.
        return $this->render('secret/secret.html.twig', array(
          'text' => $text,
        ));
    }
}
