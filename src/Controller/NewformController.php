<?php

 

namespace App\Controller;

 

use App\Form\TimezoneType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

 

 

class NewformController extends AbstractController

{

    #[Route('/newform', name: 'app_newform')]

    public function index(Request $request): Response

    {

 

        $form = $this->createForm(TimezoneType::class);

        $form->handleRequest($request);

 

        if ($form->isSubmitted() && $form->isValid()) {

            // Handle the form submission, e.g., save the selected timezone

            // $timezone = $form->getData()['timezone'];

        

            // Redirect or render a response

            return $this->render('sucess/index.html.twig',[
                


            ]);

 

        }

 

        return $this->render('time/select_time.html.twig', [

            'form' => $form->createView(),

        ]);

    }

}

 