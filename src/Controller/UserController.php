<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use Doctrine\ORM\EntityManagerInterface;
use http\Client\Curl\User;
use http\Env\Request;
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

    #[Route('/appointment', name: 'app_make_appointment')]
    public function makeAppointment(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $em): Response
    {
        $appointment = new Appointment();
        $form = $this->createForm(AppointmentType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $appointment = $form->getData();
            $em->persist($appointment);
            $em->flush();
            return $this->redirectToRoute('app_user');
        }


        return $this->render('user/appointment.html.twig', [
            'controller_name' => 'UserController',
            'form'=>$form
        ]);
    }




}
