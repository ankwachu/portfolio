<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Photo;

class NanarController extends AbstractController
{
    /**
     * @Route("/nanani-nananard/", name="nanani-nananard")
     * @return Response
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Photo::class);
        $photo = $repository->findByEvent('Nanani Nananard');

        return $this->render('nanar/index.html.twig', [
            'photos' => $photo
        ]);
    }
}
