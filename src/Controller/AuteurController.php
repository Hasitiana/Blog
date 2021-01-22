<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Form\AuteurFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;

class AuteurController extends AbstractController
{

    /**
     * @Route("/auteurs", name="auteurs")
     */
    public function index() : Response{
        $auteurs = $this->getDoctrine()->getManager()->getRepository(Auteur::class)->findAll();

        return $this->render('auteur/index.html.twig', [
            "auteurs" => $auteurs,
            "title" => "Liste des auteurs"
        ]);
    }

    /**
     * @Route("/ajout_auteur", name="ajout_auteur")
     */
    public function ajoutAuteur(Request $request):Response
    {
        $auteur = new Auteur();
        $form = $this->createForm(AuteurFormType::class, $auteur);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($auteur);
            $entityManager->flush();
            
            $this->addFlash('success', "Un auteur a été bien ajouté");
            return $this->redirectToRoute("ajout_auteur");
        }
        return $this->render('auteur/auteur-form.html.twig', [
            'controller_name' => "AuteurController",
            'form_title' => "Ajouter un auteur",
            'form_auteur' => $form->createView()
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {
        return $this->render('login.html.twig',[
            "form_title" => "Login"
        ]);
    }

    /**
     * @Route("/seconnecter", name="seconnecter")
     */
    public function seConnecter(Request $request, Session $session)
    {
        $nomAuteur = $request->request->get('nom');
        $auteur = $this->get('doctrine')->getManager()->getRepository(Auteur::class)->findAuteurByName($nomAuteur);
        if(!$auteur){
            $this->addFlash('error', "Cet auteur n'existe pas");
            return $this->render('login.html.twig',[
                "form_title" => "Login"
            ]);
        }
        
        $session->set('nom', $auteur);
        return $this->redirectToRoute("articles");
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logout(Request $request, Session $session)
    {
        $session->remove('nom');
        return $this->redirectToRoute("articles");
    }
}
