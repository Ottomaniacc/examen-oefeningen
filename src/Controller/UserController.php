<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/{id}', name: 'app_user_profile')]
    public function userProfile(EntityManagerInterface $em, int $id): Response
    {

        $user = $em->getRepository(\App\Entity\User::class)->find($id);

        return $this->render('user/user.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user,
        ]);
    }
}
