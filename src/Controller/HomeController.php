<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Photo;

class HomeController extends AbstractController

{
	/**
     * @Route("/", name="home")
     */
		public function index(): Response
		{
			$repository = $this->getDoctrine()->getRepository(Photo::class);
        	$photo = $repository->findByTitle('dino');

			return $this->render('home/index.html.twig', [
				'photos' => $photo,
			]);
		}
}