<?php

namespace App\Controller;

use App\Entity\School;
use App\Repository\SchoolRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/school", name="school_")
 */
class SchoolController extends AbstractController
{
    /**
     * @Route("s", name="showAll")
     */
    public function showAll(SchoolRepository $schoolRepository)
    {
        // $schools = $this->getDoctrine()->getRepository(School::class)->findAll();
        $schools = $schoolRepository->findAll();

        return $this->render('home/school/showAll.html.twig', [
            'schools' => $schools,
        ]);
    }

    /**
     * @Route("/{id}", name="showOne")
     */
    public function showOne(School $school)
    {
        return $this->render('home/school/showOne.html.twig', [
            'school' => $school,
        ]);
    }
}
