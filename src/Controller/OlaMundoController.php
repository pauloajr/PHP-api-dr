<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController {

     /**
     * @Route("/ola")
     */
    public function olaMundoAction(Request $request): Response {
        echo "Ola mundo!";
        exit();
    }

}