<?php

namespace App\Controller;

use App\Entity\Medico;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MedicoController {

    /**
     * @Route("/medicos", methods={"POST"})
     */
    public function novo(Request $request): Response
    {
       $corpoRequisicao = $request->getContent();

       $dadosEmJson = json_decode($corpoRequisicao);

        $medico1 = new Medico();
        $medico1->crm = $dadosEmJson->crm;
        $medico1->nome = $dadosEmJson->nome;

       return new JsonResponse($medico1);
    }
}