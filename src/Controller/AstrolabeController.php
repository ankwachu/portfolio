<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Photo;

class AstrolabeController extends AbstractController
{
    /**
     * @Route("/astrolabe/", name="astrolabe")
     * @return Response
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Photo::class);
        $photo = $repository->findByEvent('Astrolabe');
        
        return $this->render('astrolabe/index.html.twig', [
            'photos' => $photo,
        ]);
    }
}
