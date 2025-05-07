<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Entity\Post;
use App\Form\AppointmentType;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use http\Client\Curl\User;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/', name: 'app_user')]
    public function index(EntityManagerInterface $em): Response
    {
        $posts = $em->getRepository(Post::class)->findAll();
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'posts' => $posts,
        ]);
    }

    #[Route('/user/{id}', name: 'app_user_profile')]
    public function userProfile(EntityManagerInterface $em, int $id): Response
    {



        $user = $em->getRepository(\App\Entity\User::class)->find($id);
        $appointmentSpecialists = $user->getAppointmentSpecialist();
        $appointments = $user->getAppointments();
        return $this->render('user/user.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user,
            'appointments' => $appointments,
            'appointmentSpecialists' => $appointmentSpecialists,
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


    #[Route('/all-appointments', name: 'app_all_appointments')]
    public function allAppointments(EntityManagerInterface $em): Response
    {

        $appointments = $em->getRepository(Appointment::class)->findAll();

        return $this->render('user/allappointments.html.twig', [
            'controller_name' => 'UserController',

            'appointments' => $appointments,
        ]);
    }

    #[Route('/appointment/delete/{id}', name: 'app_appointment_delete')]
    public function deleteAppointment(EntityManagerInterface $em, Appointment $appointment): Response {


        $em->remove($appointment);

        $em->flush();



        //We maken een redirect naar de route om het aangepaste boek te tonen
        return $this->redirectToRoute('app_all_appointments');
    }



    #[Route('/Post', name: 'app_make_post')]
    public function makePost(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $em): Response
    {
        $appointment = new Appointment();
        $form = $this->createForm(PostType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $appointment = $form->getData();
            $em->persist($appointment);
            $em->flush();
            return $this->redirectToRoute('app_user');
        }


        return $this->render('user/nieuwsbrief.html.twig', [
            'controller_name' => 'UserController',
            'form'=>$form
        ]);
    }

}
