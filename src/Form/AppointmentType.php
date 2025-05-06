<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('time')
            ->add('subject')
            ->add('problems')
            ->add('discussed')
            ->add('user', EntityType::class, [
                'class' => User::class,
'choice_label' => 'firstname',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }

    public function createAppointment(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AppointmentType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $appointment = $form->getData();
            $entityManager->persist($appointment);
            $entityManager->flush();

//            $this->addFlash('success', 'Het boek is toegevoegd');

            return $this->redirectToRoute('app_user');
        }

        return $this->render('book/appointment.html.twig', [
            'form' => $form
        ]);
    }
}
