<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Photo;

class HPHController extends AbstractController
{
    /**
     * @Route("/hoppophop/", name="hoppophop")
     * @return Response
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Photo::class);

        $photo = $repository->findByEvent('Hop Pop Hop');

        return $this->render('hph/index.html.twig', [
            'photos' => $photo
        ]);
    }
}
