<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController {

     /**
     * @Route("/ola")
     */
    public function olaMundoAction(Request $request): Response {

        //de qual rota ele veio
        $pathInfo = $request->getPathInfo();


        //query string
        //$parametro = $request->query->get('parametro','');
        $query = $request->query->all();

       return New JsonResponse(['mensagem'=> 'Olá mundo',
        'pathInfo'=>$pathInfo,
        'query'=>$query]);
    }

}