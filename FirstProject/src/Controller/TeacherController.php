<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    #[Route('/teacher/{name}', name: 'app_teacher_name')]
    public function showTeacher($name): Response
    {
  return $this->render('teacher/index.html.twig', [
    'nom' => $name
]);
    }
    #[Route('/redirect', name: 'app_redirect')]
    public function goToIndex(): Response
    {
  return $this->forward('App\Controller\StudentController::index');
    }
}
