<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, ContactNotification $notification)
    {
        $contact = new Contact;
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $notification->notify($contact);

            $this->addFlash('success', 'votre message a été envoyé');
            $this->redirectToRoute('contact');
        }
        
        $currentRoute = $request->get('_route');

        return $this->render('contact/contact.html.twig', [
            'currentRoute' => $currentRoute,
            'form' => $form->createView()
        ]);
    }
}
