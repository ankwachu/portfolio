<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Photo;

class TheatreController extends AbstractController
{
    /**
     * @Route("/scene-nationale-orleans/", name="scene-nationale-orleans")
     * @return Response
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Photo::class);
        $photo = $repository->findByEvent('theatre');

        return $this->render('theatre/index.html.twig', [
            'photos' => $photo
        ]);
    }
}
